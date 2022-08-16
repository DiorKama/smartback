<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Eleveur;
use Illuminate\Http\Request;

class EleveurController extends Controller
{
    //
    public function create()
    {
        $eleveur= Eleveur::all();
        $user = User::all();
        return view('Eleveur.ajoutEleveur',compact( 'user','eleveur'));
    }
    public function store(Request $request)
    {
       
        $eleveur = new Eleveur;
        $eleveur->localisation = $request->input('localisation');
        $eleveur->cni = $request->input('cni');
        $eleveur->user_id = (int)$request->input('user') ;
        $eleveur->save() ;
      
        return redirect('ajoutProduit');
    }
}
