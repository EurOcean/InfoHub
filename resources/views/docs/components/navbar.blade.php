<div class="hidden md:block md:fixed md:w-72 bg-white min-h-screen px-2 py-4 md:px-8 md:py-8 overflow-y-scroll drop-shadow-2xl">
    <div>
        <a href="/">
            <img class="w-4/6" src="{{ asset('images/under_constrution/eurOcean-logo-color.png') }}" alt="logo eurocean">
        </a>
    </div>
    <div class="my-2">
        <p class="text-xs text-gray-500">alpha version 0.3</p>
    </div>
    <div class="px-0 mt-8">
        <p class="text-sm text-primary-blue font-bold mb-6">
            <a class="{{ Route::currentRouteNamed('home') ? 'font-bold text-primary-blue' : '' }}" href="{{ route('home') }}">
                Introduction
            </a>
        </p>
        <p class="text-sm text-primary-blue font-bold mb-2">
            Schema ld+json
        </p>
        <ul class="px-3 mb-6">
            <li class="mb-2 list-disc list-outside text-gray-700 text-sm ml-3">
                <a class="{{ Route::currentRouteNamed('schemaProject') ? 'font-bold text-primary-blue' : '' }}" href="{{ route('schemaProject') }}">Project</a>
            </li>
            <li class="mb-2 list-disc list-outside text-gray-700 text-sm ml-3">
                <a class="{{ Route::currentRouteNamed('schemaVessels') ? 'font-bold text-primary-blue' : '' }}" href="{{ route('schemaVessels') }}">Vessel</a>
            </li>
            <li class="mb-2 list-disc list-outside text-gray-700 text-sm ml-3">
                <a class="{{ Route::currentRouteNamed('schemaOrganization') ? 'font-bold text-primary-blue' : '' }}" href="{{ route('schemaOrganization') }}">Organization</a>
            </li>
            <li class="mb-2 list-disc list-outside text-gray-700 text-sm ml-3">
                <a class="{{ Route::currentRouteNamed('schemaSitemap') ? 'font-bold text-primary-blue' : '' }}" href="{{ route('schemaSitemap') }}">Sitemap</a>
            </li>
        </ul>
        {{--  --}}
        <p class="text-sm text-primary-blue font-bold mb-2">Data</p>
        <ul class="px-3 mb-12">
            <li class="mb-2 list-disc list-outside text-gray-700 text-sm ml-3">
                <a class="{{ Route::currentRouteNamed('projectsList') ? 'font-bold text-primary-blue' : '' }}" href="{{ route('projectsList') }}">Projects</a>
            </li>
            <li class="mb-2 list-disc list-outside text-gray-700 text-sm ml-3">
                <a class="{{ Route::currentRouteNamed('vesselsList') ? 'font-bold text-primary-blue' : '' }}" href="{{ route('vesselsList') }}">Vessels</a>
            </li>
            <li class="mb-2 list-disc list-outside text-gray-700 text-sm ml-3">
                <a class="{{ Route::currentRouteNamed('organizationsList') ? 'font-bold text-primary-blue' : '' }}" href="{{ route('organizationsList') }}">Organizations</a>
            </li>
        </ul>
        {{--  --}}
        {{-- <p class="text-sm text-primary-blue font-bold mb-2">API Documentation</p>
        <ul class="px-4 mb-12">
            <li class="mb-2 text-gray-700 text-sm">
                <a class="{{ Route::currentRouteNamed('apiDocumentation') ? 'font-bold text-primary-blue' : '' }}" href="{{ route('apiDocumentation') }}">Introduction</a>
            </li>
            <li class="mb-2 list-disc list-outside text-gray-700 text-sm ml-3">
                <a href="{{ url('api/docs') }}" target="_blank">Documentation</a>
            </li>
        </ul> --}}
        {{-- LOGOUT --}}
        {{-- <form action="{{ route('logout') }}" method="post">
            @csrf
                <button class="bg-primary-blue px-8 py-1 text-white font-bold rounded shadow text-center text-sm" type="submit">Logout</button>
        </form> --}}
    </div>
</div>
