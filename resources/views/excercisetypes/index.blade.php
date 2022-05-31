@extends('layouts.master')

@section('title')
I miei esercizi
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">I miei esercizi</p>
</div>
<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome esercizio</th>
                    <th scope="col">Attrezzatura</th>
                    <th scope="col">Gruppo allenato</th>
                    
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @php
                $count=1;
                @endphp
                @foreach ($user->excercisetypes as $excercisetype)
                <tr>
                    <th scope="row">{{$count++}}</th>
                    <td>{{$excercisetype->name}}</td>
                    
                    <td>{{$excercisetype->equipment}}</td>
                    <td>{{$excercisetype->trained_body_part }}</td>
                    <td><a href="#"><img src="{{asset('images/icons/trash3.svg')}}" alt="delete" /></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection