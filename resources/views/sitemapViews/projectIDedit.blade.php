@extends('layouts.app')

@section('content')
<main class="flex">
    <div class="flex justify-end px-20 md:w-full">
        <div class="w-full md:py-14">
            <p class="text-sm text-primary-green mb-1">Data</p>
            <div class="w-full h-px bg-gray-200 my-2"></div>
            <div class="flex items-center space-x-2 my-8">
                <div class="flex items-center flex-grow space-x-2 mb-4">
                    <div><a class="text-primary-blue" href="{{ url('projects') }}"><strong>Projects list</strong></a></div>
                    <div><img class="w-3 opacity-50" src="{{ asset('images/icons/double-right.svg') }}" alt=""></div>
                    <div><p class="text-primary-blue capitalize"><strong>{{ $rel_project_institutions->acronym }}</strong></p></div>
                </div>
                <div><a class="bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase" href="{{ url('api/v1/project') }}/{{ $project->id }}" target="_blank"><strong>json</strong></a></div>
                {{-- <div><a class="bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase" href="{{ url('sitemap/project') }}/{{ $project->id }}" target="_blank"><strong>xml</strong></a></div> --}}
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                @if (session('status'))
                    <div class="bg-green-200 text-green-800 w-full text-center py-4 font-bold">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Organization:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <div>
                                    {{$inst_name->name}}
                                </div>
                                <form action="{{ url('project/'.$project->id.'/edit') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div x-data="{ show: false }">
                                        <div  @click="show = !show" :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }" class="inline-block justify-end mt-2 bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase"><strong>Edit</strong></div>
                                        <div x-show="show" class="my-4">
                                            <select name="organization_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>{{$inst_name->name}}</option>
                                                @foreach ($organizationsSearch as $organization)
                                                    <option value={{$organization->id}}>{{$organization->name}}</option>
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
                        {{-- <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Project name:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->acronym === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->acronym }}
                                @endif
                            </dd>
                        </div> --}}
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Contract Number</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->contractNumber === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->contractNumber }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Acronym:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->acronym === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $rel_project_institutions->acronym }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Title:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->title === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->title }}
                                @endif
                            </dd>
                        </div>


                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Programme:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->name === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->name }}
                                @endif
                            </dd>
                        </div>



                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Project Funding</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->projectFunding === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ number_format($project->projectFunding, 2, ',', '.') }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Summary:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->summary === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {!! $project->summary !!}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Website:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                                @if ($project->webSite === 'Not available')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    <a target="_blank" class="text-blue-500 hover:text-blue-900" href="{{ $project->webSite }}">{{ $project->webSite }}</a>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Start Year:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->startYear === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->startYear }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">End Year:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->endYear === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->endYear }}
                                @endif
                            </dd>
                        </div>
                        {{-- <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">URL Final Report:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->contactPerson === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->url_finalReport }}
                                @endif
                            </dd>
                        </div> --}}
                        {{-- <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Information Source:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->informationSource === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->informationSource }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Online Status:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->onlineStatus === 'TRUE')
                                    <p class="mb-0 bg-green-200 rounded-full px-4 py-1 text-center text-green-800 inline-block">Publish</p>
                                @else
                                    <p class="mb-0 bg-red-200 rounded-full px-4 py-1 text-center text-red-800 inline-block">Not Publish</p>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Admin Notes:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->adminNotes === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {!! $project->adminNotes !!}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Created:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->created === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ date('d/m/y', strtotime($project->created)) }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Last Update:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->lastUpdt === '')
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {!!  date('d/m/y', strtotime($project->lastUpdt)) !!}
                                @endif
                            </dd>
                        </div> --}}
                        {{-- <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Contact Person:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->contactPerson === null)
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->contactPerson }}
                                @endif
                            </dd>
                        </div> --}}
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Coordinator Name:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($rel_project_institutions->name === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $rel_project_institutions->name }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Coordinator Institution:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->coordinatorEmail === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->coordinatorEmail }}
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Coordinator Country:</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                @if ($project->coordinatorEmail === '' )
                                    <p class="text-gray-400">Not available</p>
                                @else
                                    {{ $project->coordinatorEmail }}
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
