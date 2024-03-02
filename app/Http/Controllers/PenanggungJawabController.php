<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\PenanggungJawab;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorePenanggungJawabRequest;
use App\Http\Requests\UpdatePenanggungJawabRequest;

class PenanggungJawabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PenanggungJawab $penanggungJawab, Kelas $kelases)
    {
        $penanggungJawab = PenanggungJawab::all();
        $kelases = Kelas::all();
        return view('penanggung_jawab.index', compact( 'penanggungJawab', 'kelases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(PenanggungJawab $pj, Kelas $kelases)
    {
        $kelases = Kelas::all();
        return view('penanggung_jawab.create', compact('pj', 'kelases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenanggungJawabRequest $request, PenanggungJawab $pj, Kelas $kelas)
    {
        $pj->create($request->all());
        return redirect()->route('penanggung-jawab.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PenanggungJawab $penanggungJawab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PenanggungJawab $penanggungJawab)
    {
        $kelases = Kelas::all();
        return view('penanggung_jawab.edit', compact('penanggungJawab', 'kelases'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenanggungJawabRequest $request, PenanggungJawab $penanggungJawab)
    {
        $penanggungJawab->update($request->all());
        return redirect()->route('penanggung-jawab.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenanggungJawab $penanggungJawab)
    {
        $penanggungJawab->delete();
        return redirect()->route('penanggung-jawab.index');
    }
}
