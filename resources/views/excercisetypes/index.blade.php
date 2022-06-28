@extends('layouts.master')

@section('title')
I miei esercizi
@endsection

@section('content')
{{-- "i miei esercizi" --}}
<div class="row py-2">
    <p class="h1 text-center">I miei esercizi</p>
</div>
{{-- tabella con tutti gli esercizi --}}
@unless ($excercisetypes->isEmpty())
<div class="row">
    <div class="col">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="table-responsive-lg">
                        <table class="table table-striped align-middle">
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
                                @php
                                $count=$excercisetypes->perPage() * ($excercisetypes->currentPage() - 1) + 1;
                                @endphp
                                @foreach ($excercisetypes as $excercisetype)
                                <tr>
                                    <th scope="row">{{$count++}}</th>
                                    <td>{{$excercisetype->name}}</td>
                                    <td>{{$excercisetype->equipment}}</td>
                                    <td>{{$excercisetype->trained_body_part }}</td>
                                    <td>
                                        <a href={{route("excercisetype.confirmDelete", ['user'=>auth()->user(),'excercisetype'=>$excercisetype])}} class="btn btn-link link-dark py-0">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- navbar per andare da una pagina all'altra --}}
<nav aria-label="Page navigation" class="d-flex justify-content-center">
    <ul class="pagination">
      <li class="page-item @if ($excercisetypes->onFirstPage())
          disabled
      @endif"><a class="page-link" style="color:#ce6324" href="{{$excercisetypes->previousPageUrl()}}">Previous</a></li>
      <li class="page-item"><span class="page-link" style="color:#ce6324">Page {{$excercisetypes->currentPage()}}</span></li>
      <li class="page-item"><a class="page-link" style="color:#ce6324" href="{{$excercisetypes->nextPageUrl()}}">Next</a></li>
    </ul>
</nav>

{{-- se non ci sono esercizi --}}
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