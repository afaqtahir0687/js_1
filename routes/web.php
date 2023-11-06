<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[App\Http\Controllers\JsController::class, 'create']);
Route::get('create',[App\Http\Controllers\JsController::class, 'index']);
Route::get('js',[App\Http\Controllers\JsController::class, 'js']);
Route::get('caluculate',[App\Http\Controllers\JsController::class, 'caluculate']);

Route::get('task',[App\Http\Controllers\TaskController::class, 'index']);


Route::get('dragable',[App\Http\Controllers\DragAbleController::class, 'create']);
Route::get('practice',[App\Http\Controllers\DragAbleController::class, 'index']);

Route::get('image',[App\Http\Controllers\ImageController::class, 'create']);


Route::get('jquery',[App\Http\Controllers\JqueryController::class, 'create']);
Route::post('jquery', [App\Http\Controllers\JqueryController::class, 'store'])->name('jquery.store');


// Route::resource('users',UserController::class);

    Route::controller(UserController::class)->prefix('users')->as('users.')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/','store')->name('store');
        Route::get('/{id}','show')->name('show');
        Route::get('/{id}/edit','edit')->name('edit');
        Route::put('/{id}','update')->name('update');
        Route::delete('/{id}','destroy')->name('destroy');
    });



    Route::get('parameter', [App\Http\Controllers\ParameterController::class, 'create']);
    Route::get('parameter/{id}/{name}/{password}', [App\Http\Controllers\ParameterController::class, 'edit'])->name('parameter.edit');
    // Route::post('parameter/{id}', [App\Http\Controllers\ParameterController::class, 'store'])->name('parameter.store');

    Route::get('caluculate/create', [App\Http\Controllers\CaluculateController::class, 'create']);
    Route::get('caluculate/index', [App\Http\Controllers\CaluculateController::class, 'index']);
    Route::get('caluculate/hi', [App\Http\Controllers\CaluculateController::class, 'hi']);
    Route::get('caluculate/new', [App\Http\Controllers\CaluculateController::class, 'new']);


    Route::get('jquery/animate', [App\Http\Controllers\JqueryAnimateController::class, 'create']);


    Route::get('table/create', [App\Http\Controllers\TableController::class, 'create']);


    Route::get('form/create', [App\Http\Controllers\FormController::class, 'create']);
