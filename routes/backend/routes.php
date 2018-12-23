<?php
/**
 * Created by PhpStorm.
 * User: Berat
 * Date: 8.12.2018
 * Time: 19:52
 */

Route::get('/secret ', function () {
    return view('backend.home.index');
});

/*Route::group(["prefix"=>"secret","as"=>"backend", "namespace" => "Backend"],function (){
    Route::group(["prefix"=>"settings","as"=>".settings","namespace" => "Settings"],function (){
        Route::get("/","SettingsController@show")->name(".show");
        Route::post("/update","SettingsController@update")->name(".update");
        Route::post("/create","SettingsController@create")->name(".create");
        Route::post("/delete","SettingsController@delete")->name(".delete");
    });

});*/


