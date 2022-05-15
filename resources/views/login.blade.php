@extends('layouts.master')

@section('title')
Login
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">Accedi</p>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-4 py-1">
        <form>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>

            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Mantieni l'accesso</label>
            </div>

            <div class="row pt-2"><button type="submit" class="btn btn-primary btn-block">Accedi</button></div>
        </form>
    </div>
</div>
@endsection