<?php

namespace App\Http\Controllers;

use App\Models\Excercise;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;

class ExcerciseController extends Controller
{
    public function create($user_id, $template_id)
    {
        
        return view('templates.excercises.create')->with('user', User::find($user_id))
        ->with('template', Template::find($template_id))
        ->with('excercise_types', User::find($user_id)->excerciseTypes);
    }
    
    public function store(Request $request, $user_id, $template_id)
    {
        $excercise  = new Excercise;
        $excercise->template_id = $template_id;
        $excercise->excercise_type_id = $request->excercise;
        $excercise->day = $request->day;
        $excercise->sets = $request->sets;
        $excercise->progression = $request->progression;
        $excercise->rep_min = $request->rep_min;
        $excercise->rep_max = $request->rep_max;
        $excercise->recovery_min = $request->recovery_min;
        $excercise->recovery_max = $request->recovery_max;
        $excercise->load = $request->load;
        $excercise->load_type = $request->load_type;

        $excercise -> save();

        return (redirect(route("user.templates.show", ['user' => auth()->user(), 'template' => Template::find($template_id)])));


    }

    public function edit($user_id, $template_id, $excercise_id)
    {
        return view('templates.excercises.edit')->with('user', User::find($user_id))
        ->with('template', Template::find($template_id))
        ->with('excercise_types', User::find($user_id)->excerciseTypes)
        ->with('excercise',Excercise::find($excercise_id));
    }

    public function update(Request $request, $user_id, $template_id, $excercise_id)
    {
        $excercise  = Excercise::find($excercise_id);
        $excercise->template_id = $template_id;
        $excercise->excercise_type_id = $request->excercise;
        $excercise->day = $request->day;
        $excercise->sets = $request->sets;
        $excercise->progression = $request->progression;
        $excercise->rep_min = $request->rep_min;
        $excercise->rep_max = $request->rep_max;
        $excercise->recovery_min = $request->recovery_min;
        $excercise->recovery_max = $request->recovery_max;
        $excercise->load = $request->load;
        $excercise->load_type = $request->load_type;

        $excercise -> save();

        return (redirect(route("user.templates.show", ['user' => auth()->user(), 'template' => Template::find($template_id)])));


    }

    public function destroy(Request $request, $user_id, $template_id, $excercise_id)
    {
        Excercise::find($excercise_id)->delete();

        return (redirect(route("user.templates.show", ['user' => auth()->user(), 'template' => Template::find($template_id)])));
    }

}
