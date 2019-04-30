<?php

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



    require base_path('routes/links/admin.php');

    Route::group(['middleware' => ['auth']], function () {       
        Route::get('/', 'HomeController@index')->name('home');
        Route::post('/create_task', 'HomeController@createTask')->name('create_task');
        Route::post('/update_task_type', 'HomeController@updateTaskType')->name('update_task_type');
        Route::post('/update_sort_order', 'HomeController@updateSortOrder')->name('update_sort_order');
    });
    
    Auth::routes();
