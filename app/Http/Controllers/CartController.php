<?php

namespace App\Http\Controllers;
use App\Models\Produit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->produit_id;
        });

        if($duplicata->isNotEmpty()){
            return redirect()->route('tout-produit')->with('success', 'Le produit a déjà été ajouté.');  
        }
        $produit = Produit:: find($request->produit_id);

        Cart::add($produit->id, $produit->libelle, 1, $produit->prix)->associate('App\Models\Produit');
        
        return redirect()->route('tout-produit')->with('success', 'Le produit a bien été ajouté.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();

        $validator = Validator::make($request->all(),[
            'qty' => 'required|numeric|between:1,6'

        ]);
        if($validator->fails()){
            Session::flash('danger', 'La quantite du produit ne doit pas dépasser 6' . $data['qty'] . '.');

            return response()->json(['error' => 'cart quantity has not been Updated']);

        }

        Cart::update($rowId, $data['qty']);

        Session::flash('success', 'La quantite du produit est passée à' . $data['qty'] . '.');

        return response()->json(['success' => 'cart quantity has been Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('success', 'le produit a bien été supprimer');
    }
}
