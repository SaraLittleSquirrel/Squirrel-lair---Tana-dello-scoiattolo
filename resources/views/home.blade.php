@extends('layouts.master')

@section('title')
Home
@endsection

@section('content')
{{-- jumbotron --}}
<div class="p-4 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-10">
                <h1 class="display-5 fw-bold">Lo sapevi?</h1>
                <p class="col-md-8 fs-4">Agli scoiattolini nel tempo libero piace sollevare la ghisa</p>
            </div>
            <div class="col align-items-end">
                <img src="{{asset('images/icons/question-circle.svg')}}" width="80%" height="80%" alt="">
            </div>
        </div>
    </div>
</div>

{{-- features del sito --}}
<div class="container-fluid px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Cosa si fa di bello nella tana?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <div class="feature-icon mb-2">
                <img src="{{asset('images/icons/archive.svg')}}" width="10%" height="10%" alt="">
            </div>
            <h2>Inserisci i tuoi esercizi</h2>
            <p>Crea la tua collezione di esercizi che fai di più.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon mb-2">
                <img src="{{asset('images/icons/clipboard-data.svg')}}" width="10%" height="10%" alt="">
            </div>
            <h2>Crea e salva i tuoi allenamenti</h2>
            <p>Crea, a partire dagli esercizi, le tue schede preferite. Potrai visualizzarle, modificarle e salvarle in
                formato pdf, per una pratica lettura offline.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon mb-2">
                <img src="{{asset('images/icons/search.svg')}}" width="10%" height="10%" alt="">
            </div>
            <h2>Cerca schede</h2>
            <p>Lasciati ispirare dagli altri utenti e cerca qualche nuova idea per un allenamento sempre più stimolante.
            </p>
        </div>
    </div>
</div>
<hr class="featurette-divider">

{{-- citazione socrate --}}
<div class="container-fluid">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Il nostro motto. <br><span class="text-muted">Uno spunto dal passato.</span></h2>
            <p class="lead">Nessun uomo ha il diritto di essere un dilettante in materia di preparazione fisica. E' una vergogna per
                un uomo invecchiare senza vedere la bellezza e la forza di cui il suo corpo è capace. <br>-Socrate
            </p>
        </div>
        <div class="col-md-5">
            <img src="{{asset('images/socrate.png')}}" class="img-fluid float-end" width="500" height="500">
        </div>
    </div>
    
</div>

@endsection