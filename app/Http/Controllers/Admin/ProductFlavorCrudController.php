<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductFlavorRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductFlavorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductFlavorCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\ProductFlavor::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product-flavor');
        CRUD::setEntityNameStrings('product flavor', 'product flavors');
        $this->crud->addField([
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'image',
            'disk'      => 'public',
            'upload'    => true,
            'prefix'    => 'uploads/product-flavors',
        ]);
        $this->crud->addField([
            'name'      => 'hover_image',
            'label'     => 'Hover Image',
            'type'      => 'image',
            'disk'      => 'public',
            'upload'    => true,
            'prefix'    => 'uploads/product-flavors',
        ]);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumns($this->getFieldsData(TRUE));
        CRUD::column('title');
        CRUD::column('product');
        $this->crud->addColumn([
            'name' => 'image',
            'label' => "Image",
            'type' => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'hover_image',
            'label' => "Hover Image",
            'type' => 'image',
        ]);


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
        CRUD::setValidation(ProductFlavorRequest::class);
        CRUD::field('title');
        CRUD::field('description');
        CRUD::field('ingredient_details');
        CRUD::field('headers');
        CRUD::field('values');
        CRUD::field('product');

        CRUD::field('image')
            ->type('upload')
            ->withFiles([
                'disk' => 'public',
                'path' => 'uploads',
            ]);
        CRUD::field('hover_image')
            ->type('upload')
            ->withFiles([
                'disk' => 'public',
                'path' => 'uploads',
            ]);

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
    private function getFieldsData($show = FALSE){
        return [
            [
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text',
            ],



            [
                'name' => 'description',
                'label' => 'Description',
                'type' => 'text',
            ],


//            [
//                'name' => 'ingredient_details',
//                'label' => 'Ingredient Details',
//                'type' => 'text',
//            ],
//
//            [
//                'name' => 'headers',
//                'label' => 'Headers (Comma Separated)',
//                'type' => 'text',
//            ],
//            [
//                'name' => 'values',
//                'label' => 'Values (Comma Separated)',
//                'type' => 'text',
//            ],




            [
                'label' => "Image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
            ],
            [
                'label' => "Hover Image",
                'name' => "hover_image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/hover_image',
                'upload' => true,
            ]
        ];
    }
}
