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
                        {{ __('Documentation Login') }}
                    </h4>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="text-sm text-gray-600 mb-2">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="w-full bg-gray-100 p-2 rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="text-red-500 text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="text-sm text-gray-600 mb-2">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="w-full bg-gray-100 p-2 rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="block md:flex md:justify-between space-y-2 md:space-y-0">
                        <div class="">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="text-sm text-gray-600" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        {{-- <div>
                            @if (Route::has('password.request'))
                                <a class="text-primary-blue text-sm" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div> --}}
                    </div>
                    <div class="w-full mt-8">
                        <button type="submit" class="w-full bg-primary-blue px-8 py-2 text-center text-white text-sm uppercase rounded font-bold rounded shadow text-xs">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
                <a href="{{ url('/') }}">
                    <div class="w-full bg-primary-green mt-2 px-8 py-2 text-center text-white text-sm uppercase rounded font-bold rounded shadow text-xs">
                        Back
                    </div>
                </a>
                <div class="w-full text-center mt-4">
                    <p class="text-sm">
                        To request access send us an e-mail:
                        <a class="text-primary-blue" href="mailto:info@eurocean.org" target="_blank">
                            {{ __('info@eurocean.org') }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
