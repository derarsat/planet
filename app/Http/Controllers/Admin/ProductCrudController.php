<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'image',
            'disk' => 'public',
            'upload' => true,
            'prefix' => 'uploads/products',
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
        CRUD::column('brand');
        $this->crud->addColumn([
            'name' => 'image',
            'label' => "Image",
            'type' => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'productHistoryImage',
            'label' => "Product History Image",
            'type' => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'heroImage',
            'label' => "Product Hero Image",
            'type' => 'image',
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);

        CRUD::field('title');
        CRUD::field('brand');
        CRUD::field('image')
            ->type('upload')
            ->withFiles([
                'disk' => 'public', // the disk where file will be stored
                'path' => 'uploads', // the path inside the disk where file will be stored
            ]);
        CRUD::field('heroImage')
            ->type('upload')
            ->withFiles([
                'disk' => 'public', // the disk where file will be stored
                'path' => 'uploads', // the path inside the disk where file will be stored
            ]);
        CRUD::field('productHistoryImage')
            ->type('upload')
            ->withFiles([
                'disk' => 'public', // the disk where file will be stored
                'path' => 'uploads', // the path inside the disk where file will be stored
            ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }


    private function getFieldsData($show = FALSE)
    {
        return [
            [
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text',
            ],
            [
                'name' => 'brand',
                'label' => 'Brand',
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
                'label' => "Hero Image",
                'name' => "heroImage",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
            ],
            [
                'label' => "Product History Image",
                'name' => "productHistoryImage",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
            ]
        ];
    }
}
