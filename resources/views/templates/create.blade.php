@extends('layouts.master')

@section('title')
Inserisci scheda
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">Inserisci scheda</p>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-8 py-1">
        <form action="{{route('user.templates.store',auth()->user())}}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="template_name_text">Nome scheda</span>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="template_name_text">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="description_text">Descrizione</span>
                <input type="text" class="form-control" name="description" id="description" aria-describedby="description_text">
            </div>
            <div class="input-group mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="is_public" value="" id="public">
                    <label class="form-check-label" for="public">
                      Pubblica?
                    </label>
                  </div>
            </div>

            <div class="row pt-2"><button type="submit" class="btn btn-primary btn-block">Aggiungi nuova scheda</button></div>
    </div>
    </form>
</div>
</div>
@endsection