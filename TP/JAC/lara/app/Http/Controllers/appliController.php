<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\users;
class appliController extends Controller
{

    public function accueil(){

        //Si l'utilisateur est connecté
        if(isset($_SESSION)){
            return view('accueilConnecte');
        }
        else{
            return view('accueilNonConnecte');
        }
    }

    public function login(){
        return view('login');
    }

    public function connect(Request $request){
        try{
            $user = User::where('user', $request->input('nom'))->firstOrFail();
        }
        catch (\Illuminate\DataBase\Eloquant\ModelNotFoundException $e){
            return redirect('signin') -> with('message', 'Impossible de se connecter !');
        }

        if( !password_verify($request->input('mdp'), $user->mdp)){
                return redirect('signin')->with('message', 'Impossible de se connecter !');
        }

        $request->session()->put('user', $user->user);
        return redirect('admin/welcome');
    }
}
