@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="container m-auto">
            <div class="w-full min-h-screen md:px-32 md:py-14">
                <div class="mb-8">
                    <h2 class="text-xl text-primary-blue">Project Structure JSON+LD</h2>
                    <div class="w-full h-px bg-gray-200 my-4"></div>
                    <p class="mb-4 text-gray-600">Online repository of marine research projects.</p>
                </div>
                <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'json+ld' }" id="tab_wrapper">
                    <!-- The tabs navigation -->
                    <nav class="space-x-6 uppercase font-bold text-primary-blue header-tabs">
                        <a :class="{ 'border-b border-b-2 border-teal-400': tab === 'json+ld' }" @click.prevent="tab = 'json+ld'; window.location.hash = 'json+ld'" href="#">json+ld</a>
                        <a :class="{ 'border-b border-b-2 border-teal-400 ': tab === 'structure' }" @click.prevent="tab = 'structure'; window.location.hash = 'structure'" href="#">structure</a>
                    </nav>
                    <!-- The tabs content -->
                    <div x-show="tab === 'json+ld'">
                        <p class="text-gray-600 my-4">JSON Example:</p>
                        <pre>
                            <code class="language-js text-xs w-full relative overflow-x-scroll">
        {
            "@context": {
                "@vocab": "https://schema.org/"
            },
            "id": 1,
            "@type": "Project",
            "@id": "https://cordis.europa.eu/project/rcn/195087_en.html",
            "contractNumber": "655283",
            "acronym": null,
            "title": "3D Full Waveform Inversion on seismic data at the East Pacific Rise",
            "programmeID": "H2020",
            "projectFunding": "173076.00",
            "summary": "The mid-ocean ridge system is the longest ...",
            "webSite": "Not available",
            "startYear": 2015,
            "endYear": 2017,
            "coordinator": [
                {
                    "name": 'XXXX',
                    "acronym": 'XXXX',
                    "country": 'XXXXX'
                }
            ],
            "partners": [
                {
                    "name": 'XXXX',
                    "acronym": 'XXXX',
                    "country": 'XXXXX'
                }
            ]
        }
    }</code>
                        </pre>
                    </div>
                    <div class="mt-4" x-show="tab === 'structure'">
                        <div class="divide-y divide-slate-200">
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm text-sm"><p>@type</p></div>
                                <div class="w-full md:w-1/3 text-indigo-500"><p class="font-bold">Project</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">&nbsp;</p></div>
                            </div>
                             <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>@id</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>contractNumber</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>acronym</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>title</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>programme</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">INT</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>projectFunding</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">DECIMAL 15,2</p></div>
                            </div>
                            <div class="bg-white p-2 flex">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>summary</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">LONGTEXT</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>webSite</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>startYear</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">date</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>endYear</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">date</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-green-500 px-2 font-bold text-sm"><p>coordinator</p></div>
                                <div class="w-full md:w-1/3"><p class="italis">array</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">&nbsp;</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center pl-10">
                                <div class="w-full md:w-1/3 border-l-4 border-green-500 px-2 font-bold text-sm"><p>name</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center pl-10">
                                <div class="w-full md:w-1/3 border-l-4 border-green-500 px-2 font-bold text-sm"><p>acronym</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center pl-10">
                                <div class="w-full md:w-1/3 border-l-4 border-green-500 px-2 font-bold text-sm"><p>country</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-orange-500 px-2 font-bold text-sm"><p>partners</p></div>
                                <div class="w-full md:w-1/3"><p class="italis">array</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">&nbsp;</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center pl-10">
                                <div class="w-full md:w-1/3 border-l-4 border-orange-500 px-2 font-bold text-sm"><p>name</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center pl-10">
                                <div class="w-full md:w-1/3 border-l-4 border-orange-500 px-2 font-bold text-sm"><p>acronym</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center pl-10">
                                <div class="w-full md:w-1/3 border-l-4 border-orange-500 px-2 font-bold text-sm"><p>country</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
