<?php

use App\Models\MenuItem;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('init', function () {
    $query = [];
    $routes = Route::getRoutes()->getRoutesByName();
    MenuItem::query()->delete();
    foreach ($routes as $key => $route) {
        if (str_contains($key, '.index') && !str_contains($route->uri(), 'root')) {
            $name = Str::replace('.index', '', $key);
            $name = Str::replace('-', '_', $name);
            $name = __('models/' . $name . '.singular');
            $query[] = [
                'nom' => $name,
                'url' => $key,
                'icon' => '<i class="nav-icon fas fa-home"></i>',
            ];
        }
    }
    MenuItem::insert($query);
    $this->comment('Initialized successfully.');
})->purpose('Initi main function for the app.');
