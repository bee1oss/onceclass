<?php
/**
 * Created by PhpStorm.
 * User: Berat
 * Date: 2.12.2018
 * Time: 02:50
 */
Route::group(["as"=>"Frontend", "namespace" => "Frontend"],function (){
    Route::get("/","HomeController@login")->name(".login");
    Route::get("/","HomeController@login")->name(".login");
    Route::get("/cate","HomeController@cate")->name(".cate");
    Route::get("/about","HomeController@about")->name(".about");
    Route::get("/contact","HomeController@contact")->name(".contact");
    Route::get("/audio","HomeController@audio")->name(".audio");
    Route::get("/standart","HomeController@standart")->name(".standart");
    Route::get("/video","HomeController@video")->name(".video");
    Route::get("/style","HomeController@style")->name(".style");
    Route::get("/giris","HomeController@index")->name(".index");


});