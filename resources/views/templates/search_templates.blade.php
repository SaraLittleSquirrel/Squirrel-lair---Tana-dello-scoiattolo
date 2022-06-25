@extends('layouts.master')

@section('title')
Cerca Schede
@endsection

@section('content')
@php
use Illuminate\Support\Facades\DB;
@endphp
{{-- "le schede degli altri scoiattolini"  + barra di ricerca--}}
<div class="row py-2 d-flex justify-content-center">
    <div class="col-lg-6 col-md-8">
        <form action="{{route('search')}}" id="formTempSearch">
            <div class="input-group">
                <input type="search" class="form-control" id="search" name="search" placeholder="Cerca schede" value="{{request()->search}}">
                <button type="submit" id="searchSubmit" class="btn btn-outline-primary"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
    <div class="col-12 h1 text-center mt-3">Le schede dal mondo</div>
</div>
{{-- tabella con tutte le schede --}}
<div class="row d-flex justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-11">
        <div class="table-responsive-lg">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Proprietario</th>
                        <th scope="col">Giorni</th>
                        <th scope="col">Descrizione</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($templates as $template)
                    <tr>
                        <td><a href="{{route('user.templates.show', ['user' => $template->user, 'template'=>$template])}}"
                                class="link-dark">{{$template->name}}</a></td>
                        <td>{{$template->user->username}}</td>        
                        <td>{{DB::table('excercises')->select('day')->where('template_id',
                            $template->id)->distinct()->get()->count()}}</td>
                        <td>{{$template->description}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- frecce per cambiare pagina --}}
<nav aria-label="Page navigation" class="d-flex justify-content-center">
    <ul class="pagination">
      <li class="page-item @if ($templates->onFirstPage())
          disabled
      @endif"><a class="page-link" href="{{$templates->previousPageUrl()}}">Previous</a></li>
      <li class="page-item active"><span class="page-link">Page {{$templates->currentPage()}}</span></li>
      <li class="page-item"><a class="page-link" href="{{$templates->nextPageUrl()}}">Next</a></li>
    </ul>
</nav>

<script src="{{asset("js/searchtemplate.js")}}"></script>
@endsection