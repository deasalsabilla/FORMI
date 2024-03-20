<?php

namespace App\Http\Controllers;

use App\Models\mataKuliah;
use App\Models\KatMateri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class mataKuliahController extends Controller
{
    public function index()
    {
        $data = mataKuliah::all();
        $opt = KatMateri::all();
        return view('kelMataKuliah', compact('data', 'opt'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'semester' => 'required', // Remove 'string' validation as it's not necessary
        ]);

        $nm_kecil = strtolower(str_replace(' ', '', $request->nama));
        // Generate the code (replace with your desired logic)
        $lastKode = mataKuliah::latest('kode')->first();
        if ($lastKode) {
            $nextNumber = (int) substr($lastKode->kode, 2) + 1;
        } else {
            // Handle the scenario where there are no existing records
            $nextNumber = 1; // Or any default starting number you prefer
        }
        $newKode = 'MK' . str_pad($nextNumber, 2, '0', STR_PAD_LEFT); // Format the code

        mataKuliah::create([
            'nama' => $request->nama,
            'semester' => $request->semester,
            'nm_kecil' => $nm_kecil,
            'kode' => $newKode, // Set the generated code
        ]);
        return redirect()->route('mata-kuliah.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($kode)
    {
        $data = mataKuliah::where('kode', $kode)->firstOrFail();
        $opt = KatMateri::all(); // Mendapatkan data semester
        return view('editMataKuliah', compact('data', 'opt')); // Mengirimkan data semester ke view
    }



    public function update(Request $request, $kode)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'semester' => 'required|string|max:20',
        ]);

        $nm_kecil = strtolower(str_replace(' ', '', $request->nama));

        $mataKuliah = mataKuliah::where('kode', $kode)->firstOrFail();
        $mataKuliah->update([
            'nama' => $request->nama,
            'semester' => $request->semester,
            'nm_kecil' => $nm_kecil,
        ]);

        return Redirect::route('mata-kuliah.index')->with('success', 'Data berhasil diubah!');
    }

    public function destroy($kode)
    {
        $mataKuliah = mataKuliah::where('kode', $kode)->firstOrFail();
        $mataKuliah->delete();

        return Redirect::route('mata-kuliah.index')->with('success', 'Data berhasil dihapus!');
    }
}
