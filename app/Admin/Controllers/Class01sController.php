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
        // $grid->column('company', __('Company'));
        $grid->column('company', __('Company'))->display(function ($title) {
            return "<span style='color:blue'>$title</span>";
        });
        $grid->column('tax_id_no', __('Tax id no'));
        $grid->column('establishment', __('Establishment'));
        $grid->column('capital', __('Capital'));
        $grid->column('employees', __('Employees'));
        $grid->column('industry', __('Industry'));
        $grid->column('business', __('Business'));
        $grid->column('address', __('Address'));
        $grid->column('leader', __('Leader'));
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
        $show->field('leader', __('Leader'));
        $show->field('succeed', __('Succeed'));
        $show->field('amount_scale', __('Amount scale'));
        $show->field('change_classes', __('Change classes'));
        $show->field('upload', __('Proposal'));
        $show->field('upload2', __('Statement'));
        $show->field('upload3', __('Company registration'));
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
        });
        $show->field('ques_m', __('Ques_m'))->as(function ($title) {
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
            }
            foreach($content_ok as $key => $item){
                // Log::info($item['ansNO']);
                // Log::info(json_decode($ques_cate_m[$key]['options'],JSON_UNESCAPED_UNICODE));
                if ($key == 0) {
                    if(in_array(1, $item['ansNO'])){
                        // Log::info(json_decode($ques_cate_m[$key]['options'],JSON_UNESCAPED_UNICODE)[0]);
                        $content_ok[$key]['ansTxt'] = json_decode($ques_cate_m[$key]['options'],JSON_UNESCAPED_UNICODE)[0];
                    }
                    if(in_array(2, $item['ansNO'])){
                        $content_ok[$key]['ansTxt'] .= json_decode($ques_cate_m[$key]['options'],JSON_UNESCAPED_UNICODE)[1];
                    }
                    if(in_array(3, $item['ansNO'])){
                        $content_ok[$key]['ansTxt'] .= json_decode($ques_cate_m[$key]['options'],JSON_UNESCAPED_UNICODE)[2];
                    }
                }
                
            }


            // foreach($newTitle as $key=>$ansNO){
            //     Log::info($ansNO);
            //     $content_ok['ansNO'] = $ansNO;
            //     // foreach($ansNO as $key2=>$item_ansNo){
            //     //     // if($item_ansNo)
            //     //     if($item_ansNo = 1){
            //     //         // Log::info(json_decode($ques_cate_m[0]['options'],JSON_UNESCAPED_UNICODE)[0]);
            //     //         // $content_ok[$tmpKey]['ansTxt'] = $ques_cate_m['options'][1];
            //     //         // array_push($content_ok[$tmpKey]['ansTxt'], json_decode($ques_cate_m[$key2]['options'],JSON_UNESCAPED_UNICODE)[1]);
            //     //     }
            //     // }
            //     // array_push($content_ok[$tmpKey], $ansNO);
            // }
            
Log::info($content_ok);
            // return "{$content_ok['category']}";
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
