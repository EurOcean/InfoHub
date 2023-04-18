@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="container m-auto">
            <div class="w-full min-h-screen md:px-32 md:py-14">
                <div class="mb-4">
                    <h2 class="text-xl text-primary-blue">Sitemap XML</h2>
                    <i class="fa-solid fa-angles-right"></i>
                    <div class="w-full h-px bg-gray-200 my-4"></div>
                    {{-- <p class="text-gray-600 mb-8">Sunt id ex nostrud nisi. Incididunt exercitation consequat laborum irure incididunt consectetur reprehenderit quis laboris enim quis sunt consequat sunt. Laborum ex veniam non elit esse sit in nisi reprehenderit ipsum ex. Lorem minim in dolor sit elit exercitation eu. Amet anim officia duis non ut nostrud minim. Exercitation tempor aliquip nulla esse cupidatat magna et reprehenderit quis eiusmod ad commodo. Ipsum mollit veniam duis cillum eu.</p> --}}
                    <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'robots.txt' }" id="tab_wrapper">
                        <!-- tabs navigation -->
                        @include('docs.components.tabsSitemaps.navtabs')
                        <!-- tab robots -->
                        @include('docs.components.tabsSitemaps.robots')
                        <!-- tab sitemap index -->
                        @include('docs.components.tabsSitemaps.sitemapsIndex')
                        <!-- tab sitemap projects -->
                        @include('docs.components.tabsSitemaps.sitemapProjects')
                        <!-- tab sitemap vessels -->
                        @include('docs.components.tabsSitemaps.sitemapVessels')
                        <!-- tab sitemap organizations -->
                        @include('docs.components.tabsSitemaps.sitemapOrganizations')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
