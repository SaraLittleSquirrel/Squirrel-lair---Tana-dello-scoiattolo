<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // salvare utente e password
    public function store(){

        $attributes = request()->validate(
            [
                'username' => ['required', 'unique:users','min:3', 'max:255'],
                'password' => ['required','min:8', 'max:20','alpha_num','confirmed']
            ]
        );

        $user=User::create($attributes);
        auth()->login($user);

        return(view("home"));
    }

    //pagina per registrarsi
    public function index(){
        return (view("register.index"));
    }

    //controllo se l'username esiste già
    public function checkUsername(Request $request){
        return(User::where('username', $request->username)->exists());
    }
}
