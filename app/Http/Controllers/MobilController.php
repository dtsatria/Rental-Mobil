<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;
use App\Models\Mobil;



class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Mobil = Mobil::with('tipemobil')->get();
        return view('admin.dataMobil', compact('Mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipeMobil = TipeMobil::all();
        return view('admin.addMobil', compact('tipeMobil'));
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'merk' => 'required',
            'tipemobil_id' => 'required',
            'plat_nomor' => 'required',  
            'tarif' => 'required',  
    	]);

 
        Mobil::create([
    		'merk' => $request->merk,
            'tipemobil_id' => $request->tipemobil_id,
    		'plat_nomor' => $request->plat_nomor,
    		'tarif' => $request->tarif,

    	]);
 
    	return redirect('/admin/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $Mobil = Mobil::with('tipemobil')->find($id);


        return view('admin.editMobil' , compact('Mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
    		'merk' => 'required',
            'tipemobil_id' => 'required',
            'plat_nomor' => 'required',  
            'tarif' => 'required',  
    	]);

        $Mobil = Mobil::find($id);
        $Mobil->merk = $request->merk;
        $Mobil->tipemobil_id = $request->tipemobil_id;
        $Mobil->plat_nomor = $request->plat_nomor;
        $Mobil->tarif = $request->tarif;
        $Mobil->update();
        return redirect('/admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Mobil = Mobil::find($id);
        $Mobil->delete();
        return redirect('/admin/dashboard');
    }
}
