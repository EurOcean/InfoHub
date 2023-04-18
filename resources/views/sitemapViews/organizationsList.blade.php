@extends('layouts.app')

@section('content')
<main class="flex">
    <div class="flex justify-end px-20 md:w-full">
        <div class="w-full md:py-14">
            <p class="text-sm text-primary-green mb-1">Data</p>
            <div class="w-full h-px bg-gray-200 my-2"></div>
            <div class="flex space-x-2 my-8">
                <div class="flex-grow"><a class="text-primary-blue" href="{{ url('organizations') }}"><strong>Organizations list</strong></a></div>
                <div><a class="bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase" href="{{ url('api/v1/organizations') }}" target="_blank"><strong>json</strong></a></div>
            </div>
            <div class="mb-4 relative text-gray-400 focus-within:text-gray-600 block">
                <div class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 right-4">
                    <img class="" src="{{ asset('images/icons/search_icon.svg') }}" alt="">
                </div>
                <input class="w-full px-8 py-2 bg-gray-100 rounded-full inner-shadow" type="text" name="acronym" id="searchOrganization" autocomplete="off" placeholder="Search organizations...">
                <div id="origanization_list" class="absolute w-full bg-white shadow-xl"></div>
            </div>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#searchOrganization').on('keyup',function () {
                        var query = $(this).val();
                        $.ajax({
                            url:'{{ route('searchOrganizations') }}',
                            type:'GET',
                            data:{'acronym':query},
                            success:function (data) {
                                $('#origanization_list').html(data);
                            }
                        })
                    });
                    $(document).on('click', 'a', function(){
                        var value = $(this).text();
                        $('#acronym').val(value);
                        $('#origanization_list').html("");
                    });
                });
            </script>

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Organization Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Country</th>
                                    <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($organizations as $item)
                                        @if ($item->country_name != null || $item->country_name != '')
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <div class="text-sm font-medium text-gray-900">
                                                                <a class="text-primary-blue font-bold hover:text-blue-900" href="organization/{{$item->id}}">
                                                                    {{ Str::limit($item->name, 25) }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    @if ($item->activityType === null || $item->activityType === '' )
                                                        <p>Not available</p>
                                                    @else
                                                        <p>
                                                            {{ $item->activityType }}
                                                        </p>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    @if ($item->country_name === null || $item->country_name === '')
                                                        <p>Not available</p>
                                                    @else
                                                        <p>{{ $item->country }}</p>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="organization/{{$item->id}}" class="bg-primary-green px-4 py-2 text-white font-bold rounded shadow">Visit</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="px-8 py-4">
                                {{ $organizations->links('pagination::tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
