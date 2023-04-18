@extends('layouts.app')

<div class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="max-w-sm m-auto relative">
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
                @if (session('status'))
                    <div class="alert alert-success text-green-800 bg-green-100 px-8 py-2 mb-2 text-sm border-1 border-green-300" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="text-sm text-gray-600 mb-2">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="w-full bg-gray-100 p-2 rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="text-red-500 text-xs mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-0">
                        <button type="submit" class="w-full bg-primary-blue px-8 py-2 font-bold text-center text-white text-sm uppercase rounded">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
                <a href="{{ url('/') }}">
                    <div class="w-full bg-primary-green px-8 py-2 text-center text-white text-sm uppercase rounded font-bold rounded shadow text-xs">
                        {{ __('Back') }}
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

