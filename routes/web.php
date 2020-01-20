<?php

Route::get('/', [
    'uses' => 'AppController@index',
    'as' => 'app.index'
]);
