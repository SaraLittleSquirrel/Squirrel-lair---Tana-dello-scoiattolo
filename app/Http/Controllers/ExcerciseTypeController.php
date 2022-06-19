<?php

namespace App\Http\Controllers;


use App\Models\ExcerciseType;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


class ExcerciseTypeController extends Controller
{
    public function index()
    {
        return (view("excercisetypes.index")->with('user', auth()->user()));
    }

    public function create()
    {
        return (view("excercisetypes.create"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255', Rule::unique('excercise_types')->where(fn ($query) => $query->where('user_id', auth()->user()->id))],
            'equipment' =>['required', 'max:255'],
            'trained_body_part'=>['required',Rule::in(['addome', 'bicipiti', 'femorali', 'gambe', 'petto', 'polpacci', 'quadricipiti', 'schiena', 'spalle', 'tricipiti'])]
        ]);

        $et=new ExcerciseType();
        $et->name=$request->name;
        $et->equipment=$request->equipment;
        $et->trained_body_part=$request->trained_body_part;
        $et->user_id=auth()->user()->id;

        $et->save();

        return (redirect(route("user.excercisetypes.index",auth()->user())));
    }

    public function destroy(Request $request, $user_id, $exercisetype_id)
    {
        ExcerciseType::find($exercisetype_id)->delete();
        
        return (redirect(route("user.excercisetypes.index",auth()->user())));
    }

    public function confirmDelete($user_id, $exercisetype_id)
    {

        return view('excercisetypes.delete')->with('excercisetype',ExcerciseType::find($exercisetype_id));
    }
}
