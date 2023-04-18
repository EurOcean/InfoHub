@extends('layouts.app')

@section('content')
<main class="flex">
    <div class="flex justify-end px-20 md:w-full">
        <div class="w-full md:py-14">
            <p class="text-sm text-primary-green mb-1">Data</p>
            <div class="w-full h-px bg-gray-200 my-2"></div>
            <div class="flex space-x-2 my-8">
                <div class="flex-grow"><a class="text-primary-blue" href="{{ url('vessels') }}"><strong>Vessels list</strong></a></div>
                <div><a class="bg-primary-blue px-4 py-2 text-sm text-white font-bold rounded shadow uppercase" href="{{ url('api/v1/vessels') }}" target="_blank"><strong>json</strong></a></div>
            </div>


            <div class="mb-4 relative text-gray-400 focus-within:text-gray-600 block">
                <div class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 right-4">
                    <img class="" src="{{ asset('images/icons/search_icon.svg') }}" alt="">
                </div>
                <input class="w-full px-8 py-2 bg-gray-100 rounded-full inner-shadow" type="text" name="name_infrastructure" id="searchVessels" autocomplete="off" placeholder="Search vessels...">
                <div id="vessels_list" class="absolute w-full bg-white shadow-xl"></div>
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    $('#searchVessels').on('keyup',function () {
                        var query = $(this).val();
                        $.ajax({
                            url:'{{ route('searchVessels') }}',
                            type:'GET',
                            data:{'name_infrastructure':query},
                            success:function (data) {
                                $('#vessels_list').html(data);
                            }
                        })
                    });
                    $(document).on('click', 'a', function(){
                        var value = $(this).text();
                        $('#name_infrastructure').val(value);
                        $('#vessels_list').html("");
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
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year Built</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Length</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($vessels as $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900">
                                                            <a class="text-primary-blue hover:text-blue-900 font-bold" href="vessel/{{$item->id_infrastructure}}">{{ $item->name_infrastructure }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                @if ($item->year_built === null)
                                                    <p>Not available</p>
                                                @else
                                                    <p>{{ $item->year_built }}</p>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                @if ($item->length === null)
                                                    <p>Not available</p>
                                                @else
                                                    <p>{{ $item->length }}</p>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a class="bg-primary-green px-4 py-2 text-white font-bold rounded shadow" href="vessel/{{$item->id_infrastructure}}">Visit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="px-8 py-4">
                                {{ $vessels->onEachSide(0)->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

