<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vege;  

class VegeController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){

        //interak with databse
       // $pizzas = Vege::all();  //cara 1

       // $pizzas = Vege::orderBy('name', 'desc')->get();  // cara 2 kalo untuk mengorder

       // $pizzas = Vege::where('type', 'tomato')->get();   //mencari spesifik

       $pizzas = Vege::latest()->get();    //untuk latest
         return view('vege.index', 
         ['pizzas' => $pizzas,           
      ]);
    }
    public function show($id){
        $pizza = Vege::findOrFail($id);
        return view('vege.show', ['vegedet' => $pizza]); 
    }
    public function create(){
        return view('vege.create'); 
    }
    public function store(){
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));

        //save the order name in database that posted in view
        $vege = new Vege(); //create an instance
        $vege->name = request('name');
        $vege->type = request('type');
        $vege->base = request('base');
        $vege->bonus = request('bonus');


        $vege->save();        //saving it to database

       return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id){
       $pizza = Vege::findOrFail($id);
       $pizza->delete();

       return redirect('/vege');
       
    }
}
