<?php

Route::group(['namespace' => 'Shop'], function() {
    Route::get('/', [
        'uses' => 'IndexController@index',
        'as' => 'shop.index'
    ]);
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
        Route::get('/create', [
            'uses' => 'CategoryController@create',
            'as' => 'create'
        ]);

        Route::post('/store', [
            'uses' => 'CategoryController@store',
            'as' => 'store'
        ]);

        Route::get('/edit/{id}', [
            'uses' => 'CategoryController@edit',
            'as' => 'edit'
        ]);

        Route::put('/update/{id}', [
            'uses' => 'CategoryController@update',
            'as' => 'update'
        ]);
    });
});


Route::resource('/t','T');
