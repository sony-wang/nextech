<?php

namespace App\Admin\Controllers;

use App\Models\Question_category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class Question_categorysController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = ' 問卷類別';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Question_category());

        $grid->column('id', __('Id'));
        $grid->column('options', __('Options'));
        $grid->column('category', __('Category'));
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
        $show = new Show(Question_category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('options', __('Options'));
        $show->field('category', __('Category'));
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
        $form = new Form(new Question_category());

        $form->text('options', __('Options'));
        $form->text('category', __('Category'));

        return $form;
    }
}
