@extends('layouts.master')

@section('title')
Modifica Esercizio
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">Modifica esercizio nella scheda</p>
</div>

{{-- form per modificare esercizio --}}
<div class="row d-flex justify-content-center">
    <div class="col-8 py-1">
        <form
            action="{{route('user.templates.excercises.update',['user' => auth()->user(), 'template'=> $template, 'excercise'=>$excercise])}}"
            method="POST" id="formExInsert">
            @csrf
            @method('PUT')
            {{-- scegli esercizio --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <label class="input-group-text" for="body-part">Scegli esercizio</label>
                <select class="form-select @error('excercise') is-invalid @enderror" name="excercise" id="excercise">
                    <option selected disabled value="">Scegli</option>
                    @foreach ($excercise_types as $excercise_type)
                    <option value="{{$excercise_type->id}}" {{$excercise->excerciseType->id == $excercise_type->id ?
                        'selected' : ''}}>{{$excercise_type->name}}</option>
                    @endforeach
                </select>

                <div id="validationServerExcericseFeedback" class="text-danger ms-2">
                    @error('excercise')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- giorno --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <label class="input-group-text" for="day-train">Giorno</label>
                <select class="form-select @error('day_training') is-invalid @enderror" name="day" id="day">
                    <option selected disabled value="">Scegli</option>
                    @for ($i = 1; $i <= 7; $i++) <option value="{{$i}}" {{$excercise->day == $i ? 'selected' : ''}}>
                        {{$i}}</option>
                        @endfor
                </select>

                <div id="validationServerDayTrainingFeedback" class="text-danger ms-2">
                    @error('day_training')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- numero serie --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="sets_text">Numero Serie</span>
                <input type="text" class="form-control @error('sets') is-invalid @enderror" name="sets" id="set"
                    aria-describedby="sets_num_text" value="{{$excercise->sets}}">

                <div id="validationServerSetFeedback" class="text-danger ms-2">
                    @error('sets')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- progressione --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <label class="input-group-text" for="progress">Progressione</label>
                <select class="form-select @error('progressionScheme') is-invalid @enderror" name="progression"
                    id="progression">
                    <option selected disabled value="">Scegli</option>
                    <option value="wave" {{$excercise->progression == 'wave' ? 'selected' : ''}}>Wave</option>
                    <option value="doppia" {{$excercise->progression == 'doppia' ? 'selected' : ''}}>Doppia</option>
                </select>

                <div id="validationServerProgressionSchemeFeedback" class="text-danger ms-2">
                    @error('progressionScheme')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- rep min --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="repmin_text">Rep min</span>
                <input type="text" class="form-control @error('rpmin') is-invalid @enderror" name="rep_min" id="rep_min"
                    aria-describedby="repmin_text" value="{{$excercise->rep_min}}">

                <div id="validationServerRepMinFeedback" class="text-danger ms-2">
                    @error('rpmin')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- rep max --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="rpmax_text">Rep max</span>
                <input type="text" class="form-control @error('rpmax') is-invalid @enderror" name="rep_max" id="rep_max"
                    aria-describedby="repmax_text" value="{{$excercise->rep_max}}">

                <div id="validationServerRepMaxFeedback" class="text-danger ms-2">
                    @error('rpmax')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- rec min --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="recmin_text">Rec min</span>
                <input type="text" class="form-control @error('rcmin') is-invalid @enderror" name="recovery_min"
                    id="rec_min" aria-describedby="repcin_text" value="{{$excercise->recovery_min}}">

                <div id="validationServerRecMinFeedback" class="text-danger ms-2">
                    @error('rcmin')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- rec max --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="rcmax_text">Rec max</span>
                <input type="text" class="form-control @error('rcmax') is-invalid @enderror" name="recovery_max"
                    id="rec_max" aria-describedby="recmax_text" value="{{$excercise->recovery_max}}">

                <div id="validationServerRecMaxFeedback" class="text-danger ms-2">
                    @error('rcmax')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- carico --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="load_text">Carico</span>
                <input type="text" class="form-control @error('weight') is-invalid @enderror" name="load" id="load"
                    aria-describedby="load_text" value="{{$excercise->load}}">

                <div id="validationServerLoadFeedback" class="text-danger ms-2">
                    @error('weigth')
                    {{$message}}
                    @enderror
                </div>
            </div>
            {{-- tipo di carico --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <label class="input-group-text" for="load-type">Tipo di carico</label>
                <select class="form-select @error('loadt') is-invalid @enderror" name="load_type" id="load_type">
                    <option selected disabled value="">Scegli</option>
                    <option value="%RPE" {{$excercise->load_type == '%RPE' ? 'selected' : ''}}>%RPE</option>
                    <option value="RIR" {{$excercise->load_type == 'RIR' ? 'selected' : ''}}>RIR</option>
                    <option value="%RM" {{$excercise->load_type == '%RM' ? 'selected' : ''}}>%RM</option>
                    <option value="kg" {{$excercise->load_type == 'kg' ? 'selected' : ''}}>Kg</option>

                </select>

                <div id="validationServerLoadTypeFeedback" class="text-danger ms-2">
                    @error('loadt')
                    {{$message}}
                    @enderror
                </div>

            </div>
            
            {{-- salva modifiche --}}
            <div class="row pt-2"><button type="submit" class="btn btn-outline-light border-secondary btn-block"
                    style="color:#ce6324" id="exSubmit">Salva
                    modifiche</button>
            </div>

        </form>
        {{-- elimina esercizio --}}
        <div class="row pt-2">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Elimina esercizio
            </button>
        </div>

        {{-- modal per conferma eliminazione --}}
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Eliminazione esercizio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler eliminare l'esercizio?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-light border-secondary" style="color:#ce6324" data-bs-dismiss="modal">No</button>
                        <form action="{{route('user.templates.excercises.destroy',['user' => auth()->user(), 'template'=> $template, 'excercise'=>$excercise])}}", method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                            Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="{{asset("js/excerciseinsert.js")}}"></script>
@endsection