@extends('layouts.master')

@section('title')
Le mie schede
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">Le schede di {{ $user->username }} </p>
</div>
<div class="row">
    <div class="col">
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
                    <td><a href="#" class="link-dark">{{$template->name}}</a></td>
                    <td>#giorni</td>
                    <td>{{$template->description}}</td>
                    <td>{{$template->is_public? 'pubblica':'privata'}}</td>
                    <td><a href="#"><img src="images/icons/trash3.svg" alt="delete" /></a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection