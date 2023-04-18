@extends('layouts.app')

@section('content')
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
                        {{ __('API Documentation Register') }}
                    </h4>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="text-sm text-gray-600 mb-2">{{ __('Name') }}</label>
                        <div>
                            <input id="name" type="text" class="w-full bg-gray-100 p-2 rounded @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="text-sm text-gray-600 mb-2">{{ __('Email Address') }}</label>
                        <div>
                            <input id="email" type="email" class="w-full bg-gray-100 p-2 rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="text-sm text-gray-600 mb-2">{{ __('Password') }}</label>
                        <div>
                            <input id="password" type="password" class="w-full bg-gray-100 p-2 rounded @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="password-confirm" class="text-sm text-gray-600 mb-2">{{ __('Confirm Password') }}</label>
                        <div>
                            <input id="password-confirm" type="password" class="w-full bg-gray-100 p-2 rounded" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div>
                        <div class="mt-4">
                            <button type="submit" class="w-full bg-primary-blue px-8 py-2 text-center text-white text-sm uppercase rounded">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
                <a href="{{ url('/') }}">
                    <div class="w-full bg-primary-green mt-2 px-8 py-2 text-center text-white text-sm uppercase rounded">
                        Back
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
