<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eleveur extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function produit(){
    return $this->hasMany(Produit::class); 
    }
    
    public function utilisateur(){
        return $this->belongsTo(User::class); 
      }
}
