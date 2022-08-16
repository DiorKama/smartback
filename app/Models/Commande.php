<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Paiement;
use App\Models\CommandeProduit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function paiement(){
        return $this->belongsTo(Paiement::class);
    }
    public function commandeProduit(){
        return $this->hasMany(CommandeProduit::class);
    }
}
