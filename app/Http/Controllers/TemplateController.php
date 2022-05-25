<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //
    public function index($user_id){
        $user = User::findOrFail($user_id);
        if (auth()->user() == $user)
        return view('templates.index',['user'=>$user]);
        else return redirect(route('home'));
    } 

}
