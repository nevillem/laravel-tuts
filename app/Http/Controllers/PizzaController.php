<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    //
    public function index(){
        // $pizza= Pizza::all();
        // $pizza= Pizza::orderBy('name', 'desc')->get();
        // $pizza= Pizza::where('name', 'ovvacado')->get();
        $pizza= Pizza::latest()->get();
            return view('pizzas.index',
            ['pizzas' => $pizza,
            'name'=>request('name'),
            'age'=>request('age'),
        ]);
    }
    public function show($id){
     $pizza= Pizza::findOrFail($id);
  
        return view('pizzas.show',
        ['pizza'=> $pizza]);       
    }    

    public function create(){
        return view('pizzas.create');       
    }    
    public function store(){
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));
        // error_log(request('toppings'));
        $pizza= new Pizza();
        $pizza->name= request('name');
        $pizza->type= request('type');
        $pizza->base= request('base');
        $pizza->toppings= request('toppings');
        $pizza->price= 0;
        error_log($pizza);
        $pizza->save();
        return redirect('/')->with('msg','Thanks for your order');       
    }    

    public function destroy($id){
        $pizza= Pizza::findOrFail($id);
        $pizza->delete();
     
        return redirect('/pizzas');       
       }       
    
}
