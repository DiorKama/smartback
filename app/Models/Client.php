<?php

namespace App\Models;

use App\Models\User;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function commande(){
        return $this->hasMany(Commande::class);
    }
    public function utilisateur(){
        return $this->belongsTo(User::class); 
      }
      
}
