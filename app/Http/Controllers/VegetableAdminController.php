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
        return view('back-office.pages.createVegetable');
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
        return view('back-office.pages.showVegetable', compact('show'));
    }
    public function edit($id){
        $edit = Vegetable::find($id);
        return view('back-office.pages.editVegetable',compact('edit'));
    }
    public function update($id, Request $request){
        $update = Vegetable::find($id);
        $update->name = $request->name;
        $update->quantite = $request->quantite;
        $update->save();
        return redirect('/administration/vegetableAdmin');
    }
    public function destroy($id){
        $destroy = Vegetable::find($id);
        $destroy->delete();
        return redirect('/administration/vegetableAdmin');
    }
}
