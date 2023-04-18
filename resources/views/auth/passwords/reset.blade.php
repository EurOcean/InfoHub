@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 flex items-center justify-center min-h-screen">
        <div class="w-1/5 m-auto relative">
            <div class="mb-8">
                <a href="/">
                    <img class="w-48 m-auto block" src="{{ asset('images/under_constrution/eurOcean-logo-color.png') }}" alt="logo eurocean">
                </a>
            </div>
            <div class="bg-white rounded px-4 py-4">
                <div class="mb-8">
                    <h4 class="text-center mb-0 text-gray-600">
                        {{ __('Reset Password') }}
                    </h4>
                </div>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="w-full bg-gray-100 p-2 rounded @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="w-full bg-gray-100 p-2 rounded @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="w-full bg-gray-100 p-2 rounded" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="w-full bg-primary-blue px-8 py-2 text-center text-white text-sm uppercase rounded font-bold rounded shadow text-xs">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
