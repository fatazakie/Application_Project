<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor =1;
        $bar = Barang::all();
        return view('barang.index',compact('nomor','bar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bar = new Barang();
        $bar->merk = $request->merk; 
        $bar->nama =$request->nama;
        $bar->save();

        return redirect('/barang/');
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
