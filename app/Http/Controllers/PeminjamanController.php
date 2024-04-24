<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = peminjaman::all();
        return view('pages.peminjaman.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $buku = Buku::find($id);
        return view('pages.peminjaman.create')->with('buku', $buku);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $tabelBuku = Buku::where('judul', $request->bukuId)->first();


        $data = peminjaman::create([
            'userId' => Auth::user()->id,
            'bukuId' => $tabelBuku->id,
            'TanggalPeminjaman' => $request->tanggalDipinjam,
            'TanggalPengembalian' => $request->tanggalpengembalian,
            'StatusPeminjaman' => 'dipinjam',
            `updated_at` => null,
            `created_at` => null
        ]);
        return redirect()->route('buku.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman, $id)
    {
        $data = peminjaman::find($id);
        $data->delete();
        return redirect()->route('buku.index');
    }
}
