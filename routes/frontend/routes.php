<?php
/**
 * Created by PhpStorm.
 * User: Berat
 * Date: 2.12.2018
 * Time: 02:50
 */
Route::group(["as"=>"Frontend", "namespace" => "Frontend"],function (){
    Route::get("/","HomeController@index")->name(".index");
    Route::get("/cate","HomeController@cate")->name(".cate");
    Route::get("/about","HomeController@about")->name(".about");
    Route::get("/contact","HomeController@contact")->name(".contact");
    Route::get("/audio","HomeController@single")->name(".single");

});