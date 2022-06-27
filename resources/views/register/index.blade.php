@extends('layouts.master')

@section('title')
Sign up
@endsection

@section('content')
<div class="container-fluid">
    <div class="row py-2">
        <p class="h1 text-center">Registrati</p>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-8 py-1">
            <form method="POST" action="{{route('register.store')}}" id="formRegistration">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                        id="floatingUsername" placeholder="username" name="username" value="{{old('username')}}">
                    <label for="floatingUsername">Username</label>

                    <div id="validationServerUsernameFeedback" class="text-danger">
                        @error('username')
                        {{$message}}
                        @enderror
                    </div>

                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>

                    <div id="validationServerPasswordFeedback" class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </div>

                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPasswordConfirmation" placeholder="Password"
                        name="password_confirmation">
                    <label for="floatingPasswordConfirmation">Conferma password</label>
                    <div id="validationServerPasswordConfirmFeedback" class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-text mb-2">
                    Your password must be min 8 letter password, with upper and lower case letters
                    and a number
                </div>
                <div class="row pt-2 px-2"><button type="submit" class="btn btn-outline-light border-secondary" style="color: #ce6324"
                        id="registrationSubmit">Registrati</button></div>
            </form>
        </div>
    </div>
    <script src="{{asset("js/registration.js")}}"></script>
</div>
@endsection