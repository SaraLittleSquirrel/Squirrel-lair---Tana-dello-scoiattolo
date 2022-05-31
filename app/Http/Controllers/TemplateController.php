<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TemplateController extends Controller
{
    //
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        if (auth()->user() == $user)
            return view('templates.index', ['user' => $user]);
        else return redirect(route('home'));
    }

    public function create()
    {
        return view('templates.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'max:255', Rule::unique('templates')->where(fn ($query) => $query->where('user_id', auth()->user()->id))],
                'description' => ['required', 'max:255']
            ]
        );


        $tem = new Template();
        $tem->name = $request->name;
        $tem->description = $request->description;
        $tem->is_public = $request->has('is_public');
        $tem->user_id = auth()->user()->id;

        $tem->save();

        return (redirect(route("user.templates.index", auth()->user())));
    }

    public function show($user_id, $template_id)
    {
        return view('templates.show')->with('template', Template::find($template_id));
    }
}
