<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonnageRequest;
use App\Personnage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cree_controller extends Controller
{
    public function menu(Request $request) {
        $user = DB::table('personnage')->get();
        //$users = ;
        return view('menu', ['users'=> $user]);
    }
    public function getForm()
    {
        return view('personnage');
    }
    public function formulaire() {
        return view('new_perso');
    }
    public function new_perso(Request $request) {
        $Personnage = new Personnage();
        $Personnage->nom = request('nom');
        $Personnage->prenom = request('prenom');
        $Personnage->save();
        return redirect()->action(
            'cree_controller@menu');

    }

    public function suppression(Request $request) {
        $id = $request->get('id');
        DB::table('personnage')->delete($id);
        return redirect()->action(
            'cree_controller@menu');
    }
    public function getModification() {
        
    }
}
