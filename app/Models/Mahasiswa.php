<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $fillable = ['Npm','Nama','alamat','Semester','jml_sks','NTugas','NKehadiran','NUTS','NUAS','Kd_dosen'];
    protected $primaryKey = 'Npm';

    public function Ortu(){
        return $this->belongsTo(Ortu::class,'Npm');
    }
    public function Dosen(){
        return $this->belongsToMany('App\Models\Dosen');
        // return $this->/**
        //  * The roles that belong to the Mahasiswa
        //  *
        //  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
        //  */
        // public function roles(): BelongsToMany
        // {
        //     return $this->belongsToMany('App\Models\Dosen');
        // }
    }
    
}