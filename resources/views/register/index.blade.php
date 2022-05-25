@extends('layouts.master')

@section('title')
Sign up
@endsection

@section('content')
<div class="row py-2">
    <p class="h1 text-center">Registrati</p>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-4 py-1">
        <form method="POST" action="{{route('register.store')}}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput"
                    placeholder="username" name="username" value="{{old('username')}}">
                <label for="floatingInput">Username</label>

                @error('username')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror

            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password"
                    name="password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div id="validationServerPasswordFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror

            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPasswordConfirmation" placeholder="Password"
                    name="password_confirmation">
                <label for="floatingPasswordConfirmation">Conferma password</label>
            </div>
            <div class="form-text mb-2">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces,
                special characters, or emoji.
            </div>
            <div class="row pt-2"><button type="submit" class="btn btn-primary btn-block">Registrati</button></div>
        </form>
    </div>
</div>
@endsection