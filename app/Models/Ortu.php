<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;
    protected $table = "orangtua";
    protected $fillable = ['NamaOrtu','PekerjaanOrtu','notelpOrtu','Npm','id'];

    public function Mahasiswa(){
        return $this->hasMany(Mahasiswa::class,'Npm');
        // return $this->/**
        //  * Get the user that owns the Ortu
        //  *
        //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        //  */
        // public function user(): BelongsTo
        // {
            // return $this->belongsTo(User::class, 'foreign_key', 'other_key');
        // }
    }
}
