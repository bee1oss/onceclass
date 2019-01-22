<?php

Route::group(["prefix"=>"siteyonetim", "as"=>"backend", "namespace" => "Backend"], function () {
    Route::group(["prefix" => "settings", "as" => ".settings","namespace" => "Settings"], function () {
        Route::get("/", "SettingsController@show")->name(".show");

        Route::post("/update","SettingsController@update")->name(".update");
        Route::post("/create","SettingsController@create")->name(".create");
        Route::post("/delete","SettingsController@delete")->name(".delete");

    });

    Route::group(["prefix"=>"static","as"=>".static","namespace"=>"Statics"],function ()
    {
        Route::get("/","StaticController@show")->name(".show");
        Route::get("/yeni-sayfa","StaticController@newPageShow")->name(".newPageShow");
        Route::post("/new-page-create","StaticController@create")->name(".newPageCreate");
        Route::get("/duzenle/{slug}","StaticController@editPageShow")->name(".editPageShow");
        Route::post("/edit/{slug}","StaticController@update")->name(".pageEdit");
        Route::post("/delete","StaticController@delete")->name(".delete");

        Route::group(["prefix"=>"modul","as"=>".module"],function ()
        {
            Route::get("/","ModulController@show")->name(".show");
            Route::get("/yeni-modul","ModulController@newModulShow")->name(".newModuleShow");
            Route::post("/new-module-create", "ModulController@create")->name(".newModuleCreate");

        });

    });

});