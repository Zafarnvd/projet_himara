<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieChambre extends Model
{
    use HasFactory;

    public function rooms(){
        return $this->hasMany(Chambre::class, 'categorie_chambre_id');
    }
}
