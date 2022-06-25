@extends('layouts.master')

@section('title')
Inserisci scheda
@endsection

@section('content')
{{-- inserisci scheda --}}
<div class="row py-2">
    <p class="h1 text-center">Inserisci scheda</p>
</div>
{{-- form per inserire la scheda --}}
<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xxl-8 py-1">
        <form action="{{route('user.templates.store',auth()->user())}}" method="POST" id="formTemplate">
            @csrf
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="template_name_text">Nome scheda</span>
                <input type="text" class="form-control @error('tempname') is-invalid @enderror" name="name"
                    id="tempname" aria-describedby="template_name_text">

                <div id="validationServerTempNameFeedback" class="text-danger ms-2">
                    @error('tempname')
                    {{$message}}
                    @enderror
                </div>

            </div>

            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="description_text">Descrizione</span>
                <input type="text" class="form-control @error('descr') is-invalid @enderror" name="description"
                    id="descr" aria-describedby="description_text">

                <div id="validationServerDescriptionFeedback" class="text-danger ms-2">
                    @error('descr')
                    {{$message}}
                    @enderror
                </div>

            </div>
            <div class="input-group mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="is_public" value="" id="public">
                    <label class="form-check-label" for="public">
                        Pubblica?
                    </label>
                </div>
            </div>

            <div class="row pt-2 px-2"><button type="submit" class="btn btn-primary btn-block" id="templateSubmit">Aggiungi
                    nuova scheda</button></div>
        </form>
    </div>
</div>

<script src="{{asset("js/template.js")}}"></script>
@endsection