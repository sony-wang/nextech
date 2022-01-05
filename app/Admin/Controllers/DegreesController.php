<?php

namespace App\Admin\Controllers;

use App\Models\Degree;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class DegreesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Degree';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Degree());

        $grid->column('id', __('Id'));
        $grid->column('company', __('Company'));
        $grid->column('tax_id_no', __('Tax id no'));
        $grid->column('establishment', __('Establishment'));
        $grid->column('capital', __('Capital'));
        $grid->column('employees', __('Employees'));
        $grid->column('industry', __('Industry'));
        $grid->column('ques_s', __('Ques s'));
        $grid->column('ques_m', __('Ques m'));
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
        $show = new Show(Degree::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('company', __('Company'));
        $show->field('tax_id_no', __('Tax id no'));
        $show->field('establishment', __('Establishment'));
        $show->field('capital', __('Capital'));
        $show->field('employees', __('Employees'));
        $show->field('industry', __('Industry'));
        // $show->field('ques_s', __('Ques s'));
        // $show->field('ques_m', __('Ques m'));
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
        $form = new Form(new Degree());

        $form->text('company', __('Company'));
        $form->text('tax_id_no', __('Tax id no'));
        $form->text('establishment', __('Establishment'));
        $form->text('capital', __('Capital'));
        $form->text('employees', __('Employees'));
        $form->text('industry', __('Industry'));
        $form->text('ques_s', __('Ques s'));
        $form->text('ques_m', __('Ques m'));

        return $form;
    }
}
