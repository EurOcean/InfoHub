@extends('layouts.app')

@section('content')
    <div class="relative z-10 bg-gray-50 overflow-hidden min-h-screen flex items-center justify-center">
        <div class="absolute w-full h-screen bg-gradient top-0 right-0 bottom-0 left-0 z-10 animate__animated animate__fadeOut animate__delay-1s"></div>
        <div class="text-center space-y-2 z-10">
            <div class="animate__animated animate__zoomIn animate__delay-1s mb-12">
                <img class="w-56 m-auto" src="{{ asset('images/under_constrution/eurOcean-logo-color.png') }}" alt="logo eurocean">
            </div>
            <p class="font-black text-gray-600 font-avenir-bold text-xl animate__animated animate__zoomIn animate__delay-1s">EurOcean Ocean Infohub API</p>
            <p class="font-thim text-sm text-gray-600 animate__animated animate__zoomIn animate__delay-1s">alpha v.0.3</p>
        </div>
    </div>
@endsection
