<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
   public function create(){
       return view('annonce.create');
   }
    public function store(Request $request){
        $this->validate($request,[
        'titre'=>'required',
        'contenu'=>'required',
        ]);
        $annonce=Annonce::create([
            'titre'=>$request->input('titre'),
            'contenu'=>$request->input('contenu'),
            'author_id'=>Auth::user()->id,
        ]);
           $annonce->save();

        return redirect('/annonceIndex');

    }
}
