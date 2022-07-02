<?php

namespace App\Http\Controllers;

use App\Models\Excercise;
use App\Models\ExcerciseType;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


class ExcerciseTypeController extends Controller
{
    //mostra esercizi
    public function index()
    {
        $exercisetypes = User::find(auth()->user()->id)->excerciseTypes()->paginate(20);
        return (view("excercisetypes.index")->with('user', auth()->user())
        ->with('excercisetypes', $exercisetypes));
    }

    //pagina creazione esercizi
    public function create()
    {
        return (view("excercisetypes.create"));
    }

    //salva esercizio
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255', Rule::unique('excercise_types')->where(fn ($query) => $query->where('user_id', auth()->user()->id))],
            'equipment' => ['required', 'max:255'],
            'trained_body_part' => ['required', Rule::in(['addome', 'bicipiti', 'femorali', 'gambe', 'petto', 'polpacci', 'quadricipiti', 'schiena', 'spalle', 'tricipiti'])]
        ]);

        $et = new ExcerciseType();
        $et->name = $request->name;
        $et->equipment = $request->equipment;
        $et->trained_body_part = $request->trained_body_part;
        $et->user_id = auth()->user()->id;

        $et->save();

        return (redirect(route("user.excercisetypes.index", auth()->user())));
    }

    //elimina esercizio
    public function destroy(Request $request, $user_id, $exercisetype_id)
    {
        ExcerciseType::find($exercisetype_id)->delete();
        Excercise::where('excercise_type_id', $exercisetype_id)->delete();

        return (redirect(route("user.excercisetypes.index", auth()->user())));
    }

    //conferma eliminazione esercizio
    public function confirmDelete($user_id, $exercisetype_id)
    {
        return view('excercisetypes.delete')->with('excercisetype', ExcerciseType::find($exercisetype_id));
    }
}
