<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
        - base_path
        - app_path
        - database_path
        - resource_path
    |--------------------------------------------------------------------------
    |
    */

    'path' => [

        'migration'         => base_path('../components/database/migrations/'),

        'model'             => base_path('../components/app/Models/'),

        'datatables'        => base_path('../components/app/DataTables/'),

        'livewire_tables'   => base_path('../components/app/Http/Livewire/'),

        'repository'        => base_path('../components/app/Repositories/'),

        'routes'            => base_path('../components/routes/web.php'),

        'api_routes'        => base_path('../components/routes/api.php'),

        'request'           => base_path('../components/app/Http/Requests/'),

        'api_request'       => base_path('../components/app/Http/Requests/API/'),

        'controller'        => base_path('../components/app/Http/Controllers/'),

        'api_controller'    => base_path('../components/app/Http/Controllers/API/'),

        'api_resource'      => base_path('../components/app/Http/Resources/'),

        'schema_files'      => base_path('../components/resources/model_schemas/'),

        'seeder'            => base_path('../components/database/seeders/'),

        'database_seeder'   => base_path('../components/database/seeders/DatabaseSeeder.php'),

        'factory'           => base_path('../components/database/factories/'),

        'view_provider'     => base_path('../components/app/Providers/ViewServiceProvider.php'),

        'tests'             => base_path('../components/tests/'),

        'repository_test'   => base_path('../components/tests/Repositories/'),

        'api_test'          => base_path('../components/tests/APIs/'),

        'views'             => base_path('../components/resources/views/'),

        'menu_file'         => base_path('../components/resources/views/layouts/menu.blade.php'),

        'exports'       => base_path('../components/app/Exports/'),

        'model_lang'       => base_path('../components/lang/fr/models/'),

        


    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => [

        'model'             => 'App\Models',

        'datatables'        => 'App\DataTables',

        'livewire_tables'   => 'App\Http\Livewire',

        'repository'        => 'App\Repositories',

        'controller'        => 'App\Http\Controllers',

        'api_controller'    => 'App\Http\Controllers\API',

        'api_resource'      => 'App\Http\Resources',

        'request'           => 'App\Http\Requests',

        'api_request'       => 'App\Http\Requests\API',

        'seeder'            => 'Database\Seeders',

        'factory'           => 'Database\Factories',

        'tests'             => 'Tests',

        'repository_test'   => 'Tests\Repositories',

        'api_test'          => 'Tests\APIs',
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    'templates' => 'adminlte-templates',

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    'model_extend_class' => 'Illuminate\Database\Eloquent\Model',

    /*
    |--------------------------------------------------------------------------
    | API routes prefix & version
    |--------------------------------------------------------------------------
    |
    */

    'api_prefix'  => 'api',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    */

    'options' => [

        'soft_delete' => false,

        'save_schema_file' => true,

        'localized' => true,

        'repository_pattern' => true,

        'resources' => false,

        'factory' => true,

        'seeder' => true,

        'swagger' => false, // generate swagger for your APIs

        'tests' => false, // generate test cases for your APIs

        'excluded_fields' => ['id'], // Array of columns that doesn't required while creating module
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefixes
    |--------------------------------------------------------------------------
    |
    */

    'prefixes' => [

        'route' => '',  // e.g. admin or admin.shipping or admin.shipping.logistics

        'namespace' => '',  // e.g. Admin or Admin\Shipping or Admin\Shipping\Logistics

        'view' => '',  // e.g. admin or admin/shipping or admin/shipping/logistics
    ],

    /*
    |--------------------------------------------------------------------------
    | Table Types
    |
    | Possible Options: blade, datatables, livewire
    |--------------------------------------------------------------------------
    |
    */

    'tables' => 'blade',

    /*
    |--------------------------------------------------------------------------
    | Timestamp Fields
    |--------------------------------------------------------------------------
    |
    */

    'timestamps' => [

        'enabled'       => true,

        'created_at'    => 'created_at',

        'updated_at'    => 'updated_at',

        'deleted_at'    => 'deleted_at',
    ],

    /*
    |--------------------------------------------------------------------------
    | Specify custom doctrine mappings as per your need
    |--------------------------------------------------------------------------
    |
    */

    'from_table' => [

        'doctrine_mappings' => [],
    ],

];
