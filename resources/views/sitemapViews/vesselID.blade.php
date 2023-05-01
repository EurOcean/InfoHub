@extends('layouts.app')

@section('content')
<main class="flex">
    <div class="flex justify-end px-20 md:w-full">
        <div class="w-full md:py-14">
            <p class="text-sm text-primary-green mb-1">Data</p>
            <div class="w-full h-px bg-gray-200 my-2"></div>
            <div class="flex items-center space-x-2 my-8">
                <div class="flex items-center flex-grow space-x-2 mb-4">
                    <div><a class="text-primary-blue" href="{{ url('vessels') }}"><strong>Vessels list</strong></a></div>
                    <div><img class="w-3 opacity-50" src="{{ asset('images/icons/double-right.svg') }}" alt=""></div>
                    <div><p class="text-primary-blue capitalize"><strong>{{ $vessel->name_infrastructure }}</strong></p></div>
                </div>
                <div><a class="bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase" href="{{ url('api/v1/vessel') }}/{{ $vessel->id_infrastructure }}" target="_blank"><strong>json</strong></a></div>
                {{-- <div><a class="bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase" href="{{ url('sitemap/vessel') }}/{{ $vessel->id }}" target="_blank"><strong>xml</strong></a></div> --}}
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                @if (session('status'))
                    <div class="bg-green-200 text-green-800 w-full text-center py-4 font-bold">
                        {{ session('status') }}
                    </div>
                @endif
                <div>
                    <dl>
                        {{-- <div class="bg-gray-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Organization:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <div>
                                    {{$vessel->institution_name}}
                                </div>
                            </dd>
                        </div> --}}
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Name:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vessel->name_infrastructure }}</dd>
                        </div>

                        <div class="bg-gray-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Country:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vessel->country_name }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Category:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vessel->category }}</dd>
                        </div>
                        <div class="bg-gray-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Year Built:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->year_built === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->year_built }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Year Last Refit:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->year_last_refit === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->year_last_refit }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Length:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->length === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->length }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Contact Person:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->contact_person === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->contact_person }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Address:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->address === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->address }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">URL Infrastructure:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->url_infrastructure === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <a target="_blank" class="text-blue-500 hover:text-blue-900" href="{{ $vessel->url_infrastructure }}">{!! $vessel->url_infrastructure !!}</a>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Location:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->location === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->location }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Services Offered:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->services_offered === '' || $vessel->services_offered === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {!! $vessel->services_offered !!}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Last Update:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->last_update === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ date('d/m/y', strtotime($vessel->last_update)) }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Ices Shipcode:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->ices_shipcode === '' || $vessel->ices_shipcode === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->ices_shipcode }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">MMSI:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->mmsi === '' || $vessel->mmsi === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->mmsi }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">IMO:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->imo === '' || $vessel->imo === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->imo }}
                                @endif
                            </dd>
                        </div>


                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Owners:</dt>
                        </div>
                        <div class="px-6 bg-white">
                            <table class="table-auto w-full mx-auto">
                                <thead class="bg-gray-100">
                                    <tr class="text-left">
                                        <th class="text-sm font-medium text-gray-500">Name</th>
                                        <th class="text-sm font-medium text-gray-500">Acronym</th>
                                        <th class="text-sm font-medium text-gray-500">Country</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm text-gray-900">
                                    @foreach ($owners as $owner)
                                    <tr class="border-b">
                                        <td class="px-4 py-2">
                                            @if ($owner->institution_name === '')
                                                <p class="text-gray-400">Not available</p>
                                            @else
                                                <a class="text-blue-500 hover:text-blue-900" href="/vessel-organization/{{$owner->id_institution}}">
                                                    {{ $owner->institution_name }}
                                                </a>
                                            @endif
                                        </td>
                                            <td>
                                            @if ($owner->acronym_inEnglish === '')
                                                <p class="text-gray-400">Not available</p>
                                            @else
                                                {{ $owner->acronym_inEnglish }}</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($owner->country_name === '')
                                                <p class="text-gray-400">Not available</p>
                                            @else
                                                {{ $owner->country_name }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500"></dt>
                        </div>


                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 mt-4">
                            <dt class="text-sm font-medium text-gray-500">Operators:</dt>
                        </div>
                        <div class="px-6 bg-gray-50">
                            <table class="table-auto w-full mx-auto">
                                <thead class="bg-gray-100">
                                    <tr class="text-left">
                                        <th class="text-sm font-medium text-gray-500">Name</th>
                                        <th class="text-sm font-medium text-gray-500">Acronym</th>
                                        <th class="text-sm font-medium text-gray-500">Country</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm text-gray-900">
                                    @foreach ($operators as $operator)
                                    <tr class="border-b">
                                        <td class="px-4 py-2">
                                            @if ($operator->institution_name === '')
                                                <p class="text-gray-400">Not available</p>
                                            @else
                                                <a class="text-blue-500 hover:text-blue-900" href="/vessel-organization/{{$operator->id_institution}}">
                                                    {{ $operator->institution_name }}
                                                </a>
                                            @endif
                                        </td>
                                            <td>
                                            @if ($operator->acronym_inEnglish === '')
                                                <p class="text-gray-400">Not available</p>
                                            @else
                                                {{ $operator->acronym_inEnglish }}</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($operator->country_name === '')
                                                <p class="text-gray-400">Not available</p>
                                            @else
                                                {{ $operator->country_name }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500"></dt>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
