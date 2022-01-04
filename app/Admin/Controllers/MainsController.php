<?php

namespace App\Admin\Controllers;

use App\Models\Main;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MainsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Main';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Main());
        //禁用新增按鈕
        $grid->disableCreation();
        
        $grid->column('id', __('Id'));
        $grid->column('time01', __('Time01'));
        $grid->column('time02', __('Time02'));
        $grid->column('link', __('Link'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableView();
            // $actions->disableEdit();
            $actions->disableDelete();
        });
        
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
        $show = new Show(Main::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('time01', __('Time01'));
        $show->field('time02', __('Time02'));
        $show->field('link', __('Link'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        //表單右上角
        $show->panel()->tools(function ($tools){
            $tools->disableDelete();
            $tools->disableEdit();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Main());

        // $form->text('time01', __('Time01'));
        // $form->text('time02', __('Time02'));
        // $form->url('link', __('Link'));
        $form->datetime('time01', __('Time01'))->format('YYYY-MM-DD HH:mm:ss');
        $form->datetime('time02', __('Time02'))->format('YYYY-MM-DD HH:mm:ss');
        // $form->file('link', __('Link'))->move('public/upload/file/');
        $form->file('link', __('Link'));

        //表單右上角
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
            // $tools->disableView();
        });

        return $form;
    }
}
