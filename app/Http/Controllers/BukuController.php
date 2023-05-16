<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = buku::orderBy('id','asc')->paginate(5);
        return view('buku/index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul'=>'required',
            'tanggal_terbit'=>'required',
            'pencipta'=>'required',
            'harga'=>'required',
        ],[
            'judul.required'=>'Judul tidak boleh kosong',
            'tanggal_terbit.required'=>'Tanggal Terbit  tidak boleh kosong',
            'pencipta.required'=>'Pencipta tidak boleh kosong',
            'harga.required'=>'Harga tidak boleh kosong',
        ]);

        $data = [
            'judul'=>$request->input('judul'),
            'tanggal_terbit'=>$request->input('tanggal_terbit'),
            'pencipta'=>$request->input('pencipta'),
            'harga'=>$request->input('harga'),
        ];

        buku::create($data);
        return redirect('/buku')->with('response','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = buku::where('id',$id)->first();
        return view('buku/show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = buku::where('id',$id)->first();
        return view('buku/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'judul'=>'required',
            'tanggal_terbit'=>'required',
            'pencipta'=>'required',
            'harga'=>'required',
        ],[
            'judul.required'=>'Judul tidak boleh kosong',
            'tanggal_terbit.required'=>'Tanggal Terbit  tidak boleh kosong',
            'pencipta.required'=>'Pencipta tidak boleh kosong',
            'harga.required'=>'Harga tidak boleh kosong',
        ]);

        $data = [
            'judul'=>$request->input('judul'),
            'tanggal_terbit'=>$request->input('tanggal_terbit'),
            'pencipta'=>$request->input('pencipta'),
            'harga'=>$request->input('harga'),
        ];
        
        buku::where('id', $id)->update($data);
        return redirect('/buku')->with('response','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        buku::where('id', $id)->delete();
        return redirect('/buku')->with('response','Data berhasil dihapus');
    }
}
