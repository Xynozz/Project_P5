<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    use HasFactory;

    public $fillable = ['nama_lokasi'];
    public $visible = ['nama_lokasi'];
    public $timestamp = true;

    public function destinasi(){
        return $this->hasMany(Destinasi::class,'id_lokasi');
    }
}
