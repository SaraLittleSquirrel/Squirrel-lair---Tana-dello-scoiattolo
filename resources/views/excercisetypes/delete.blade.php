@extends('layouts.master')

@section('title')
Conferma eliminazione esercizio
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">Conferma eliminazione</p>
    <div class="col-12 py-2 my-2 text-center">
        Sei sicuro di voler eliminare l'esercizio?   
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 d-grid mx-2">
            <a href="{{route("user.excercisetypes.index", auth()->user())}}" class="btn btn-primary">No</a>
        </div>
        <div class="col-3 mx-2">
            <form action="{{route("user.excercisetypes.destroy", ['user'=>auth()->user(),
                'excercisetype'=>$excercisetype])}}" method="POST" class="d-grid">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Sì</button>
            </form>
        </div>
    </div>
</div>
@endsection