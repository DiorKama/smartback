<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        return view('admin', compact('user'));
    }

    public function delete($id)
    {
       User::where('id','=',$id)->delete();
       return redirect('admin');
    } 
}
