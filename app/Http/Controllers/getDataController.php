<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class getDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset($_GET['val'])) {
            
            $title = $_GET['val'];
            $content_ok = [];
            //題目
            $questions = DB::table('questions')->select('category_id', 'content')->get();
            $ques = json_decode($questions, JSON_UNESCAPED_UNICODE);
            foreach($ques as $key=>$item){
                array_push($content_ok, $item);
            }
            //答案
            $newTitle = json_decode("{$title}", true);
            $tmpKey = 0;
            if(!empty( $newTitle )){
                foreach($newTitle as $key=>$ansNO){
                    $content_ok[$tmpKey]['ansNO'] = $ansNO;
                    // array_push($content_ok[$tmpKey], $ansNO);
                    $tmpKey++;
                }
                //選項
                $question_categories_s = DB::table('question_categories')->select('options', 'category')->where('choice','S')->get();
                $ques_cate_s = json_decode($question_categories_s, JSON_UNESCAPED_UNICODE);
                $quesCount = DB::table('questions')->select(DB::raw('count(*) as total'))->groupBy('category_id')->get();
                for($i=1;$i<=count($quesCount);$i++){
                    foreach($content_ok as $key=>$item){
                        if($item['category_id'] == $i){
                            if($item['ansNO'] == 1){
                                $content_ok[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[0];
                            }
                            if($item['ansNO'] == 2){
                                $content_ok[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[1];
                            }
                            if($item['ansNO'] == 3){
                                $content_ok[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[2];
                            }
                            if($item['ansNO'] == 4){
                                $content_ok[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[3];
                            }
                            if($item['ansNO'] == 5){
                                $content_ok[$key]['ansTxt'] = json_decode($ques_cate_s[$i-1]['options'])[4];
                            }
                        }
                    }
                }
                
                // 輸出CSV
                $fileName = '單選問卷.csv';
                $headers = array(
                    "Content-type"        => "text/csv; charset=UTF-8",
                    "Content-Disposition" => "attachment; filename=$fileName",
                    "Pragma"              => "no-cache",
                    "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                    "Expires"             => "0",
                    "Content-Encoding"    => "UTF-8"
                );
                //輸出中文亂碼問題
                print(chr(0xEF).chr(0xBB).chr(0xBF));
                
                $columns = array('答案編號','答案', '題目');
                $callback = function() use($content_ok, $columns) {
                    $file = fopen('php://output', 'w');
                    fputcsv($file, $columns);
        
                    foreach ($content_ok as $task) {
                        // Log::info($task['content']);
                        $row['答案編號']  = $task['ansNO'];
                        $row['答案']    = $task['ansTxt'];
                        $row['題目']    = $task['content'];
        
                        fputcsv($file, array($row['答案編號'], $row['答案'], $row['題目']));
                    }
        
                    fclose($file);
                };
                
                return response()->stream($callback, 200, $headers);
            }  
        }
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getDate_multi()
    {
        if (isset($_GET['val'])) {
            
            $title = $_GET['val'];
            
            $content_ok = [];
            $question_categories_m = DB::table('question_categories')->select('options', 'category','customize')->where('choice','M')->get();
            $ques_cate_m = json_decode($question_categories_m, JSON_UNESCAPED_UNICODE);
            
            // Log::info($ques_cate_m);
            //答案
            $newTitle = json_decode("{$title}", true);
            
            //題目
            foreach($ques_cate_m as $key=>$item){
                // Log::info($item['category']);
                $content_ok[$key]['category'] = $item['category'];
                $content_ok[$key]['ansNO'] = $newTitle[$key];
                $content_ok[$key]['customize'] = $item['customize'];
            }
            
            foreach($content_ok as $key => $item){
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
                $content_ok[$key]['ansTxt'] = $tmpChoice;
            }

            if(!empty( $newTitle )){
                // 輸出CSV
                $fileName = '多選問卷.csv';
                $headers = array(
                    "Content-type"        => "text/csv; charset=UTF-8",
                    "Content-Disposition" => "attachment; filename=$fileName",
                    "Pragma"              => "no-cache",
                    "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                    "Expires"             => "0",
                    "Content-Encoding"    => "UTF-8"
                );
                //輸出中文亂碼問題
                print(chr(0xEF).chr(0xBB).chr(0xBF));
                Log::info($content_ok);
                $columns = array('答案編號','答案', '題目');
                $callback = function() use($content_ok, $columns) {
                    $file = fopen('php://output', 'w');
                    fputcsv($file, $columns);
        
                    foreach ($content_ok as $task) {
                        $row['答案編號'] = json_encode($task['ansNO'], JSON_UNESCAPED_UNICODE);
                        $row['答案']    = $task['ansTxt'];
                        $row['題目']    = $task['category'];
        
                        fputcsv($file, array($row['答案編號'], $row['答案'], $row['題目']));
                    }
        
                    fclose($file);
                };
                
                return response()->stream($callback, 200, $headers);
            }
        }
    }
}
