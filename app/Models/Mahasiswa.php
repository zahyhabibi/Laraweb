<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "Mahasiswa";
    protected $fillabel = ['Npm','Nama','alamat','Semester','jml_sks','NTugas','NUTS','NUAS'];
    
}