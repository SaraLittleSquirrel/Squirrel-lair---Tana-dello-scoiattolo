@extends('layouts.master')

@section('title')
Inserisci esercizio
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">Inserisci esercizio</p>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-8 py-1">
        <form>
            <div class="input-group mb-3">
                <span class="input-group-text" id="excercise_name_text">Nome esercizio</span>
                <input type="text" class="form-control" id="name" aria-describedby="excercise_name_text">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="equipment_text">Attrezzatura</span>
                <input type="text" class="form-control" id="equipment" aria-describedby="equipment_text">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Gruppo allenato</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Scegli</option>
                    <option value="addome">Addome</option>
                    <option value="bicipiti">Bicipiti</option>
                    <option value="femorali">Femorali</option>
                    <option value="gambe">Gambe</option>
                    <option value="polpacci">Polpacci</option>
                    <option value="quadricipiti">Quadricipiti</option>
                    <option value="schiena">Schiena</option>
                    <option value="spalle">Spalle</option>
                    <option value="tricipiti">Tricipiti</option>
                </select>
            </div>

            <div class="row pt-2"><button type="submit" class="btn btn-primary btn-block">Aggiungi esercizio</button></div>
    </div>
    </form>
</div>
</div>
@endsection