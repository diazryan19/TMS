@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-5">
            <div class="card" >
                <div class="card-header" style=" background-color: #0d1a80; color:white">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}
                            <center>
                                {{-- <div class="col-md-6"> --}}
                                    <input id="email" style="width: 65%" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                {{-- </div> --}}
                            </center>
                            </div>

                        <div class="row mb-3">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}
                            <center>
                                {{-- <div class="col-md-6"> --}}
                                    <input id="password" style="width: 65%" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                {{-- </div> --}}
                            </center>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}
                            <center>
                            {{-- <div class="col-md-6"> --}}
                                <input id="password-confirm" style="width: 65%" placeholder=" Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            {{-- </div> --}}
                            </center>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary bp">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
