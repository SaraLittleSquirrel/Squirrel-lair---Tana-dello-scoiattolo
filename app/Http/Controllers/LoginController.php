<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //mostrare la pagina di login
    public function index(){
       
       return (view("login.index"));
   
    }

    //autentica l'utente
    public function login(){

        $attributes = request()->validate(
            [
                'username' => ['required', 'exists:users'],
                'password' => ['required'],
            ]
        );

        $remember_me = request()->has('remember')? true : false;

        if (auth()->attempt($attributes, $remember_me)) {
            return redirect(route('user.templates.index', ['user' => auth()->user()->id]));
        }

        throw ValidationException::withMessages([
            'username' => 'Wrong credentials'
        ]);
    }

    //logout utente
    public function logout(){
        
        auth()->logout();

        return redirect(route('home'));
    }
}
