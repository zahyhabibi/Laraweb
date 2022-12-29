<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $fillable = ['Npm','Nama','alamat','Semester','jml_sks','NTugas','NKehadiran','NUTS','NUAS'];
    protected $primaryKey = 'Npm';
    
}