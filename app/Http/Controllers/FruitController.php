<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index(){
        $fruits = Fruit::all();
        return view('pages.fruit', compact('fruits'));
    }
    public function create(){
        return view('pages.creation.createFruit');
    }
    public function store(Request $request){
        $store = new Fruit;
        $store->name = $request->name;
        $store->quantite = $request->quantite;
        $store->save();
        return redirect ('/fruit');
    }
}
