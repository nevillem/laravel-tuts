@extends('layouts.layout')
@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="content">
            <img src="/img/farmer.png" alt="farmer"/>
         <div class="title m-b-m-d"> 
         The North's Best Pizzas
         </div>
         <a href="/pizzas">Pizzas</a>
         <a href="/pizzas/create">Order a Pizza</a>
         <p class="msg">{{session('msg')}}</p>
  
        </div>
        </div>
        @endsection