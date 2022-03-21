<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    public function services()
    {
        return $this->belongsToMany(ServiceRoom::class, 'chambres_services');
    }

    public function tags()
    {
        return $this->belongsToMany(TagChambre::class, 'chambre_tags', "chambre_id");
    }

    public function category()
    {
        return $this->belongsTo(CategorieChambre::class, 'categorie_chambre_id');
    }
}
