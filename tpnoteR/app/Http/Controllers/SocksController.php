<?php

namespace App\Http\Controllers;

use App\Socks;
use Illuminate\Http\Request;

class SocksController extends Controller
{
    public function ajout( Request $request )
    {
        return view('Ajouter');
    }

    public function sockList( Request $request )
    {
        return view('sockList');
    }

    public function ajouterChaus( Request $request )
    {
        // On vérifie qu'on a bien reçu les données en POST
        if ( !$request->has(['description','longueur', 'etat', 'matiere']) )
            return redirect('ajout')->with('message',"Some POST data are missing.");


        //On crée la chaussette
        $sock = new Socks();
        $sock->description = $request->input('description');
        $sock->etat = $request->input('etat');
        $sock->matiere = $request->input('matiere');
        $sock->longueur = $request->input('longueur');
        $sock->proprietaire = $request->session()->get('user');

        try {
            // On crée dans la BDD
            $sock->save();
        }
        catch (\Illuminate\Database\QueryException $e) {
            return redirect('welcome')->with('message',$e->getMessage());
        }

        // Si tout est ok
        return redirect('admin/welcome')->with('message',"Chaussette créee !!");
    }
}
