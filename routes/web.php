<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $data=[
        "hello" => "Hello",
        "world" => "World!"
    ];

    return view('Home', $data);
});

Route::get('Features', function () {

    $data=[
        "statement" => "Laravel it's awesome!!!"
    ];

    return view('Features', $data);
});

Route::get('Pricing', function () {

    $data=[
        "free" => "It's FREEEEEEEEEEEEEE!!!"
    ];

    return view('Pricing', $data);
});