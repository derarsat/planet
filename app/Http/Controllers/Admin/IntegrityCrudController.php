<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IntegrityRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class IntegrityCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class IntegrityCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Integrity::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/integrity');
        CRUD::setEntityNameStrings('integrity', 'integrities');
        $this->crud->addField([
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'image',
            'disk'      => 'public',
            'upload'    => true,
            'prefix'    => 'uploads/integrates',
        ]);
        $this->crud->addField([
            'name'      => 'grey_scale_image',
            'label'     => 'Grey Scale Image',
            'type'      => 'image',
            'disk'      => 'public',
            'upload'    => true,
            'prefix'    => 'uploads/integrates',
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

        $this->crud->addColumn([
            'name' => 'image',
            'label' => "Image",
            'type' => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'grey_scale_image',
            'label' => "Grey Scale Image",
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
        CRUD::setValidation(IntegrityRequest::class);

        CRUD::field('title');
        CRUD::field('image')
            ->type('upload')
            ->withFiles([
                'disk' => 'public',
                'path' => 'uploads',
            ]);
        CRUD::field('grey_scale_image')
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
                'label' => "Image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
            ],
            [
                'label' => "Grey Scale Image",
                'name' => "grey_scale_image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/grey_scale_image',
                'upload' => true,
            ]
        ];
    }
}
