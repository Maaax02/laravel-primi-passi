<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $datas =[
        'marca' => 'Nissan',
        'modello' => 'Silvia s14',
        'engine' => [
            '4 cylinders inline',
            'turbo',
            '1990'
        ]
        ];

    return view('home', $datas);
});
Route::get('contacts', function(){
    return view('contacts', 'contacts');
});

