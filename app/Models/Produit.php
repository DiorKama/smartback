<?php

namespace App\Models;

use App\Models\Eleveur;
use App\Models\Categorie;
use App\Models\CommandeProduit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
    public function categorie(){
    return $this->belongsTo(Categorie::class);
    }

    public function commandeProduit(){
        return $this->hasMany(CommandeProduit::class);
    }
    public function eleveur(){
        return $this->belongsTo(Eleveur::class); 
      }
}
