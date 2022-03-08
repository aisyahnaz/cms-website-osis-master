<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        "nisn_siswa", "nama_siswa", "tahun_ajaran", "email_siswa", "password_siswa"
    ];
}
