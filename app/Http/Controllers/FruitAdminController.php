<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitAdminController extends Controller
{
    public function fruit () {
        $fruits = Fruit::all();
        return view('back-office.fruitAdmin', compact('fruits'));
    }
    public function create()
    {
        return view('back-office.pages.createElement');
    }
    public function store (Request $request){
        $store = new Fruit;
        $store->name = $request->name;
        $store->quantite = $request->quantite;
        $store->save();
        return redirect('/administration/fruitAdmin');
    }
}


