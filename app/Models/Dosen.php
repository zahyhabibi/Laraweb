<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = "dosen";
    protected $fillable = ['Kd_dosen','nama','email','alamat','jurusan','prodi','masa_jabatan'];
    protected $primaryKey = 'Kd_dosen';
    
}
