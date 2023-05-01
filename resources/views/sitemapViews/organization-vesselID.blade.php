@extends('layouts.app')

@section('content')
<main class="flex">
    <div class="flex justify-end px-20 md:w-full">
        <div class="w-full md:py-14">
            <p class="text-sm text-primary-green mb-1">Data</p>
            <div class="w-full h-px bg-gray-200 my-2"></div>
            <div class="flex items-center space-x-2 my-8">
                <div class="flex items-center flex-grow space-x-2 mb-4">
                    <div><a class="text-primary-blue" href="{{ url('organizations') }}"><strong>Organization</strong></a></div>
                    <div><img class="w-3 opacity-50" src="{{ asset('images/icons/double-right.svg') }}" alt=""></div>
                    <div><p class="text-primary-blue capitalize mb-0"><strong>{{ $vessel_organizations->institution_name }}</strong></p></div>
                </div>
                {{-- <div><a class="bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase" href="{{ url('api/v1/organization') }}/{{ $organization->id }}" target="_blank"><strong>json</strong></a></div> --}}
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div>
                    <dl>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Organization Pic Number:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->picNumber === null || $vessel_organizations->picNumber === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="capitalize">{{ $vessel_organizations->picNumber }}</p>
                                @endif
                            </dd>
                        </div>

                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Organization Name:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->institution_name === null || $vessel_organizations->institution_name === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="capitalize">{{ $vessel_organizations->institution_name }}</p>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Vat Number:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->vatNumber === null || $vessel_organizations->vatNumber === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="capitalize">{{ $vessel_organizations->vatNumber }}</p>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">shortName:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->acronym_inEnglish === null || $vessel_organizations->acronym_inEnglish === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="capitalize">{{ $vessel_organizations->acronym_inEnglish }}</p>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Activity Type:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->activityType === null || $vessel_organizations->activityType === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="capitalize">{{ $vessel_organizations->activityType }}</p>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Street:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->street === null || $vessel_organizations->street === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="capitalize">{{ $vessel_organizations->street }}</p>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">City:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->city === null || $vessel_organizations->city === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="capitalize">{{ $vessel_organizations->city }}</p>
                                @endif
                            </dd>
                        </div>
                        
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Post Code:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->postCode === null || $vessel_organizations->postCode === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="capitalize">{{ $vessel_organizations->postCode }}</p>
                                @endif
                            </dd>
                        </div>
                        
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Country:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->country_name === null || $vessel_organizations->country_name === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                @endif
                                <p class="capitalize">{{ $vessel_organizations->country_name }}</p>
                            </dd>
                        </div>
                        
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Geolocation:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->geolocation === null || $vessel_organizations->geolocation === ''  )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="capitalize">{{ $vessel_organizations->geolocation }}</p>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Organization URL:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ( $vessel_organizations->website === null || $vessel_organizations->website === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <p class="lowercase text-blue-600"><a target="_blank" href={{ url($vessel_organizations->website) }}>{{ $vessel_organizations->website }}</a></p>
                                @endif
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection