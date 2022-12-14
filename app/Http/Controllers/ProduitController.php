<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Eleveur;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProduitController extends Controller
{
    public function index()
    {
        $user = User::get();
        $produit = Produit::get();
        return view('Produit.index', compact('produit', 'user'));
    }
    
    public function create()
    {
        $categorie = Categorie::all();
        $user = User::get();
        return view('Produit.ajout',compact('categorie', 'user'));
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
        $user_id = Auth::id();
        $produit->user_id = $user_id ;
        $produit->save() ;
      
        return redirect('produits');
    }

    public function edit($id) {
        $produit = Produit::where('id','=',$id)->first();
        $categorie = Categorie::all();
        $user = User::get();
        return view("Produit.edit", compact("produit", "categorie", "user"));
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
        $user_id = Auth::id();
        $produit->user_id = $user_id ;
       
         $produit->update() ;
         return redirect('produits'); 
    }

    public function delete($id)
    {
       Produit::where('id','=',$id)->delete();
       return redirect('produits');
    } 
    public function getProduit(){
       $produit = Produit::all(); 
       $categorie = Categorie::all();
       return view('daral', compact('produit', 'categorie'));
    }
    public function getMouton(Request $request){
        $categorie = Categorie::all();
        $produit = Produit::where('categorie_id',$request->id)->get();
        return view('daral', compact('produit', 'categorie'));
    }
    public function show($id)
    {
        $produits = Produit::find($id);
        return view('Produit.show', compact('produits'));
    }
}
