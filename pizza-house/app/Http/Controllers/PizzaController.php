<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // index() is namining contention for /pizzas route
    public function index(){
        $pizzas = config('pizzas');

        return view('pizzas', 
        [ 
            'pizzas' => $pizzas,
        ]);
    }

    //When someone goes to /pizzas/{id} route, it grabs thee {id} value and assigns it to the function($id) variable
    public function show($id){
    //Pass the $id into the view
    return view('details', ['id' => $id]);
    }
}
