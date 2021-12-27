<?php

namespace App\Admin\Controllers;

use App\Models\Class01;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

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
        $grid->column('upload', __('Proposal'));
        $grid->column('upload2', __('Statement'));
        $grid->column('upload3', __('Company registration'));
        // $grid->column('topic_01', __('Topic 01'));
        // $grid->column('topic_02', __('Topic 02'));
        $grid->column('ques_s', __('Ques_s'));
        $grid->column('ques_m', __('Ques_m'));
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
        $show->field('ques_s', __('Ques_s'));
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
