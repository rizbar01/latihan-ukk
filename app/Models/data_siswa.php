<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_siswa extends Model
{
    protected $table = 'tabel_siswa';
     protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'sekolah'
    ];
}
