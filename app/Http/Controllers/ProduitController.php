<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Eleveur;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProduitController extends Controller
{
    public function index()
    {
        $produit = Produit::all();
        return view('Produit.index', compact('produit'));
    }
    
    public function create()
    {
        $categorie = Categorie::all();
        $eleveur= Eleveur::all();
        $user = User::all();
        return view('Produit.ajout',compact('categorie', 'user','eleveur'));
    }

    public function store(Request $request)
    {
       
        $produit = new Produit;
        $produit->libelle = $request->input('libelle');
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
           $produit->image= $filename;
        }
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->date_ajout = $request->input('date_ajout');
        $produit->categorie_id = (int)$request->input('categorie') ;
        $produit->eleveur_id = (int)$request->input('eleveur') ;
       
       
        $produit->save() ;
      
        return redirect('produits');
    }

    public function edit($id) {
        $produit = Produit::where('id','=',$id)->first();
        $categorie = Categorie::all();
        $eleveur= Eleveur::all();
        $user = User::all();
        return view("Produit.edit", compact("produit", "categorie", "user", "eleveur"));
    }

    public function update(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->libelle = $request->input('libelle');
        if($request->file('image')){
            $destination = public_path('public/Image'.$produit->image);
            if(File::exists($destination))
            {
               File::delete($destination);
            }
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
           $produit->image= $filename;
        }
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->date_ajout = $request->input('date_ajout');
        $produit->categorie_id = (int)$request->input('categorie') ;
        $produit->eleveur_id = (int)$request->input('eleveur') ;
       
         $produit->update() ;
         return redirect('produits'); 
    }

    public function delete($id)
    {
       Produit::where('id','=',$id)->delete();
       return redirect('produits');
    } 
    
}
