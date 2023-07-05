<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Http\Requests\StorebooksRequest;
use App\Http\Requests\UpdatebooksRequest;
use GuzzleHttp\Psr7\Response;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.data')->with([
            'books' => books::all()
        ]);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebooksRequest $request)
    {
        $validate = $request->validated();

        $books = new books;
        $books-> idregister = $request->idregister;
        $books-> tingkat_penanganan = $request->txttingkat;
        $books-> no_perkara = $request->noreg;
        $books-> tgl = $request->tgl;
        $books-> pemohon = $request->pemohon;
        $books-> termohon = $request->termohon;
        $books-> masalah = $request->masalah;
        $books-> kasus_posisi = $request->posisi;
        $books-> tuntutan_penggugat = $request->tuntutan;
        $books-> jpn = $request->jpn;
        $books-> tahap_penanganan = $request->tahap;
        $books-> hasil_diluar = $request->hasildiluar;
        $books-> hasil_penetapan = $request->hasilpenetapan;
        $books-> ket = $request->ket;
        $books->save();

        return redirect('books')->with('msg','Data Register berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(books $books, $idregister)
    {
        $data = $books->find($idregister);
        return view('books.formedit')->with([
            'idregister' => $data->idregister,
            'txttingkat' => $data->tingkat_penanganan,
            'noreg' => $data->no_perkara,
            'tgl' => $data->tgl,
            'pemohon' => $data->pemohon,
            'termohon' => $data->termohon,
            'masalah' => $data->masalah,
            'posisi' => $data->kasus_posisi,
            'tuntutan' => $data->tuntutan_penggugat,
            'jpn' => $data->jpn,
            'tahap' => $data->tahap_penanganan,
            'hasildiluar' => $data->hasil_diluar,
            'hasilpenetapan' => $data->hasil_penetapan,
            'ket' => $data->ket
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebooksRequest $request, books $books, $idregister)
    {
        $data = $books->find($idregister);
        $data-> tingkat_penanganan = $request->txttingkat;
        $data-> no_perkara = $request->noreg;
        $data-> tgl = $request->tgl;
        $data-> pemohon = $request->pemohon;
        $data-> termohon = $request->termohon;
        $data-> masalah = $request->masalah;
        $data-> kasus_posisi = $request->posisi;
        $data-> tuntutan_penggugat = $request->tuntutan;
        $data-> jpn = $request->jpn;
        $data-> tahap_penanganan = $request->tahap;
        $data-> hasil_diluar = $request->hasildiluar;
        $data-> hasil_penetapan = $request->hasilpenetapan;
        $data-> ket = $request->ket;
        $data->save();

        return redirect('books')->with('msg','Data Register dengan nomor kasus '.$data->no_perkara.' berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(books $books)
    {
        //
    }
}
