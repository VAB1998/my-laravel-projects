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
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas = config('pizzas');

    // Access the Query Paramenter
    //Grab the Query Parameter from the Query String
    // $name = request('name');

    return view('pizzas', 
    [ 
        'pizzas' => $pizzas,
        // 'name'  => $name
    ]);
});

//When someone goes to /pizzas/{id} route, it grabs thee {id} value and assigns it to the function($id) variable
Route::get('/pizzas/{id}', function ($id) {
    
    //Pass the $id into the view
    return view('details', ['id' => $id]);
});