<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruitController extends Controller
{
    public function index()
    {
        $fruits = Fruit::orderBy('name', 'asc')->get();
        return view('pages.fruit', compact('fruits'));
    }
    public function create()
    {
        return view('pages.creation.createFruit');
    }
    public function store(Request $request)
    {
        $store = new Fruit;
        $store->name = $request->name;
        $store->quantite = $request->quantite;
        if (str_contains($store->name, '@')) {
            return redirect('/administration/fruitAdmin');
        } else {
            $store->save();
            return redirect('/fruit');
        }
    }
    public function show($id)
    {
        $show = Fruit::find($id);
        return view('pages.show.showFruit', compact('show'));
    }
}
