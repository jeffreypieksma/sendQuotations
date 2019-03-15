<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'auth'], function () {
    Route::post('login','AuthController@authenticate');
    Route::post('register','AuthController@authenticate');
    Route::get('logout','AuthController@logout');
    Route::get('check','AuthController@check');
});

// session route
Route::post('email-exist',[
    'as' => 'email-exist','uses' => 'Demo\PagesController@emailExist'
]);

// admin route
Route::group(['prefix' => 'admin', 'middleware' => 'api.auth'], function (){

    Route::resource('todos', 'Demo\TodosController');

    Route::post('todos/toggleTodo/{id}', [
        'as' => 'admin.todos.toggle', 'uses' => 'Demo\TodosController@toggleTodo'
    ]);

    Route::group(['prefix' => 'settings'], function () {

        Route::post('/social', [
            'as' => 'admin.settings.social', 'uses' => 'Demo\SettingsController@postSocial'
        ]);
    });

    Route::group(['prefix' => 'users'], function (){

        Route::get('/get',[
            'as' => 'admin.users', 'uses' => 'Demo\PagesController@allUsers'
        ]);

        Route::delete('/{id}',[
            'as' => 'admin.users.delete', 'uses' => 'Demo\PagesController@destroy'
        ]);

    });

    Route::group(['prefix' => 'clients'], function (){
        Route::post('/create',[
            'as' => 'admin.clients.create', 'uses' => 'ClientsController@create'
        ]);

        Route::get('/all',[
            'as' => 'admin.clients.index', 'uses' => 'ClientsController@index'
        ]);

        Route::get('/read/{id}',[
            'as' => 'admin.clients.read', 'uses' => 'ClientsController@read'
        ]);

        Route::delete('/delete/{id}',[
            'as' => 'admin.users.delete', 'uses' => 'ClientsController@delete'
        ]);

    });

    Route::group(['prefix' => 'quotations'], function (){
        Route::post('/create',[
            'as' => 'admin.quotations.create', 'uses' => 'QuotationController@create'
        ]);

        Route::get('/all',[
            'as' => 'admin.quotations.index', 'uses' => 'QuotationController@index'
        ]);

        Route::get('/read/{id}',[
            'as' => 'admin.quotations.read', 'uses' => 'QuotationController@read'
        ]);

        Route::delete('/delete/{id}',[
            'as' => 'admin.quotations.delete', 'uses' => 'QuotationController@delete'
        ]);

    });

});

