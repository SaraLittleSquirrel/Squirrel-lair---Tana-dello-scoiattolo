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
        <form method="POST" action="{{route("login.login")}}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="username" name="username">
                <label for="floatingInput">Username</label>

                @error('username')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div id="validationServerPasswordFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror

            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Mantieni l'accesso</label>
            </div>

            <div class="row pt-2"><button type="submit" class="btn btn-primary btn-block">Accedi</button></div>
        </form>
    </div>
</div>
@endsection