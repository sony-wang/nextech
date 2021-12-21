<?php

namespace App\Admin\Controllers;

use App\Models\Class02;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

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
        $form->text('topic_01', __('Topic 01'));
        $form->text('topic_02', __('Topic 02'));
        $form->text('upload', __('Upload'));

        return $form;
    }
}
