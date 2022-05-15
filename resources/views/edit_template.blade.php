@extends('layouts.master')

@section('title')
Modifica scheda
@endsection

@section('content')
<div class="row py-2">
    <div class="col">
        <div class=" pb-1 h1 text-center d-flex justify-content-between align-items-center">
            <div class="container-fluid">
                Nome scheda
            </div>
        </div>

        <div class=" pb-1 text-center d-flex justify-content-evenly align-items-center">
            <a href="#">Aggiungi esercizio</a>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#renameModal">
                Rinomina Scheda
            </button>

            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#visibilityModal">
                Visibilità: pubblica
            </button>

        </div>
    </div>
</div>

<!-- Modal for rename -->

<div class="modal fade" id="renameModal" tabindex="-1" aria-labelledby="renameModalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalTitle" id="renameModalTitle">
                    Rinomina scheda
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="">
                <div class="modal-body">
                    <input type="text" class="form-control" id="name" name="name"/>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Rinomina
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal for visibility -->
<div class="modal fade" id="visibilityModal" tabindex="-1" aria-labelledby="visibilityModalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalTitle" id="visibilityModalTitle">
                    Cambia Visibilità
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="">
                <div class="modal-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="visibility" id="public" value="public">
                        <label class="form-check-label" for="public">
                            Pubblica (tutti gli altri utenti possono vedere la tua scheda)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="visibility" id="private" checked value="private">
                        <label class="form-check-label" for="private">
                            Privata (solo tu puoi vedere la tua scheda)
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Cambia Visibilità
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th scope="col" colspan="6" class="text-center fs-3 text-primary">
                        Giorno 1
                    </th>
                </tr>
                <tr>
                    <th scope="col">Esercizio</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Ripetizioni</th>
                    <th scope="col">Carico</th>
                    <th scope="col">Recupero</th>
                    <th scope="col">Progressione</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Squat bilanciere</td>
                    <td>4</td>
                    <td>3-5</td>
                    <td>80% RM</td>
                    <td>3'-5'</td>
                    <td>Wave</td>
                </tr>
                <tr>
                    <td>Stacchi rumeni</td>
                    <td>4</td>
                    <td>3-5</td>
                    <td>80% RM</td>
                    <td>3'-5'</td>
                    <td>Wave</td>
                </tr>
                <tr>
                    <td>Affondi</td>
                    <td>3</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
                <tr>
                    <td>Leg curl</td>
                    <td>3</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
                <tr>
                    <td>Calf pressa</td>
                    <td>5</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
            </tbody>

    </div>

    <div class="col">
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th scope="col" colspan="6" class="text-center fs-3 text-primary">
                        Giorno 1
                    </th>
                </tr>
                <tr>
                    <th scope="col">Esercizio</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Ripetizioni</th>
                    <th scope="col">Carico</th>
                    <th scope="col">Recupero</th>
                    <th scope="col">Progressione</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Squat bilanciere</td>
                    <td>4</td>
                    <td>3-5</td>
                    <td>80% RM</td>
                    <td>3'-5'</td>
                    <td>Wave</td>
                </tr>
                <tr>
                    <td>Stacchi rumeni</td>
                    <td>4</td>
                    <td>3-5</td>
                    <td>80% RM</td>
                    <td>3'-5'</td>
                    <td>Wave</td>
                </tr>
                <tr>
                    <td>Affondi</td>
                    <td>3</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
                <tr>
                    <td>Leg curl</td>
                    <td>3</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
                <tr>
                    <td>Calf pressa</td>
                    <td>5</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
            </tbody>

    </div>

    <div class="col">
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th scope="col" colspan="6" class="text-center fs-3 text-primary">
                        Giorno 2
                    </th>
                </tr>
                <tr>
                    <th scope="col">Esercizio</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Ripetizioni</th>
                    <th scope="col">Carico</th>
                    <th scope="col">Recupero</th>
                    <th scope="col">Progressione</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Panca piana</td>
                    <td>4</td>
                    <td>3-5</td>
                    <td>80% RM</td>
                    <td>3'-5'</td>
                    <td>Wave</td>
                </tr>
                <tr>
                    <td>Rematore bilanciere</td>
                    <td>4</td>
                    <td>4-6</td>
                    <td>80% RM</td>
                    <td>3'-5'</td>
                    <td>Wave</td>
                </tr>
                <tr>
                    <td>Lento avanti bilanciere</td>
                    <td>3</td>
                    <td>5-7</td>
                    <td>70% RM</td>
                    <td>2'-3'</td>
                    <td>Wave</td>
                </tr>
                <tr>
                    <td>Lat machine</td>
                    <td>3</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
                <tr>
                    <td>Curl bilanciere</td>
                    <td>3</td>
                    <td>8-12</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
                <tr>
                    <td>Skullcrusher</td>
                    <td>3</td>
                    <td>8-12</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
            </tbody>

    </div>

    <div class="col">
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th scope="col" colspan="6" class="text-center fs-3 text-primary">
                        Giorno 1
                    </th>
                </tr>
                <tr>
                    <th scope="col">Esercizio</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Ripetizioni</th>
                    <th scope="col">Carico</th>
                    <th scope="col">Recupero</th>
                    <th scope="col">Progressione</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Squat bilanciere</td>
                    <td>4</td>
                    <td>3-5</td>
                    <td>80% RM</td>
                    <td>3'-5'</td>
                    <td>Wave</td>
                </tr>
                <tr>
                    <td>Stacchi rumeni</td>
                    <td>4</td>
                    <td>3-5</td>
                    <td>80% RM</td>
                    <td>3'-5'</td>
                    <td>Wave</td>
                </tr>
                <tr>
                    <td>Affondi</td>
                    <td>3</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
                <tr>
                    <td>Leg curl</td>
                    <td>3</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
                <tr>
                    <td>Calf pressa</td>
                    <td>5</td>
                    <td>6-8</td>
                    <td>8 RPE</td>
                    <td>2'-3'</td>
                    <td>Doppia</td>
                </tr>
            </tbody>

    </div>
</div>
@endsection