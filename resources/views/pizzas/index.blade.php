@extends('layouts.layout')
@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="content">
            <img src="/img/farmer.png" alt="farmer"/>
         <div class="title m-b-m-d"> 
         PIZZA LIST
         </div>
         <p>{{$name}}</p>

          <!-- @for($i=0; $i < 5; $i++)
          <p>the value of i is {{$i}}</p>
          @endfor -->
          <!-- @for($i=0; $i < count($pizzas); $i++)
          <p>the value of i is {{$pizzas[$i]['type']}}</p>
          @endfor -->

          @foreach($pizzas as $pizza)
          <div>
             {{ $pizza->index}} -{{ $pizza->type }} - {{ $pizza->base }}- {{ $pizza->price }}

            </div>
          @endforeach
        </div>
        </div>
        @endsection

