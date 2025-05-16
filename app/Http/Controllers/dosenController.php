<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Dosen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dosen.tambahData');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dosen = new Dosen;
        $dosen->nidn = $request->nidn;
        $dosen->nama = $request->nama;
        $dosen->email = $request->email;
        $dosen->rumpun = $request->rumpun;
        $dosen->nohp = $request->nohp;
        $dosen->save();

        return redirect('/dosen');
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
