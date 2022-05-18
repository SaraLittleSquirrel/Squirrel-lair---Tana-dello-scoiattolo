<?php

namespace App\Http\Controllers;

use App\Models\GymUser;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //
    public function index(){
        $gym_user = GymUser::find(1);
        return view('templates',['gym_user'=>$gym_user]);
    } 

}
