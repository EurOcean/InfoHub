@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="container m-auto">
            <div class="w-full min-h-screen md:px-32 md:py-14">
                <div class="mb-4">
                    <h2 class="text-xl text-primary-blue">API Documentation</h2>
                    <div class="w-full h-px bg-gray-200 my-4"></div>
                    {{-- <p class="mb-8 text-gray-600">Sunt id ex nostrud nisi. Incididunt exercitation consequat laborum irure incididunt consectetur reprehenderit quis laboris enim quis sunt consequat sunt. Laborum ex veniam non elit esse sit in nisi reprehenderit ipsum ex. Lorem minim in dolor sit elit exercitation eu. Amet anim officia duis non ut nostrud minim. Exercitation tempor aliquip nulla esse cupidatat magna et reprehenderit quis eiusmod ad commodo. Ipsum mollit veniam duis cillum eu.</p> --}}
                    <div>
                        <a class="bg-primary-green px-8 py-2 text-white font-bold rounded shadow" href="{{ url('api/docs') }}" target="_blank">Let's start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
