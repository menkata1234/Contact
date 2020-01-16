<?php

Route::group(['namespace'=>'Milen\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
    Route::post('test2',function (){
        return json_encode(['name'=>'milen']);
    });
    Route::post('test3',function (){
        return json_encode(['name'=>'gosho']);
    });

    Route::group(['prefix'=>'api','middleware'=>'api'],function (){
        Route::get('test', function (){
            return json_encode(['key'=>'value']);
        });
    });
});

