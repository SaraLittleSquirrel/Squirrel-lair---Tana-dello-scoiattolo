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
<div class="row">
    <div class="col">
        <div class="table-responsive-lg">
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
                            <a href={{route("excercisetype.confirmDelete", ['user'=>auth()->user(),'excercisetype'=>$excercisetype])}} class="btn btn-link">
                                <img src="{{asset('images/icons/trash3.svg')}}" alt="delete">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<nav aria-label="Page navigation" class="d-flex justify-content-center">
    <ul class="pagination">
      <li class="page-item @if ($excercisetypes->onFirstPage())
          disabled
      @endif"><a class="page-link" href="{{$excercisetypes->previousPageUrl()}}">Previous</a></li>
      <li class="page-item active"><span class="page-link">Page {{$excercisetypes->currentPage()}}</span></li>
      <li class="page-item"><a class="page-link" href="{{$excercisetypes->nextPageUrl()}}">Next</a></li>
    </ul>
</nav>
@endsection