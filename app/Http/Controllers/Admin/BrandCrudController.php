<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BrandRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BrandCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BrandCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\Brand::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/brand');
        CRUD::setEntityNameStrings('brand', 'brands');
        $this->crud->addField([
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'image',
            'disk'      => 'public',
            'upload'    => true,
            'prefix'    => 'uploads/brands',
        ]);


        $this->crud->addField([
            'name'      => 'greyscaleImage',
            'label'     => 'Greyscale Image',
            'type'      => 'image',
            'disk'      => 'public',
            'upload'    => true,
            'prefix'    => 'uploads/brands',
        ]);
    }

    protected function setupListOperation(): void
    {
        $this->crud->addColumns($this->getFieldsData(TRUE));

        CRUD::column('title');
        CRUD::column('description');
        $this->crud->addColumn([
            'name' => 'image',
            'label' => "Image",
            'type' => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'greyscaleImage',
            'label' => "Greyscale Image",
            'type' => 'image',
        ]);
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(BrandRequest::class);
        CRUD::field('title');
        CRUD::field('description');
        CRUD::field('image')
            ->type('upload')
            ->withFiles([
            ]);

        CRUD::field('greyscaleImage')
            ->type('upload')
            ->withFiles([
            ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }

    private function getFieldsData($show = FALSE): array
    {
        return [
            [
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text',
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'type' => 'textarea',
            ],
            [
                'label' => "Image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
            ],
            [
                'label' => "Greyscale Image",
                'name' => "greyscaleImage",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/greyscale-image',
                'upload' => true,
            ]
        ];
    }
}
