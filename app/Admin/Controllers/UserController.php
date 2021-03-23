<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Request Code'));
        $grid->column('name', __('Name'));
        $grid->column('company', __('Company'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('created_at', __('date'));
        $grid->column('updated_at', __('Updated at'));

        $grid->column('file', __('file'))->display(function($type){
            return "<a href=\"$type\" target=\"_blank\">download</a>";

            });
            $grid->column('status', __('Request Status'))->display(function($type){
              if($type == 0){
                return "not approved";

              }
              else if($type == 1 ) {
                return "approved";
              }

                });
                $grid->column('follow', __('Follow Up'));
                $grid->column('paid', __('Recieved'));
                $grid->column('total', __('Total fees'));

                $grid->column( __('Rest'))->display(function($paid){
                      return $this->total - $this->$paid;
                });
                $grid->column('source', __('Source'));
                $grid->column( __('Source'))->display(function($type){
                  return "<a href=\"http://bbsaudi.net/checkout/$this->id\">رابط الدفع</a>";

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('company', __('Company'));
        $show->field('file', __('File'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->text('company', __('Company'));
        $form->file('file', __('File'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));

        $form->text('follow', __('Follow Up'));
        $form->number('paid', __('Recieved'));
        $form->number('total', __('Total fees'));
$form->select('status', __('Request Status'))->options([0=>"not approved",1=>"approved"]);

        $form->text('source', __('Source'));

        return $form;
    }
}
