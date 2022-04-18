<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class PdfClass02Controller extends Controller
{
     public function index() 
    {
        $type = $_GET["type"];
        $id = $_GET["id"];
        $company = $_GET["com"];

        // Log::info($type);
        // Log::info($id);
        // Log::info($company);

        $content_ok_s = [];
        //題目
        $questions = DB::table('questions')->select('category_id', 'content')->get();
        $ques = json_decode($questions, JSON_UNESCAPED_UNICODE);
        foreach($ques as $key=>$item){
            array_push($content_ok_s, $item);
        }

        $class02Data = DB::table('class02s')->select('company','ques_s','ques_m')->where('id',$id)->get();
        //答案
        $newclass02Data = json_decode("{$class02Data}", true);
        $tmpKey = 0;
        if(!empty( $newclass02Data[0]['ques_s'] )){
            foreach(json_decode($newclass02Data[0]['ques_s']) as $key=>$ansNO){
                $content_ok_s[$tmpKey]['ansNO'] = $ansNO;
                $tmpKey++;
            }
            //選項
            $question_categories_s = DB::table('question_categories')->select('options', 'category')->where('choice','S')->get();
            $ques_cate_s = json_decode($question_categories_s, JSON_UNESCAPED_UNICODE);
            $quesCount = DB::table('questions')->select(DB::raw('count(*) as total'))->groupBy('category_id')->get();
            for($i=1;$i<=count($quesCount);$i++){
                foreach($content_ok_s as $key=>$item){
                    if($item['category_id'] == $i){
                        if($item['ansNO'] == 1){
                            $content_ok_s[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[0];
                        }
                        if($item['ansNO'] == 2){
                            $content_ok_s[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[1];
                        }
                        if($item['ansNO'] == 3){
                            $content_ok_s[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[2];
                        }
                        if($item['ansNO'] == 4){
                            $content_ok_s[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[3];
                        }
                        if($item['ansNO'] == 5){
                            $content_ok_s[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[4];
                        }
                    }
                }
            }

            // 多選
            $content_ok_m = [];
            $question_categories_m = DB::table('question_categories')->select('options', 'category','customize')->where('choice','M')->get();
            $ques_cate_m = json_decode($question_categories_m, JSON_UNESCAPED_UNICODE);
            
            // Log::info($ques_cate_m);
            //答案
            // Log::info('112233');
            // Log::info(json_decode($newclass02Data[0]['ques_m']));
            //題目
            foreach($ques_cate_m as $key=>$item){
                // Log::info($item['category']);
                $content_ok_m[$key]['category'] = $item['category'];
                // $content_ok_m[$key]['ansNO'] = json_decode($newclass02Data[0]['ques_m'])[$key];
                $content_ok_m[$key]['ansNO'] = json_decode($newclass02Data[0]['ques_m'])[$key];
                $content_ok_m[$key]['customize'] = $item['customize'];
            }
            // Log::info($content_ok_m);
            foreach($content_ok_m as $key => $item){
                //取得多選選項數量
                $choiceCount = count(json_decode($ques_cate_m[$key]['options'],JSON_UNESCAPED_UNICODE));
                // Log::info($choiceCount);
                $tmpChoice = '';
                for($i=0;$i<=$choiceCount;$i++){
                    if(in_array($i+1, $item['ansNO'])){
                        if($item['customize'] == 'Y'){
                            $tmpChoice .= json_decode($ques_cate_m[$key]['options'],JSON_UNESCAPED_UNICODE)[$i].$item['ansNO'][1];
                        }else{
                            $tmpChoice .= json_decode($ques_cate_m[$key]['options'],JSON_UNESCAPED_UNICODE)[$i];
                        }
                    }
                }
                $content_ok_m[$key]['ansTxt'] = $tmpChoice;
            }
            //要傳到PDF的因此轉json
            $content_json_m = json_encode($content_ok_m);
            // Log::info($content_ok_m);
        }
        // $type = $_GET["type"];
        // $data = [];
        if($type == 's'){
            $data = $content_ok_s;
            // $data = json_encode($content_ok_s, JSON_UNESCAPED_UNICODE);
        }else{
             $data = $content_ok_m;
            //  $data = json_encode($content_ok_m, JSON_UNESCAPED_UNICODE);
            // Log::info($data);
        }
        $company = $_GET["com"];

        Log::info($data);

        $html   = view ('dompdf', ['type' =>$type,'getData' => $data,'company' => $company]);
        $pdf    = new Dompdf();
        Log::info($html);
        // return $html;

        $customPaper = array(0,0,297*3,210*3);
        $pdf->set_paper($customPaper);

        $pdf->loadHtml ($html);
        $pdf->render ();
        $pdf->stream($company);
    }
}
