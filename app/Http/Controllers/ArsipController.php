<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Kelas;
use App\Models\PenanggungJawab;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreArsipRequest;
use App\Http\Requests\UpdateArsipRequest;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Arsip $arsip, PenanggungJawab $penanggungJawab, Kelas $kelas)
    {
        $arsip = Arsip::all();
        $penanggungJawab = PenanggungJawab::all();
        $kelas = Kelas::all();

        return view('arsip.index', compact('arsip', 'penanggungJawab', 'kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Arsip $arsip, PenanggungJawab $penanggungJawab, Kelas $kelas)
    {
        $arsip = Arsip::all();
        $penanggungJawab = PenanggungJawab::all();
        $kelas = Kelas::all();

        return view('arsip.create', compact('arsip', 'penanggungJawab', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArsipRequest $request, Arsip $arsip)
    {
        $arsip->create($request->all());
        return redirect()->route('arsip.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Arsip $arsip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arsip $arsip)
    {
        $penanggungJawab = PenanggungJawab::all();
        $kelas = Kelas::all();

        return view('arsip.edit', compact('arsip', 'penanggungJawab', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArsipRequest $request, Arsip $arsip)
    {
        $arsip->update($request->all());
        return redirect()->route('arsip.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arsip $arsip)
    {
        $arsip->delete();
        return redirect()->route('arsip.index');
    }
}
