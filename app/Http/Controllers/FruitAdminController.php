<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruitAdminController extends Controller
{
    public function fruit()
    {
        $fruits = Fruit::all();
        return view('back-office.fruitAdmin', compact('fruits'));
    }
    public function create()
    {
        return view('back-office.pages.createFruit');
    }
    public function store(Request $request)
    {
        $store = new Fruit;
        $store->name = $request->name;
        $store->quantite = $request->quantite;
        $store->save();
        return redirect('/administration/fruitAdmin');
    }
    public function show($id)
    {
        $show = Fruit::find($id);
        return view('back-office.pages.showFruit', compact('show'));
    }
    public function destroy($id){
        $destroy = Fruit::find($id);
        $destroy->delete();
        return redirect('/administration/fruitAdmin');
    }
}
