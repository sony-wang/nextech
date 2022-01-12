<?php

namespace App\Admin\Controllers;

use App\Models\Class01;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class Class01sController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '標竿企業實戰班';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Class01());

        $grid->column('id', __('Id'));
        $grid->column('company', __('Company'));
        // $grid->column('company', __('Company'))->display(function ($title) {
        //     return "<span style='color:#efa960'>$title</span>";
        // });
        $grid->column('tax_id_no', __('Tax id no'));
        $grid->column('establishment', __('Establishment'));
        $grid->column('capital', __('Capital'));
        $grid->column('employees', __('Employees'));
        $grid->column('industry', __('Industry'));
        $grid->column('business', __('Business'));
        $grid->column('address', __('Address'));
        // $grid->column('leader', __('Leader'))->hide();
        $grid->column('leader', __('Leader'))->display(function($title){
            $txt = '';
            foreach(json_decode($title) as $key => $item){
                if(empty($item)){
                    continue;
                }
                if($key == 0)$txt .= '【';
                if($key % 5 == 0 && $key != 0){
                    $txt .= '】【';
                }
                $txt .= $item . ',';
            }
            return $txt;
        });
        $grid->column('succeed', __('Succeed'));
        $grid->column('amount_scale', __('Amount scale'));
        $grid->column('change_classes', __('Change classes'));
        $grid->column('upload', __('Proposal'))->hide();
        $grid->column('upload2', __('Statement'))->hide();
        $grid->column('upload3', __('Company registration'))->hide();
        $grid->column('ques_s', __('Ques_s'))->hide();
        $grid->column('ques_m', __('Ques_m'))->hide();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Class01::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('company', __('Company'));
        $show->field('tax_id_no', __('Tax id no'));
        $show->field('establishment', __('Establishment'));
        $show->field('capital', __('Capital'));
        $show->field('employees', __('Employees'));
        $show->field('industry', __('Industry'));
        $show->field('business', __('Business'));
        $show->field('address', __('Address'));
        $show->field('leader', __('Leader'))->unescape()->as(function ($title) {
            $arrangeArr = [];
            $content = json_decode($title,JSON_UNESCAPED_UNICODE);
            // Log::info($content);
            foreach($content as $key=>$item){
                if($item != ''){
                    if($key%5 == 0){
                        $arrangeArr[$key] = "名子: {$item}";
                    }
                    if(($key-1)%5 == 0){
                        $arrangeArr[$key] = "部門職稱: {$item}";
                    }
                    if(($key-2)%5 == 0){
                        $arrangeArr[$key] = "連絡電話: {$item}";
                    }
                    if(($key-3)%5 == 0){
                        $arrangeArr[$key] = "E-MAIL: {$item}";
                    }
                    if(($key-4)%5 == 0){
                        $arrangeArr[$key] = "業務簡介: {$item}";
                    }
                    // if($key == 0 || $key == 5 || $key == 10){
                    //     $arrangeArr[$key]['名子'] = "名子: {$item}";
                    // }
                }
            }

            $dom = '';
            // Log::info($arrangeArr);
            foreach($arrangeArr as $key => $item){
                if($key <= 5*$key){
                    $dom .= "{$item}、 ";
                }
                // Log::info($key % 5);
                if($key % 5 == 4){
                    $dom .= "<hr>";
                }
            }
            // Log::info(implode(" ",$arrangeArr));
            // Log::info($dom);
            
            return $dom;
        });
        $show->field('succeed', __('Succeed'));
        $show->field('amount_scale', __('Amount scale'));
        $show->field('change_classes', __('Change classes'));
        $show->field('upload', __('Proposal'))->unescape()->as(function ($title) {
            return "<a href='{$title}' target='_blank'>下載</a>";
        });
        $show->field('upload2', __('Statement'))->unescape()->as(function ($title) {
            return "<a href='{$title}' target='_blank'>下載</a>";
        });
        $show->field('upload3', __('Company registration'))->unescape()->as(function ($title) {
            return "<a href='{$title}' target='_blank'>下載</a>";
        });
        $show->field('ques_s', __('Ques_s'))->unescape()->as(function ($title) {
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
                // Log::info($content_ok);
                $dom = "<ul>";
                foreach($content_ok as $item){
                    $dom .= "<li>[ {$item['ansNO']}.{$item['ansTxt']} ] - {$item['content']}</li>";
                }
                $dom .= "<ul>";
                return "{$dom}";
            }
        });
        $show->field('ques_m', __('Ques_m'))->unescape()->as(function ($title) {
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
            // Log::info($content_ok);
            $dom = "<ul>";
            foreach($content_ok as $item){
                $dom .= "<li>[ {$item['ansTxt']} ] - {$item['category']}</li>";
            }
            $dom .= "<ul>";
            return "{$dom}";
        });
        $show->field('tax_id_no',__('Chart'))->unescape()->as(function ($title) {
            // return "<a href='/result?class=01&id={$title}' target=_blank>開啟</a>";
            return "<iframe width=100% height=600 src='/result?class=01&id={$title}'>你的瀏覽器不支援 iframe</iframe>";
        });
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Class01());

        $form->text('company', __('Company'));
        $form->text('tax_id_no', __('Tax id no'));
        $form->text('establishment', __('Establishment'));
        $form->text('capital', __('Capital'));
        $form->text('employees', __('Employees'));
        $form->text('industry', __('Industry'));
        $form->text('business', __('Business'));
        $form->text('address', __('Address'));
        $form->text('leader', __('Leader'));
        $form->text('succeed', __('Succeed'));
        $form->text('amount_scale', __('Amount scale'));
        $form->text('change_classes', __('Change classes'));
        $form->text('upload', __('Proposal'));
        $form->text('upload2', __('Statement'));
        $form->text('upload3', __('Company registration'));
        $form->text('ques_s', __('Ques_s'));
        $form->text('ques_m', __('Ques_m'));

        return $form;
    }
}
