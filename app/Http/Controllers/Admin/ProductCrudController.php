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
        $this->crud->addField([
            'name' => 'historyImage',
            'label' => 'History Image',
            'type' => 'image',
            'disk' => 'public',
            'upload' => true,
            'prefix' => 'uploads/products',
        ]);
        $this->crud->addField([
            'name' => 'heroImage',
            'label' => 'Hero Image',
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
        CRUD::column('brand',);
        CRUD::column('title');
        CRUD::column('story');
        CRUD::column('history');
        $this->crud->addColumn([
            'name' => 'image',
            'label' => "Image",
            'type' => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'historyImage',
            'label' => "History Image",
            'type' => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'heroImage',
            'label' => "Product Hero Image",
            'type' => 'image',
        ]);
        CRUD::column('facebook');
        CRUD::column('twitter');
        CRUD::column('instagram');
        CRUD::column('tiktok');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);
        CRUD::field('title');
        CRUD::field('history');
        CRUD::field('story');
        CRUD::field('brand_id');
        CRUD::field('facebook');
        CRUD::field('twitter');
        CRUD::field('instagram');
        CRUD::field('tiktok');
        CRUD::field('image')
            ->type('upload')
            ->withFiles([

            ]);
        CRUD::field('heroImage')
            ->type('upload')
            ->withFiles([
            ]);
        CRUD::field('historyImage')
            ->type('upload')
            ->withFiles([
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
                'name' => 'facebook',
                'label' => 'Facebook',
                'type' => 'text',
            ],
            [
                'name' => 'twitter',
                'label' => 'Twitter',
                'type' => 'text',
            ],
            [
                'name' => 'instagram',
                'label' => 'Instagram',
                'type' => 'text',
            ],
            [
                'name' => 'tiktok',
                'label' => 'Tiktok',
                'type' => 'text',
            ],
//            [
//                'name' => 'history',
//                'label' => 'History',
//                'type' => 'textarea',
//            ],
//            [
//                'name' => 'story',
//                'label' => 'Story',
//                'type' => 'textarea',
//            ],
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
                'view' => 'partials/heroImage',
                'upload' => true,
            ],
            [
                'label' => "History Image",
                'name' => "historyImage",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/historyImage',
                'upload' => true,
            ]
        ];
    }
}
