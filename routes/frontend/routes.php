<?php
/**
 * Created by PhpStorm.
 * User: Berat
 * Date: 2.12.2018
 * Time: 02:50
 */

Route::get('/','Auth\LoginController@showLoginForm')->name('frontend.login');
Route::post('/','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout')->name('frontend.logout');

Route::group(["as"=>"Frontend", "namespace" => "Frontend"],function (){
   
    Route::get("/cate","HomeController@cate")->name(".cate");
    Route::get("/about","HomeController@about")->name(".about");
    Route::get("/contact","HomeController@contact")->name(".contact");
    Route::get("/audio","HomeController@audio")->name(".audio");
    Route::get("/standart","HomeController@standart")->name(".standart");
    Route::get("/video","HomeController@video")->name(".video");
    Route::get("/style","HomeController@style")->name(".style");
    Route::get("/home","HomeController@index")->name(".index");


});