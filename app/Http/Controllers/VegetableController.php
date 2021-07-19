<?php

namespace App\Http\Controllers;

use App\Models\Vegetable;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    public function index(){
        $vegetables = Vegetable::all();
        return view('pages.legume', compact('vegetables'));
    }
    public function create(){
        return view('pages.creation.createVegetable');
    }
    public function store(Request $request){
        $store = new Vegetable();
        $store->name = $request->name;
        $store->quantite = $request->quantite;
        $store->save();
        return redirect ('/vegetable');
    }
}
