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
                    {{ __('Confirm Password') }}
                </h4>
            </div>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="w-full bg-gray-100 p-2 rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="text-red-500 text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="w-full bg-primary-blue px-8 py-2 font-bold text-center text-white text-sm uppercase rounded">
                            {{ __('Confirm Password') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
