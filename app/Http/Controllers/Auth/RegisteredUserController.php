<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $role= DB::table('roles')->limit(2)->get();

        return view('auth.register',compact('role'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telephone' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'cni' => ['required', 'string', 'max:255'],
            'role_id' =>[ 'integer', 'max: 13']
        ]);

        $user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' =>$request->telephone,
            'adresse' =>$request->adresse,
            'cni' =>$request->cni,
            'role_id' =>$request->compte,
        ]);

        event(new Registered($user));

        Auth::login($user);

        if(auth()->user()->role_id==1){
            return redirect('ajoutProduit');
        }
        elseif(auth()->user()->role_id==3){ 
            return redirect('admin');
        }
        else{
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }
}
