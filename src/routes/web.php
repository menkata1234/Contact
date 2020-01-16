<?php

Route::group(['namespace'=>'Milen\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
    Route::group(['prefix'=>'api','midleware'=>'api'],function (){
        Route::get('test', function (){
            return json_encode(['key'=>'value']);
        });
    });
});

