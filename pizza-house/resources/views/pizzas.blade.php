@extends('layouts.layout')

@section('title', 'Pizza List')

@section('content')

<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        <!-- Variable output "taken from the Database" -->
        <!-- Double curly braces allow us to output a dynamic value or a variable  that we pass throught the view -->
        <!-- Dynamically Injection of Datas -->
        @foreach ($pizzas as $pizza)
            <p> {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['price'] }} </p>
        @endforeach 
    </div>
</div>

@endsection