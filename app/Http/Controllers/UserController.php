<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $req){
        // return $req->input();
       $user =  User::where(['email' => $req->email])->first();
       if(!$user || !Hash::check($req->password, $user->password)){
        echo 'invalid Email or password';
        return redirect('login');
       }else {
        $req->session()->put('user', $user);
        return redirect('product');
       }
        
    }
}
