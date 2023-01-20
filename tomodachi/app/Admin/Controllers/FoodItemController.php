<?php

namespace App\Admin\Controllers;

use App\Models\FoodItem;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FoodItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FoodItem';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FoodItem());

        $grid->column('id', __('Id'));
        $grid->column('cate_id', __('Cate id'));
        $grid->column('name', __('Name'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('description', __('Description'));
        $grid->column('price', __('Price'));
        $grid->column('url', __('Image'));
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
        $show = new Show(FoodItem::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('cate_id', __('Cate id'));
        $show->field('name', __('Name'));
        $show->field('quantity', __('Quantity'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('url', __('Image'));
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
        $form = new Form(new FoodItem());

        $form->number('cate_id', __('Cate id'));
        $form->text('name', __('Name'));
        $form->number('quantity', __('Quantity'));
        $form->textarea('description', __('Description'));
        $form->decimal('price', __('Price'));
        $form->image('url', __('Image'));
        $form->datetime('updated_at',__('Updated At'));

        return $form;
    }
}
