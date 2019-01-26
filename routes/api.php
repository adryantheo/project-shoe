<?php

    use Illuminate\Http\Request;

    //API Untuk Membuat/ Mengirim Data Baru
    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');
    Route::post('/upload-file', 'ProductController@uploadFile');

    //API Untuk Mengambil Data Tertentu
    Route::get('/products', 'ProductController@index');    
    Route::get('/products/{product}', 'ProductController@show');

    Route::group(['middleware' => 'auth:api'], function(){
        //API Untuk Membuat/ Mengirim Data Baru
        Route::get('/users','UserController@index');
        Route::get('users/{user}','UserController@show');
        Route::get('users/{user}/orders','UserController@showOrders');

        //API Untuk Melakukan Update/ Edit
        Route::patch('users/{user}','UserController@update');        
        Route::patch('products/{product}/units/add','ProductController@updateUnits');
        Route::patch('orders/{order}/deliver','OrderController@deliverOrder');
        Route::resource('/orders', 'OrderController');
        Route::resource('/products', 'ProductController')->except(['index','show']);
    });