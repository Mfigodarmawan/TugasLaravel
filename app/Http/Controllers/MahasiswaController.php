<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function create()
    {
        return view('mahasiswa.form');
    }
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.create')
            ->with('success', 'Data mahasiswa berhasil disimpan');
    }
}
