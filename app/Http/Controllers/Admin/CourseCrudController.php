<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CourseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CourseCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Course::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/course');
        CRUD::setEntityNameStrings('Khóa học', 'Những khóa học');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'name', 'label' => 'Tên khóa học']);
        CRUD::addColumn(['name' => 'tags', 'label' => 'Nhãn']);
        CRUD::addColumn(['name' => 'thumbnail', 'label' => 'Ảnh bìa', 'type' => 'image']);
        CRUD::addColumn(['name' => 'slug', 'label' => 'URL']);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CourseRequest::class);
        CRUD::addField(['name' => 'name', 'label' => 'Tên khóa học']);
        CRUD::addField([
            'name' => 'thumbnail',
            'label' => 'Ảnh bìa',
            'type' => 'image',
            'crop' => 'true',
            'aspect_ratio' => 2
        ]);
        CRUD::addField([
            'name' => 'tags',
            'label' => 'Nhãn',
            'type' => 'relationship',
            'pivot' => true,
            'model' => 'App\Models\Tag',
            'entity' => 'Tags',
            'ajax' => true,
            'attribute' => 'name',
            'inline_create' => [
                'entity' => 'tag',
            ]
        ]);
        CRUD::addField(['name' => 'slug', 'label' => 'URL', 'type' => 'hidden']);
        CRUD::addField(['name' => 'description', 'label' => 'Giới thiệu ngắn', 'type' => 'textarea']);
        CRUD::addField(['name' => 'learn_method', 'label' => 'Phương pháp học', 'type' => 'summernote']);
        CRUD::addField(['name' => 'main_content', 'label' => 'Nội dung chính', 'type' => 'summernote']);


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
