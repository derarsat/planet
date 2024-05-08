<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PositionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PositionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PositionCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Position::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/position');
        CRUD::setEntityNameStrings('position', 'positions');
        $this->crud->addField([
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'image',
            'disk'      => 'public',
            'upload'    => true,
            'prefix'    => 'uploads/positions',
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
        CRUD::column('description');

        $this->crud->addColumn([
            'name' => 'image',
            'label' => "Image",
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
        CRUD::setValidation(PositionRequest::class);

        CRUD::field('title');
        CRUD::field('description');
        CRUD::field('image')
            ->type('upload')
            ->withFiles([
                'disk' => 'public', // the disk where file will be stored
                'path' => 'uploads', // the path inside the disk where file will be stored
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
            [
                'label' => "Image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
            ]
        ];
    }
}
