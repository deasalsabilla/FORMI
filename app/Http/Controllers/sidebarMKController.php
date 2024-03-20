<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mataKuliah;
use App\Models\KatMateri;

class sidebarMKController extends Controller
{
    public function index()
    {
        $data = mataKuliah::all();
        $opt = KatMateri::all();
        return view('materiKuliah', compact('data', 'opt'));
    }
}
