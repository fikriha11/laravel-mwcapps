<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;


class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengurus = Pengurus::all();

        $mustasyar = $pengurus->where('struktur', 'mustasyar');
        $syuriah_rais = $pengurus->where('struktur', 'syuriah-rais');
        $syuriah_katib = $pengurus->where('struktur', 'syuriah-katib');
        $syuriah_awan = $pengurus->where('struktur', 'syuriah-awan');
        $tanfidziyah_ketua = $pengurus->where('struktur', 'tanfidziyah-ketua');
        $tanfidziyah_sekretaris = $pengurus->where('struktur', 'tanfidziyah-sekretaris');
        $tanfidziyah_bendahara = $pengurus->where('struktur', 'tanfidziyah-bendahara');

        return view(
            'pengurus',
            compact(
                'mustasyar',
                'syuriah_rais',
                'syuriah_katib',
                'syuriah_awan',
                'tanfidziyah_ketua',
                'tanfidziyah_sekretaris',
                'tanfidziyah_bendahara'
            )
        );
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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