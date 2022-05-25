<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function store(){

        $attributes = request()->validate(
            [
                'username' => ['required', 'unique:users','min:3', 'max:255'],
                'password' => ['required','min:8', 'max:20','alpha_num','confirmed']
            ]
        );


        $user=User::create($attributes);

        auth()->login($user);

        return('ok');


    }

    public function index(){
        return (view("register.index"));
    }
}
