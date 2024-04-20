<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMataKuliah extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'hari',
        'mata_kuliah',
        'waktu_mulai',
        'waktu_selesai',
        'ruang',
        'dosen_pengampu',
        'jumlah_mahasiswa',
    ];
}
