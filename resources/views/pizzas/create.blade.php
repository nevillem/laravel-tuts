@extends('layouts.layout')
@section('content')
        <div class="wrapper create-pizza">
         <div class="title m-b-m-d"> 
         ADD NEW PIZZA
         </div>
        <form action="/pizzas" method="POST">
            <!-- to remove server direct attack error -->
            @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Pizza type:</label>
        <select type="text" id="type" name="type">
          <option value="margarita">Margarita</option>  
          <option value="veg suprime">Veg Suprime</option>  
          <option value="hawallian">Hawallian</option>  
        </select>

        <label for="base">Choose Pizza Base:</label>
        <select type="text" id="base" name="base">
        <option value="cheesy crust">Cheesy Crust</option>  
        <option value="garlic crust">Garlic Crust</option>  
        </select>
        <fieldset>
            <label for="">Extra Earnings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizza">

        </form>
        </div>
        @endsection

