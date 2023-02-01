@extends('layouts.master')

@section('title')
Scheda
@endsection

@section('content')
@php
use Illuminate\Support\Facades\DB;
use App\Models\ExcerciseType;
@endphp
{{-- intestazione nome scheda + tasti --}}
<div class="row py-2">
    <div class="col">
        <div class="container-fluid pb-1 h1 text-center">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4"></div>
                {{-- nome scheda --}}
                <div class="col-lg-4 col-md-4 text-center" id="title_table">
                    {{$template->name}}
                </div>
                {{-- tasti --}}
                <div class="col-lg-4 col-md-4">
                    <div class="d-flex justify-content-md-end justify-content-center">
                        {{-- download --}}
                        <div class="p-3">
                            <button class="btn btn-light border-secondary" onclick="download()"><i class="bi bi-download"></i></button>
                        </div>
                        @if ($is_owner)
                        {{-- aggiungi esercizio ed elimina --}}
                        <div class="p-3">
                            <a class="btn btn-light border-secondary @if(auth()->user()->excerciseTypes->isEmpty()) disabled @endif " href="{{route('user.templates.excercises.create',
                            ['user' => auth()->user(), 'template'=>$template])}}"><i class="bi bi-plus-lg"></i></a>
                        </div>
                        <div class="p-3">
                            <a class="btn btn-light border-secondary" href="{{route("template.confirmDelete",
                                ['user'=>auth()->user(),'template'=>$template])}}" ><i class="bi bi-trash3"></i></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@unless ($template->excercises->isEmpty())
{{-- tabella giorno-esercizi --}}
<div class="row d-flex justify-content-center">

    @foreach(DB::table('excercises')->select('day')->where('template_id', $template->id)->distinct()->orderBy('day',
    'asc')->get() as $day)
    @php
    $day = $day->day
    @endphp
    <div class="col-lg-8 col-md-10 col-sm-11">
        <div class="table-responsive-lg">
            <div class="col">
                    <table class="table table-bordered" id="table_day_{{$day}}">
                        <thead>
                            <tr>
                                <th scope="col" colspan="6" class="text-center fs-3" style="color:#ce6324">
                                    Giorno {{$day}}
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
                            @foreach($template->excercises->where('day',$day) as $excercise)
                            <tr>
                                @if ($is_owner)
                                <td><a href="{{route('user.templates.excercises.edit',['user'=>auth()->user(),'template'=>$template,'excercise'=>$excercise])}}" class="link-dark">{{ExcerciseType::find($excercise->excercise_type_id)->name}}</a></td>
                                @else
                                <td>{{ExcerciseType::find($excercise->excercise_type_id)->name}}</td> 
                                @endif
                                <td>{{$excercise->sets}}</td>
                                <td>{{$excercise->rep_min}} - {{$excercise->rep_max}}</td>
                                <td>{{$excercise->load}} {{$excercise->load_type}}</td>
                                <td>
                                    @if ($excercise->recovery_min != null)
                                    {{$excercise->recovery_min}}'' - {{$excercise->recovery_max}}''
                                    @endif
                                </td>
                                <td>{{$excercise->progression}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    @endforeach

</div>

{{-- se non ci sono esercizi nella scheda --}}
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