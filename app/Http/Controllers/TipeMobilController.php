<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;


class TipeMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipeMobil = TipeMobil::all();
        return view('admin.addTipeMobil', compact('tipeMobil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'tipe' => 'required'
    	]);
 
        TipeMobil::create([
    		'tipe' => $request->tipe
    	]);
    	return redirect('/tipemobil/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipeMobil = TipeMobil::find($id);
        return view('admin.editTipeMobil', compact('tipeMobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipeMobil = TipeMobil::find($id);
        return view('admin.editTipeMobil' , compact('tipeMobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
    		'tipe' => 'required'
    	]);

        $tipeMobil = TipeMobil::find($id);
        $tipeMobil->tipe = $request->tipe;
        $tipeMobil->update();
        return redirect('/tipemobil/create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
