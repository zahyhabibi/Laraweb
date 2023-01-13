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

    public function Mahasiswa(){
        return $this->hasMany('App\Models\Mahasiswa');
        // /**
        //  * Get all of the comments for the Dosen
        //  *
        //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
        //  */
        // public function comments(): HasMany
        // {
        //     return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
        // }
    }
    
}
