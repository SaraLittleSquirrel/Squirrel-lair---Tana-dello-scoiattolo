<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //
    public function index()
    {
        //mostrare la pagina di login
        return (view("login.index"));
    }

    public function login()
    {
        //autentica l'utente

        $attributes = request()->validate(
            [
                'username' => ['required', 'exists:users'],
                'password' => ['required']
            ]
        );

        if(auth()->attempt($attributes)){
            return redirect(route('user.templates.index', ['user'=>auth()->user()->id]));
        }

        throw ValidationException::withMessages([
            'username' => 'Wrong credentials'
        ]);
    }

    public function logout(){
        //logout utente

        auth()->logout();

        return redirect(route('home'));
    }
}
