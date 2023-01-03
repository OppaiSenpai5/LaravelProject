@php use App\Models\Character; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex">
                    <div class="flex-auto text-2xl mb-4">Characters List</div>

                    <div class="flex-auto text-right mt-2">
                        <a href="/character" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                            New Character</a>
                    </div>
                </div>

                <div class="flex flex-row flex-wrap">
                    @foreach (Character::all() as $character)
                        <div class="flex justify-center">
                            <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
                                <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="/images/{{ $character->image }}" alt="" />
                                <div class="p-6 flex flex-col justify-between">
                                    <div>
                                        <h5 class="text-gray-900 text-xl font-medium mb-2">
                                            {{ $character->name }}
                                        </h5>
                                    </div>
                                    <p class="text-gray-700 text-base mb-4 text-justify">
                                        {{ $character->about }}
                                    </p>
                                </div>
                            </div>
                        </div>

{{--                        <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">--}}
{{--                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/images/{{ $character->image }}" alt="">--}}
{{--                            <div class="flex flex-col justify-between p-4 leading-normal">--}}
{{--                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">--}}
{{--                                    {{ $character->name }}--}}
{{--                                </h5>--}}
{{--                                <a href="/anime/details/{{ $character->id }}">--}}
{{--                                    <span>{{ $character->anime->title }}</span>--}}
{{--                                </a>--}}
{{--                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $character->about }}</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
