<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function Categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
    }
}
