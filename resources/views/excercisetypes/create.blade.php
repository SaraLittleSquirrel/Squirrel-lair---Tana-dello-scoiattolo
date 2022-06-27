@extends('layouts.master')

@section('title')
Inserisci esercizio
@endsection

@section('content')
{{-- inserisci esercizio --}}
<div class="row py-2">
    <p class="h1 text-center">Inserisci esercizio</p>
</div>
{{-- form per inserire i campi --}}
<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xxl-8 py-1">
        <form action="{{route('user.excercisetypes.store',auth()->user())}}" method="POST" id="formExType">
            @csrf
            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="excercise_name_text">Nome esercizio</span>
                <input type="text" class="form-control @error('exname') is-invalid @enderror" name="name" id="exname" aria-describedby="excercise_name_text">
                
                <div id="validationServerExNameFeedback" class="text-danger ms-2">
                    @error('exname')
                    {{$message}}
                    @enderror
                </div>
                
            </div>

            <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="equipment_text">Attrezzatura</span>
                <input type="text" class="form-control @error('equipment') is-invalid @enderror" name="equipment" id="equipment" aria-describedby="equipment_text">
            
                <div id="validationServerEquipmentFeedback" class="text-danger ms-2">
                    @error('equipment')
                    {{$message}}
                    @enderror
                </div>
            
            </div>
            <div class="input-group mb-3 d-flex align-items-center">
                <label class="input-group-text" for="body-part">Gruppo allenato</label>
                <select class="form-select @error('trained_body_part') is-invalid @enderror" name="trained_body_part" id="trained_body_part">
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

                <div id="validationServerBodyPartFeedback" class="text-danger ms-2">
                    @error('trained_body_part')
                    {{$message}}
                    @enderror
                </div>

            </div>

            <div class="row pt-2 px-2"><button type="submit" class="btn btn-outline-light border-secondary" style="color: #ce6324" id="exTypeSubmit">Aggiungi esercizio</button></div>
        </form>    
    </div>
    
</div>
<script src="{{asset("js/excercisetype.js")}}"></script>
@endsection