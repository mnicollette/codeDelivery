<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::auth();

Route::group(['middleware' => 'web'], function(){
    Route::auth();

    Route::group(['prefix'=>'admin', 'middleware' => 'auth', 'as'=>'admin.'], function(){

        Route::get('categories', ['as' => 'categories.index', 'uses'=>'CategoriesController@index', 'role' => 'admin_system']);
        Route::get('categories/create', ['as' => 'categories.create', 'uses'=>'CategoriesController@create', 'role' => 'admin_system']);
        Route::get('categories/edit/{id}', ['as' => 'categories.edit', 'uses'=>'CategoriesController@edit', 'role' => 'edit_system']);
        Route::post('categories/update/{id}', ['as' => 'categories.update', 'uses'=>'CategoriesController@update', 'role' => 'admin_system']);
        Route::post('categories/store', ['as' => 'categories.store', 'uses'=>'CategoriesController@store', 'role' => 'admin_system']);

        Route::get('clients', ['as' => 'clients.index', 'uses'=>'ClientsController@index', 'role' => 'admin_system']);
        Route::get('clients/create', ['as' => 'clients.create', 'uses'=>'ClientsController@create', 'role' => 'admin_system']);
        Route::get('clients/edit/{id}', ['as' => 'clients.edit', 'uses'=>'ClientsController@edit', 'role' => 'admin_system']);
        Route::post('clients/update/{id}', ['as' => 'clients.update', 'uses'=>'ClientsController@update', 'role' => 'admin_system']);
        Route::post('clients/store', ['as' => 'clients.store', 'uses'=>'ClientsController@store', 'role' => 'admin_system']);

        Route::get('products', ['as' => 'products.index', 'uses'=>'ProductsController@index', 'role' => 'admin_system']);
        Route::get('products/create', ['as' => 'products.create', 'uses'=>'ProductsController@create', 'role' => 'admin_system']);
        Route::get('products/edit/{id}', ['as' => 'products.edit', 'uses'=>'ProductsController@edit', 'role' => 'admin_system']);
        Route::post('products/update/{id}', ['as' => 'products.update', 'uses'=>'ProductsController@update', 'role' => 'admin_system']);
        Route::post('products/store', ['as' => 'products.store', 'uses'=>'ProductsController@store', 'role' => 'admin_system']);
        Route::get('products/destroy/{id}', ['as' => 'products.destroy', 'uses'=>'ProductsController@destroy', 'role' => 'admin_system']);

        Route::get('orders', ['as' => 'orders.index', 'uses'=>'OrdersController@index', 'role' => 'admin_system']);
        Route::get('orders/create', ['as' => 'orders.create', 'uses'=>'OrdersController@create', 'role' => 'admin_system']);
        Route::get('orders/edit/{id}', ['as' => 'orders.edit', 'uses'=>'OrdersController@edit', 'role' => 'admin_system']);
        Route::post('orders/update/{id}', ['as' => 'orders.update', 'uses'=>'OrdersController@update', 'role' => 'admin_system']);
        Route::post('orders/store', ['as' => 'orders.store', 'uses'=>'OrdersController@store', 'role' => 'admin_system']);
        Route::get('orders/destroy/{id}', ['as' => 'orders.destroy', 'uses'=>'OrdersController@destroy', 'role' => 'admin_system']);

        Route::get('orders/list', ['as' => 'orders.list', 'uses'=>'OrdersController@list', 'role' => 'deliveryman_system']);

        Route::get('cupoms', ['as' => 'cupoms.index', 'uses'=>'CupomsController@index', 'role' => 'admin_system']);
        Route::get('cupoms/create', ['as' => 'cupoms.create', 'uses'=>'CupomsController@create', 'role' => 'admin_system']);
        Route::get('cupoms/edit/{id}', ['as' => 'cupoms.edit', 'uses'=>'CupomsController@edit', 'role' => 'admin_system']);
        Route::post('cupoms/update/{id}', ['as' => 'cupoms.update', 'uses'=>'CupomsController@update', 'role' => 'admin_system']);
        Route::post('cupoms/store', ['as' => 'cupoms.store', 'uses'=>'CupomsController@store', 'role' => 'admin_system']);
        Route::get('cupoms/destroy/{id}', ['as' => 'cupoms.destroy', 'uses'=>'CupomsController@destroy', 'role' => 'admin_system']);
    });


    Route::group(['prefix'=>'customer', 'middleware' =>'auth', 'as'=>'customer.'], function(){
        Route::get('order', ['as' => 'order.index', 'uses'=>'CheckoutController@index', 'role' => 'user_system']);
        Route::get('order/create', ['as' => 'order.create', 'uses'=>'CheckoutController@create', 'role' => 'user_system']);
        Route::post('order/store', ['as' => 'order.store', 'uses'=>'CheckoutController@store', 'role' => 'user_system']);
    });

});



