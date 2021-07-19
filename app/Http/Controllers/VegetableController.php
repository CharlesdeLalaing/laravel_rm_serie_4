<?php

namespace App\Http\Controllers;

use App\Models\Vegetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VegetableController extends Controller
{
    public function index()
    {
        $vegetables = Vegetable::orderBy('name', 'asc')->get();
        return view('pages.legume', compact('vegetables'));
    }
    public function create()
    {
        return view('pages.creation.createVegetable');
    }
    public function store(Request $request)
    {
        $store = new Vegetable();
        $store->name = $request->name;
        $store->quantite = $request->quantite;
        if (str_contains($store->name, '@')) {
            return redirect('/administration');
        } else {
            $store->save();
            return redirect('/vegetable');
        }
    }
    public function show($id)
    {
        $show = Vegetable::find($id);
        return view('pages.show.showVegetable', compact('show'));
    }
}
