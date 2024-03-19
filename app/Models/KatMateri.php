<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatMateri extends Model
{
    use HasFactory;

    protected $table = 'kat_materi';
    protected $fillable = ['nama', 'nm_kecil', 'kode'];
}