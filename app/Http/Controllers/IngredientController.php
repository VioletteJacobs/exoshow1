<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        return view('welcome', compact('ingredients'));
    }


    public function create(){
        return view ("pages.create");
    }


    public function store(Request $request){
        $newEntry = new Ingredient();
        $newEntry->nom = $request->nom;
        $newEntry->quantite = $request->quantite;
        $newEntry->photo = $request->photo;
        $newEntry-> save();
        return redirect()-> back();
    }


    public function destroy($id){
        $destroy = Ingredient::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function show($id){
        $show =Ingredient::find($id);
        return view('pages.show', compact('show'));
    }
}

