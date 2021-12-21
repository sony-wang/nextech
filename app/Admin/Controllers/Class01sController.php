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
        $grid->column('proposal', __('Proposal'));
        $grid->column('statement', __('Statement'));
        $grid->column('company_registration', __('Company registration'));
        $grid->column('topic_01', __('Topic 01'));
        $grid->column('topic_02', __('Topic 02'));
        $grid->column('upload', __('Upload'));
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
        $show->field('proposal', __('Proposal'));
        $show->field('statement', __('Statement'));
        $show->field('company_registration', __('Company registration'));
        $show->field('topic_01', __('Topic 01'));
        $show->field('topic_02', __('Topic 02'));
        $show->field('upload', __('Upload'));
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
        $form->text('proposal', __('Proposal'));
        $form->text('statement', __('Statement'));
        $form->text('company_registration', __('Company registration'));
        $form->text('topic_01', __('Topic 01'));
        $form->text('topic_02', __('Topic 02'));
        $form->text('upload', __('Upload'));

        return $form;
    }
}
