<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    public $fillable = ['username','coment'];
    public $visible = ['username','coment'];
    public $timestamp = true;

    public function destinasi(){
        return $this->hasMany(Destinasi::class,'id_review');
    }
}
