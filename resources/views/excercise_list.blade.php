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
                <tr>
                    <th scope="row">1</th>
                    <td>Plank</td>
                    <td>Nessuna</td>
                    <td>Addome</td>
                    
                    <td><a href="#"><img src="images/icons/trash3.svg" alt="delete" /></a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Curl</td>
                    <td>Bilanciere</td>
                    <td>Bicipiti</td>
                    
                    <td><a href="#"><img src="images/icons/trash3.svg" alt="delete" /></a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Panca piana</td>
                    <td>Bilanciere, panca</td>
                    <td>Petto</td>
                    
                    <td><a href="#"><img src="images/icons/trash3.svg" alt="delete" /></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection