@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="container m-auto">
            <div class="w-full min-h-screen md:px-32 md:py-14">
                <div class="mb-4">
                    <h2 class="text-xl text-primary-blue">Vessels Structure JSON+LD</h2>
                    <div class="w-full h-px bg-gray-200 my-4"></div>
                    <p class="mb-4 text-gray-600">Online repository of marine research vessels.</p>
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
                            <code class="language-js text-xs">
    {
        "@context": {
            "@vocab": "https://schema.org/"
        },
        "@id": 1,
        "@type": "Vessel",
        "nameInfrastructure": "3D HDTV Camera",
        "country": "FR",
        "category": "SCAT002002",
        "yearBuilt": 2011,
        "yearLastRefit": null,
        "length": null,
        "contactPerson": "Vincent Rigaud",
        "address": "Zoning Industriel Pointe du Diable, 29280 Plouzané",
        "urlInfrastructure": "http://www.eurofleets.eu, p4/294.html",
        "location": "La Seyne sur Mer",
        "servicesOffered": "",
        "lastUpdate": "1900-01-01",
        "operator": null,
        "owner": {
            "@type": "Organization",
            "institution_name": "Aalborg University; Department of Civil Engineering",
            "id_country": "DK",
            "id_status_institution": "HES",
            "acronym_inEnglish": "AAU",
            "institution_name_inEnglish": "Aalborg University; Department of Civil Engineering",
            "institution_name_native": "Aalborg Universitet",
            "street": "Sohngårdsholmsvej 57",
            "postCode": "9000",
            "city": "Aalborg",
            "website": "http://www.civil.aau.dk/",
            "latitude": 57.03,
            "longitude": 9.95
        }
    }</code>
                        </pre>
                    </div>
                    <div class="mt-4" x-show="tab === 'structure'">
                        <div class="divide-y divide-slate-200">

                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>@type</p></div>
                                <div class="w-full md:w-1/3"><p class="font-bold text-indigo-500">Vessel</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">&nbsp;</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>nameInfrastructure</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>country</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>category</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>yearBuilt</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">INT</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>yearLastRefit</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">INT</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>length</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">DECIMAL, 18,2</p></div>
                            </div>
                            {{-- ROW --}}
                            {{-- <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>contactPerson</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">DECIMAL, 18,2</p></div>
                            </div> --}}
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>address</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>urlInfrastructure</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>location</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>servicesOffered</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">LONGTEXT</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>lastUpdate</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">DATE</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>operator</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            {{-- ROW --}}
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>owner</p></div>
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
