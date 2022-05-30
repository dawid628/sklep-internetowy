<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id){
        if(User::find($id)){
        $user = User::find($id);
        return view('profil', ['user' => $user]);
        }
        return redirect("/");
    }
}
