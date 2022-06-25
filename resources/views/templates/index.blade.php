@extends('layouts.master')

@section('title')
Le mie schede
@endsection

@section('content')
@php
use Illuminate\Support\Facades\DB;
@endphp
{{-- "le schede di nome_utente" --}}
<div class="row py-2">
    <p class="h1 text-center">Le schede di {{ $user->username }} </p>
</div>
{{-- tabella con tutte le schede --}}
<div class="row">
    <div class="col">
        <div class="table-responsive-lg">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Giorni</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Visibilità</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count=1;
                    @endphp
                    @foreach ($user->templates as $template)
                    <tr>
                        <th scope="row">{{$count++}}</th>
                        <td><a href="{{route('user.templates.show', ['user' => auth()->user(), 'template'=>$template])}}"
                                class="link-dark">{{$template->name}}</a></td>
                        <td>{{DB::table('excercises')->select('day')->where('template_id',
                            $template->id)->distinct()->get()->count()}}</td>
                        <td>{{$template->description}}</td>
                        <td>{{$template->is_public? 'pubblica':'privata'}}</td>
                        <td><a href={{route("template.confirmDelete", ['user'=>auth()->user(),'template'=>$template])}}><img
                                    src="{{asset('images/icons/trash3.svg')}}" alt="delete" /></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection