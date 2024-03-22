<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mataKuliah;
use App\Models\KatMateri;

class buatPostingController extends Controller
{
    public function index()
    {
        $data = mataKuliah::all();
        $opt = KatMateri::all();
        return view('materiKuliah', compact('data', 'opt'));
    }

    public function getMataKuliahByKategori($id_kategori)
    {
        // Mengambil mata kuliah berdasarkan kategori
        $mataKuliah = mataKuliah::where('semester', $id_kategori)->get();

        return response()->json($mataKuliah);
    }
}
