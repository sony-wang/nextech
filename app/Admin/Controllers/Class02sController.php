<?php

namespace App\Admin\Controllers;

use App\Models\Class02;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class Class02sController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '潛力企業共學班';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Class02());

        $grid->column('id', __('Id'));
        $grid->column('company', __('Company'));
        $grid->column('establishment', __('Establishment'));
        $grid->column('tax_id_no', __('Tax id no'));
        $grid->column('address', __('Address'));
        $grid->column('capital', __('Capital'));
        $grid->column('employees', __('Employees'));
        $grid->column('revenue', __('Revenue'));
        $grid->column('industry', __('Industry'));
        $grid->column('business', __('Business'));
        $grid->column('status_and_goals', __('Status and goals'));
        $grid->column('challenge', __('Challenge'));
        $grid->column('class', __('Class'));
        $grid->column('expect', __('Expect'));
        $grid->column('succeed', __('Succeed'));
        $grid->column('deputy', __('Deputy'));
        $grid->column('member_list', __('Member list'));
        $grid->column('upload', __('Upload'))->hide();
        $grid->column('upload2', __('Upload2'))->hide();
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
        $show = new Show(Class02::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('company', __('Company'));
        $show->field('establishment', __('Establishment'));
        $show->field('tax_id_no', __('Tax id no'));
        $show->field('address', __('Address'));
        $show->field('capital', __('Capital'));
        $show->field('employees', __('Employees'));
        $show->field('revenue', __('Revenue'));
        $show->field('industry', __('Industry'));
        $show->field('business', __('Business'));
        $show->field('status_and_goals', __('Status and goals'));
        $show->field('challenge', __('Challenge'));
        $show->field('class', __('Class'));
        $show->field('expect', __('Expect'));
        $show->field('succeed', __('Succeed'));
        $show->field('deputy', __('Deputy'));
        $show->field('member_list', __('Member list'));
        $show->field('upload', __('Upload'));
        $show->field('upload2', __('Upload2'));
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
        $show->field('ques_m', __('Ques_m'));
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
        $form = new Form(new Class02());

        $form->text('company', __('Company'));
        $form->text('establishment', __('Establishment'));
        $form->text('tax_id_no', __('Tax id no'));
        $form->text('address', __('Address'));
        $form->text('capital', __('Capital'));
        $form->text('employees', __('Employees'));
        $form->text('revenue', __('Revenue'));
        $form->text('industry', __('Industry'));
        $form->text('business', __('Business'));
        $form->text('status_and_goals', __('Status and goals'));
        $form->text('challenge', __('Challenge'));
        $form->text('class', __('Class'));
        $form->text('expect', __('Expect'));
        $form->text('succeed', __('Succeed'));
        $form->text('deputy', __('Deputy'));
        $form->text('member_list', __('Member list'));
        $form->text('upload', __('Upload'));
        $form->text('upload2', __('Upload2'));
        $form->text('ques_s', __('Ques_s'));
        $form->text('ques_m', __('Ques_m'));

        return $form;
    }
}
