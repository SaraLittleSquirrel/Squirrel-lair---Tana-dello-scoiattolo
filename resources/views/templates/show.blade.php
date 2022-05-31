@extends('layouts.master')

@section('title')
Scheda
@endsection

@section('content')
@php
use Illuminate\Support\Facades\DB;
use App\Models\ExcerciseType;
@endphp

<div class="row py-2">
    <div class="col">
        <div class=" pb-1 h1 text-center d-flex justify-content-between align-items-center">
            <div class="container-fluid"></div>

            <div class="container-fluid">
                {{$template->name}}
            </div>

            <div class="container-fluid">
                <div class="d-flex justify-content-end">
                    <div class="p-3">
                        <a href="#"><img src="{{asset('images/icons/download.svg')}}" alt=""></a>
                    </div>
                    <div class="p-3">
                        <a href="#"><img src="{{asset('images/icons/pencil-square.svg')}}" alt=""></a>
                    </div>
                    <div class="p-3">
                        <a href="#"><img src="{{asset('images/icons/trash3.svg')}}" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    @foreach(DB::table('excercises')->select('day')->where('template_id', $template->id)->distinct()->orderBy('day',
    'asc')->get() as $day)
    @php
        $day = $day->day
    @endphp
    <div class="col"> 
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th scope="col" colspan="6" class="text-center fs-3 text-primary">
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
                    <td>{{ExcerciseType::find($excercise->excercise_type_id)->name}}</td>
                    <td>{{$excercise->sets}}</td>
                    <td>{{$excercise->rep_min}} - {{$excercise->rep_max}}</td>
                    <td>{{$excercise->load}} {{$excercise->load_type}}</td>
                    <td>{{$excercise->recovery_min}}' - {{$excercise->recovery_max}}'</td>
                    <td>{{$excercise->progression}}</td>
                </tr>
                @endforeach


            </tbody>

    </div>
    @endforeach

</div>
@endsection