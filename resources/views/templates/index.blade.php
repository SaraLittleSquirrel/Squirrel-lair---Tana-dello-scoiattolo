@extends('layouts.master')

@section('title')
Le mie schede
@endsection

@section('content')
@php
use Illuminate\Support\Facades\DB;
@endphp
{{-- "le schede di nome_utente" --}}
<div class="row py-2">
    <p class="h1 text-center">Le schede di {{ $user->username }} </p>
</div>
{{-- tabella con tutte le schede --}}
@unless ($templates->isEmpty())
<div class="row">
    <div class="col">
        <div class="table-responsive-lg">
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
                    @php
                    $count=$templates->perPage() * ($templates->currentPage() - 1) + 1;;
                    @endphp
                    @foreach ($templates as $template)
                    <tr>
                        <th scope="row">{{$count++}}</th>
                        <td><a href="{{route('user.templates.show', ['user' => auth()->user(), 'template'=>$template])}}"
                                class="link-dark">{{$template->name}}</a></td>
                        <td>{{DB::table('excercises')->select('day')->where('template_id',
                            $template->id)->distinct()->get()->count()}}</td>
                        <td>{{$template->description}}</td>
                        <td>{{$template->is_public? 'pubblica':'privata'}}</td>
                        <td><a href={{route("template.confirmDelete",
                                ['user'=>auth()->user(),'template'=>$template])}} class="link-dark"><i class="bi bi-trash3"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- navbar per andare da una pagina all'altra --}}
<nav aria-label="Page navigation" class="d-flex justify-content-center">
    <ul class="pagination">
        <li class="page-item @if ($templates->onFirstPage())
          disabled
      @endif"><a class="page-link" style="color:#ce6324" href="{{$templates->previousPageUrl()}}">Previous</a></li>
        <li class="page-item"><span class="page-link" style="color:#ce6324">Page {{$templates->currentPage()}}</span>
        </li>
        <li class="page-item"><a class="page-link" style="color:#ce6324" href="{{$templates->nextPageUrl()}}">Next</a>
        </li>
    </ul>
</nav>

{{-- se non ci sono schede salvate --}}
@else
<div class="container">
    <div class="row h2">
        <div class="col my-3 text-center text-secondary">
            wow, com'è vuoooto!
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <img src="{{asset('images/doge.png')}}" width="100" height="100" alt="">
        </div>
    </div>
</div>
@endunless


@endsection