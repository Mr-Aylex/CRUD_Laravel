<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonnageRequest;
use App\Personnage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cree_controller extends Controller
{
    public function menu(Request $request) {
        $user = DB::table('personnages')->get();
        
        return view('menu', ['users'=> $user]);
    }
    public function getForm()
    {
        return view('personnage');
    }
    public function postForm(PersonnageRequest $PersonnageRequest)
    {
        $Personnage = new Personnage();
        //$Personnage->
    }
    public function new_perso(Request $request) {
        
        return view('new_perso');
    }
}
