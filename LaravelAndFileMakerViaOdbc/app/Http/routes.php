<?php

use App\ZipCodes;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $zips = new ZipCodes;
    dd($zips->all());
});

Route::get('/zip/1', function () {
    $zip = new ZipCodes;
    dd($zips->find(1));
});

