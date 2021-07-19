<?php

namespace App\Http\Controllers;

use App\Models\Vegetable;
use Illuminate\Http\Request;

class VegetableAdminController extends Controller
{
    public function vegetable () {
        $vegetables = Vegetable::all();
        return view('back-office.vegetableAdmin', compact('vegetables'));
    }
    public function create()
    {
        return view('back-office.pages.createElement');
    }
    public function store (Request $request){
        $store = new Vegetable;
        $store->name = $request->name;
        $store->quantite = $request->quantite;
        $store->save();
        return redirect('/administration/vegetableAdmin');
    }
    public function show($id)
    {
        $show = Vegetable::find($id);
        return view('back-office.pages.showElement', compact('show'));
    }
}
