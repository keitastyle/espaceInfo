<?php

namespace App\Http\Controllers\Auth;

use App\Departement;
use App\User;
use App\Etudiant;
use App\Professeur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $succes=0;
       $user = User::create([
            'nom' => $data['nom'],
            'prenom'=>$data['prenom'],
            'email' => $data['email'],
           // 'phone'=>$data['phone'],
            'password' => bcrypt($data['password']),
        ]);
        if(Empty($data['grade'])){
           $etudiant = Etudiant::create([
               'date_debut'=>$data['date_debut'],
               'date_naissance'=>$data['date_naissance'],
               'classe_id'=>null,//($data['classe_id']!="")?$data['classe_id']:null,
           ]);
            $etudiant->user()->save($user);
        }else{
              $prof=Professeur::create([
                  'grade'=>$data['grade'],
                  'departement_id'=>intVal($data['departement_id'])
                      ]);
            $prof->user()->save($user);


        }
        return $user;
    }
}
