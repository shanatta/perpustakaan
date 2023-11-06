<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        //mengambil data dari database
        $data['buku'] = DB::table('buku')->get();

        //menampilkan data ke view
        return view('buku.index' , $data);
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $data['judul'] = $request->input('judul');
        $data['kode'] = $request->input('kode');
        $data['penulis'] = $request->input('penulis');
        $data['kategori'] = $request->input('kategori');
        $data['penerbit'] = $request->input('penerbit');
        $data['jml_halaman'] = $request->input('jml_halaman');
        $data['tahun_terbit'] = $request->input('tahun_terbit');

        DB::table('buku')->insert($data);

        return redirect('/buku');
    }

    public function show(string $id)
    {
        $data['buku'] = DB::table('buku')->where('id' , $id)->first();

        return view('buku.show' , $data);
    }

    public function edit(string $id)
    {
        $data['id'] = $id;
        $data['buku'] = DB::table('buku')->where('id' , $id)->first();

        return view('buku.edit' , $data);
    }

    public function update(Request $request , string $id)
    {
        $data['judul'] = $request->input('judul');
        $data['kode'] = $request->input('kode');
        $data['penulis'] = $request->input('penulis');
        $data['kategori'] = $request->input('kategori');
        $data['penerbit'] = $request->input('penerbit');
        $data['jml_halaman'] = $request->input('jml_halaman');
        $data['tahun_terbit'] = $request->input('tahun_terbit');

        DB::table('buku')->where('id' , $id)->update($data);

        return redirect('/buku');
    }

    public function destroy(string $id)
    {
        DB::table('buku')->where('id' , $id)->delete();

        return redirect('/buku');
    }
} 
