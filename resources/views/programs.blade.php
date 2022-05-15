@extends('layouts.master')

@section('title')
Le mie schede
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">Le mie schede</p>
</div>
<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Giorni</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Visibilità</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><a href="#" class="link-dark">Full body</a></td>
                    <td>3</td>
                    <td>scheda full body 3 giorni</td>
                    <td>pubblica</td>
                    <td><a href="#"><img src="images/icons/trash3.svg" alt="delete" /></a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><a href="#" class="link-dark">Upper lower</a></td>
                    <td>4</td>
                    <td>scheda upper lower 4 giorni</td>
                    <td>privata</td>
                    <td><a href="#"><img src="images/icons/trash3.svg" alt="delete" /></a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><a href="#" class="link-dark">Push pull legs</a></td>
                    <td>6</td>
                    <td>scheda push pull legs giorni</td>
                    <td>pubblica</td>
                    <td><a href="#"><img src="images/icons/trash3.svg" alt="delete" /></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection