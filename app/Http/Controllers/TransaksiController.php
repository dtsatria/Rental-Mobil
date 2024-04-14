<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Transaksi;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dataTransaksi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $Mobil = Mobil::find($id);

        return view('customer.transaksi', compact('Mobil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input dari formulir
        $validatedData = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            // tambahkan validasi lainnya sesuai kebutuhan Anda
        ]);

        // Simpan transaksi ke database
        Transaksi::create([
            'mobil_id' => $id,
            'tanggal_sewa_mulai' => $validatedData['start_date'],
            'tanggal_sewa_akhir' => $validatedData['end_date'],
            'status' => 'pending', // Set status ke default 'pending'
        ]);

        // Redirect pengguna setelah transaksi berhasil disimpan
        return redirect()->route('customer.transaksi')->with('success', 'Transaksi berhasil disimpan!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
