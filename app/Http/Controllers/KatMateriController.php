<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\KatMateri;

class KatMateriController extends Controller
{
    public function index()
    {
        $data = KatMateri::all();
        return view('admin.kelKategoriMateri', compact('data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $nm_kecil = strtolower(str_replace(' ', '', $request->nama));
        // Generate the code (replace with your desired logic)
        $lastKode = KatMateri::latest('kode')->first();
        if ($lastKode) {
            $nextNumber = (int) substr($lastKode->kode, 2) + 1;
        } else {
            // Handle the scenario where there are no existing records
            $nextNumber = 1; // Or any default starting number you prefer
        }
        $newKode = 'KM' . str_pad($nextNumber, 2, '0', STR_PAD_LEFT); // Format the code

        KatMateri::create([
            'nama' => $request->nama,
            'nm_kecil' => $nm_kecil,
            'kode' => $newKode, // Set the generated code
        ]);
        return Redirect::route('kategori-materi.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($kode)
    {
        $data = KatMateri::where('kode', $kode)->firstOrFail();
        return view('admin.editKategoriMateri', compact('data'));
    }


    public function update(Request $request, $kode)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $nm_kecil = strtolower(str_replace(' ', '', $request->nama));

        $katMateri = KatMateri::where('kode', $kode)->firstOrFail();
        $katMateri->update([
            'nama' => $request->nama,
            'nm_kecil' => $nm_kecil,
        ]);

        return Redirect::route('kategori-materi.index')->with('success', 'Data berhasil diubah!');
    }

    public function destroy($kode)
    {
        $katMateri = KatMateri::where('kode', $kode)->firstOrFail();
        $katMateri->delete();

        return Redirect::route('kategori-materi.index')->with('success', 'Data berhasil dihapus!');
    }
}
