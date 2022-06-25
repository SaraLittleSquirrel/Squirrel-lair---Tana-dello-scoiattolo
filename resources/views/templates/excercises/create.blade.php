@extends('layouts.master')

@section('title')
Inserisci esercizi nella scheda
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">Inserisci esercizio nella scheda</p>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-8 py-1">
        <form action="{{route('user.templates.store',auth()->user())}}" method="POST" id="formExInsert">
            @csrf
            {{-- scegli esercizio --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <label class="input-group-text" for="body-part">Scegli esercizio</label>
                <select class="form-select @error('excercise') is-invalid @enderror" name="excercise" id="excercise">
                    <option selected disabled value="">Scegli</option>
                    <option value="addome">Addome</option>
                    <option value="bicipiti">Bicipiti</option>
                    <option value="femorali">Femorali</option>
                    <option value="gambe">Gambe</option>
                    <option value="petto">Petto</option>
                    <option value="polpacci">Polpacci</option>
                    <option value="quadricipiti">Quadricipiti</option>
                    <option value="schiena">Schiena</option>
                    <option value="spalle">Spalle</option>
                    <option value="tricipiti">Tricipiti</option>
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
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
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
                    aria-describedby="sets_num_text">

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
                    <option value="wave">Wave</option>
                    <option value="doppia">Doppia</option>
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
                    aria-describedby="repmin_text">

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
                    aria-describedby="repmax_text">

                <div id="validationServerRepMaxFeedback" class="text-danger ms-2">
                    @error('rpmax')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- rec min --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="recmin_text">Rec min</span>
                <input type="text" class="form-control @error('rcmin') is-invalid @enderror" name="recovery_min" id="rec_min"
                    aria-describedby="repcin_text">

                <div id="validationServerRecMinFeedback" class="text-danger ms-2">
                    @error('rcmin')
                    {{$message}}
                    @enderror
                </div>

            </div>
            {{-- rec max --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="rcmax_text">Rec max</span>
                <input type="text" class="form-control @error('rcmax') is-invalid @enderror" name="recovery_max" id="rec_max"
                    aria-describedby="recmax_text">

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
                    aria-describedby="load_text">

                <div id="validationServerLoadFeedback" class="text-danger ms-2">
                    @error('weigth')
                    {{$message}}
                    @enderror
                </div>
            </div>
            {{-- tipo di carico --}}
            <div class="input-group mb-3 d-flex align-items-center">
                <label class="input-group-text" for="load-type">Tipo di carico</label>
                <select class="form-select @error('loadt') is-invalid @enderror" name="load_type"
                    id="load_type">
                    <option selected disabled value="">Scegli</option>
                    <option value="%RPE">%RPE</option>
                    <option value="RIR">RIR</option>
                    <option value="%RM">%RM</option>
                    <option value="kg">Kg</option>
     
                </select>

                <div id="validationServerLoadTypeFeedback" class="text-danger ms-2">
                    @error('loadt')
                    {{$message}}
                    @enderror
                </div>

            </div>

            <div class="row pt-2"><button type="submit" class="btn btn-primary btn-block" id="exSubmit">Aggiungi
                    esercizio</button></div>
    </div>
    </form>
</div>
</div>
<script src="{{asset("js/excerciseinsert.js")}}"></script>
@endsection