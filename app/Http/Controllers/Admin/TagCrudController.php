<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TagRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


/**
 * Class TagCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TagCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Tag::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tag');
        CRUD::setEntityNameStrings('تگ', 'تگ‌ها');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // set columns from db columns.

        CRUD::addColumns([
            [
                'name'  => 'name',
                'label' => 'عنوان',
            ],
            [
                'name'  => 'slug',
                'label' => 'آدرس',
            ],
        ]);
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    protected function setupShowOperation()
    {
        //CRUD::setFromDb(); // set columns from db columns.

        CRUD::addColumns([
            [
                'name'  => 'name',
                'label' => 'عنوان',
            ],
            [
                'name'  => 'slug',
                'label' => 'آدرس',
            ],
        ]);
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
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
        // CRUD::setValidation(TagRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.


        $this->crud->addFields([
            [   // Text
                'name'  => 'name',
                'label' => "عنوان",
                'type'  => 'text',
    
                // OPTIONAL
                'prefix'     => 'خداحافظ',
                'suffix'     => 'سلام',
                //'default'    => 'some value', // default value
                'hint'       => 'Some hint text', // helpful text, show up after input
                //'attributes' => [
                //'placeholder' => 'Some text when empty',
                //'class' => 'form-control some-class',
                //'readonly'  => 'readonly',
                //'disabled'  => 'disabled',
                //], // extra HTML attributes and values your input might need
                'wrapper'   => [
                'class' => 'form-group col-md-6'
                ], // extra HTML attributes for the field wrapper - mostly for resizing fields
            ],
            [   // Text
                'name'  => 'slug',
                'label' => "آدرس",
                'type'  => 'text',
    
                // OPTIONAL
                'prefix'     => 'خداحافظ',
                'suffix'     => 'سلام',
                //'default'    => 'some value', // default value
                'hint'       => 'Some hint text', // helpful text, show up after input
                //'attributes' => [
                //'placeholder' => 'Some text when empty',
                //'class' => 'form-control some-class',
                //'readonly'  => 'readonly',
                //'disabled'  => 'disabled',
                //], // extra HTML attributes and values your input might need
                'wrapper'   => [
                'class' => 'form-group col-md-6'
                ], // extra HTML attributes for the field wrapper - mostly for resizing fields
            ]
        ]);
        
        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
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
