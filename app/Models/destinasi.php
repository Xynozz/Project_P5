<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinasi extends Model
{
    use HasFactory;

    public $fillable = ['nama_tempat','harga','deskripsi','foto','id_kategori','id_lokasi','id_review'];
    public $visible = ['nama_tempat','harga','deskripsi','foto','id_kategori','id_lokasi','id_review'];
    public $timestamp = true;

    public function Kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori');
    }
    public function Lokasi(){
        return $this->belongsTo(Lokasi::class,'id_lokasi');
    }
    public function Review(){
        return $this->belongsTo(Review::class,'id_review');
    }
        // Menghapus Foto
    public function deleteImage(){
        if ($this->foto && file_exists(public_path('images/destinasi' . $this->foto))){
            return unlink(public_path('images/destinasi/' . $this->foto));
        }
    }

}
