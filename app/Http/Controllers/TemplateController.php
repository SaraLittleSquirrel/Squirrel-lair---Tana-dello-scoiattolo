<?php

namespace App\Http\Controllers;

use App\Models\Excercise;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TemplateController extends Controller
{
    //mostra tutte le schede
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $templates = User::find(auth()->user()->id)->templates()->paginate(20);
        if (auth()->user() == $user)
            return view('templates.index', ['user' => $user, 'templates' => $templates]);
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
        return view('templates.show')->with('template', Template::find($template_id))
        ->with('is_owner', auth()->user()==Template::find($template_id)->user);
    }

    public function destroy(Request $request, $user_id, $template_id)
    {
        Template::find($template_id)->delete();
        Excercise::where('template_id',$template_id)->delete();
        
        return (redirect(route("user.templates.index",auth()->user())));
    }

    public function confirmDelete($user_id, $template_id)
    {

        return view('templates.delete')->with('template',Template::find($template_id));
    }

    public function searchTemplates(Request $request)
    {
        if ($request->has('search')) {
            $templates = Template::where('is_public', true)->where('name', 'like', '%'.$request->search.'%')->
            orWhere('description', 'like', '%'.$request->search.'%')->simplePaginate(50)->withQueryString();
        }
        else{
            $templates = Template::where('is_public', true)->simplePaginate(50);
        }
        

        return view('templates.search_templates')->with('templates', $templates)->with('search', $request->search);
    }
}
