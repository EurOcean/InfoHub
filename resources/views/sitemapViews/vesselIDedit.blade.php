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
                <div><a class="bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase" href="{{ url('api/v1/vessel') }}/{{ $vessel->id }}" target="_blank"><strong>json</strong></a></div>
                {{-- <div><a class="bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase" href="{{ url('sitemap/vessel') }}/{{ $vessel->id }}" target="_blank"><strong>xml</strong></a></div> --}}
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-8 sm:px-6">
                    <h3 class="text-sm leading-6 font-medium text-gray-900">Vessel: {{ $vessel->name_infrastructure }}</h3>
                </div>
                @if (session('status'))
                    <div class="bg-green-200 text-green-800 w-full text-center py-4 font-bold">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="border-t border-gray-200">
                    EDIT
                    <dl>
                        <div class="bg-gray-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Organization:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <div>
                                    {{$institution->institution_name}}
                                </div>
                                <form action="{{ url('vessel/'.$vessel->id.'/edit') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div x-data="{ show: false }">
                                        <div  @click="show = !show" :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }" class="inline-block justify-end mt-2 bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase"><strong>Edit</strong></div>
                                        <div x-show="show" class="my-4">
                                            <select name="organization_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>{{$institution->name_infrastructure}}</option>
                                                @foreach ($organizationsSearch as $organization)
                                                    <option value={{$organization->id_institution}}>{{$organization->name_infrastructure}}</option>
                                                    <option value="{{ $organization->id_institution }}" @if($organization->id_institution == $organization->name_infrastructure) selected @endif>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit">
                                                <div class="inline-flex justify-end mt-2 bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase"><strong>Save</strong></div>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </dd>
                        </div>

                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Name:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vessel->name_infrastructure }}</dd>
                        </div>
                        {{-- <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Type:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->type === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->type }}
                                @endif
                            </dd>
                        </div> --}}

                        <div class="bg-gray-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Country:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $country->name }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Category:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vessel->id_category }}</dd>
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
                        {{-- <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Max Operating Depth:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->max_operating_depth === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->max_operating_depth }}
                                @endif
                            </dd>
                        </div> --}}
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
                        {{-- <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">E-mail:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->email === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->email }}
                                @endif
                            </dd>
                        </div> --}}
                        {{-- <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Phone:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->phone === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <a class="text-blue-500 hover:text-blue-900" href="tel:{{ $vessel->phone }}">{{ $vessel->phone }}</a>
                                @endif
                            </dd>
                        </div> --}}
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
                        {{-- <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Access Conditions:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->access_conditions === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {!! $vessel->access_conditions !!}
                                @endif
                            </dd>
                        </div> --}}
                        {{-- <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Data Examples:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->data_examples === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->data_examples }}
                                @endif
                            </dd>
                        </div> --}}
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
                        {{-- <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">X:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->x === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->x }}
                                @endif
                            </dd>
                        </div> --}}
                        {{-- <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Y:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($vessel->y === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $vessel->y }}
                                @endif
                            </dd>
                        </div> --}}
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
                            <dt class="text-sm font-medium text-gray-500">Status:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($institution->status === null)
                                    <p class="text-gray-400">Not available</p>
                                @endif

                                @if ($institution->status === 'Operator')
                                    {{ $institution->status }}
                                @endif
                                @if ($institution->status === 'Owner')
                                    {{ $institution->status }}
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
