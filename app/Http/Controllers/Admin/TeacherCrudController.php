<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Operation\FetchOperation;
use App\Http\Requests\TeacherRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Str;

/**
 * Class TeacherCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TeacherCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use FetchOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Teacher::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/teacher');
        CRUD::setEntityNameStrings('Giáo viên', 'Những giáo viên');
    }

    public function fetchSkills()
    {
        return $this->fetch(\App\Models\Skill::class);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */

    protected function setupListOperation()
    {
        CRUD::column('name')->label("Tên");
//        CRUD::column('email')->label("email")->type("email");
        CRUD::column('avatar')->label("Ảnh đại diện")->type("image");
        CRUD::column('origin')->label("Giáo viên đến từ")->type("select_from_array")->options([
            1 => 'Việt Nam',
            2 => 'Nước ngoài'
        ]);
//        CRUD::column('phone')->label("Số điện thoại")->type("phone");
        CRUD::column('skills')->label("Kỹ năng");
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
        CRUD::setValidation(TeacherRequest::class);

        CRUD::field('name')->label("Tên");
        CRUD::field('avatar')->label("Ảnh đại diện")->type("image")->crop(true)->aspect_ratio(1);
        CRUD::field('email')->label("Email")->type("hidden")->value(Str::random(4) . fake()->email());
        CRUD::field('phone')->label("Số điện thoại");
        CRUD::addField([
            'name' => 'skills',
            'label' => 'Kỹ năng',
            'type' => 'relationship',
            'model' => 'App\Models\Skill',
            'entity' => 'Skills',
            'ajax' => false,
            'attribute' => 'name',
            'inline_create' => [
                'entity' => 'skill',
                'add_button_label' => 'Thêm kỹ năng mới',
            ]
        ]);
        CRUD::field('origin')->label("Giáo viên đến từ")->type("select_from_array")->options([
            1 => 'Việt Nam',
            2 => 'Nuớc ngoài'
        ]);
        CRUD::field('price')->label("Học phí / giờ")->type("number");
        CRUD::field('level')->label("Trình độ giáo viên")->type("summernote");
        CRUD::field('description')->label("Giới thiệu về giáo viên")->type("summernote");
        CRUD::field("video")->type("video")->label("Video dạy");
        CRUD::field('password')->label("Mật khẩu")->type("password");
        CRUD::field('role')->type("hidden");

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
