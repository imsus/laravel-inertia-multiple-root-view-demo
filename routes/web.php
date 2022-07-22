<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('landing.root')
    ->get('/', function () {
        return inertia('welcome');
    });

Route::get('/admin', function () {
    inertia()->setRootView('app');

    return inertia('admin');
});
