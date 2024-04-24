<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::all();
        return view('pages.buku.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $data = Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahunTerbit' => $request->tahunTerbit,
        ]);

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku, $id)
    {
        $data = Buku::find($id);
        $data->delete();
        return view('pages.buku.index', compact('data'));
    }
}
