@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="container m-auto">
            <div class="w-full min-h-screen md:px-32 md:py-14">
                <div class="mb-4">
                    <h2 class="text-xl text-primary-blue">Organization Structure JSON+LD</h2>
                    <div class="w-full h-px bg-gray-200 my-4"></div>
                    <p class="mb-4 text-gray-600">Online repository of marine research organizations.</p>
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
        "@type": "Organization",
        "picNumber": "974250444",
        "vatNumber": 'ESG72094444',
        "name": 'FUNDACION CENTRO TECNOLOGICO ACUICULTURA DE ANDALUCIA',
        "shortName": 'CTAQUA',
        "activityType": 'REC',
        "street": 'MUELLE COMERCIAL S/N EDIF CTAQUA',
        "city": 'EL PUERTO DE SANTA MARIA CADIZ',
        "postCode": '11500',
        "country": 'Spain',
        "geolocation": '36.601468;-6.2381493',
        "organizationURL": 'not available'
    }</code>
                        </pre>
                    </div>
                    <div class="mt-4" x-show="tab === 'structure'">
                        <div class="divide-y divide-slate-200">
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>@type</p></div>
                                <div class="w-full md:w-1/3"><p class="font-bold text-indigo-500">Organization</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">&nbsp;</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>picNumber</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">INT</p></div>
                                {{-- <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div> --}}
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>vatNumber</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>name</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>shortName</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>activityType</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>street</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>city</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>postCode</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>country</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>geolocation</p></div>
                                <div class="w-full md:w-1/3"><p>&nbsp;</p></div>
                                <div class="w-full md:w-1/3"><p class="text-right text-sm pr-8">VARCHAR, 255</p></div>
                            </div>
                            <div class="bg-white p-2 flex items-center">
                                <div class="w-full md:w-1/3 border-l-4 border-indigo-500 px-2 font-bold text-sm"><p>organizationURL</p></div>
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
