<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departement;
use App\Module;
use Illuminate\Support\Facades\Validator;

class DepartementController extends Controller
{

    public function create(){
        return view("departement.create");
    }


    public function store(Request $request){

        $this->validate($request,[
            'nom'=>'required',
        ]);
        $departement=Departement::create([
                'nom'=> $request->input('nom'),
            ]);
            $departement->save();

        return redirect('/departementcreation');
    }
}