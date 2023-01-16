@php use App\Models\Character; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Characters') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-10 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">CHARACTERS</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">A list of all characters starring in the animes on our site.</p>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        @foreach(Character::all() as $character)
                            <div class="flex lg:w-1/2 border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                                <a href="/character/details/{{ $character->id }}">
                                    <img alt="team" class="w-40 h-40 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="{{ $character->image }}">
                                </a>
                                <div class="flex flex-grow flex-col sm:text-left text-center mt-6 sm:mt-0 justify-center">
                                    <h1 class="text-gray-900 text-3xl title-font mb-2">{{ $character->name }}</h1>
                                    <p class="leading-relaxed text-base">Anime:
                                        <a class="mt-3 text-indigo-500 inline-flex items-center" href="/anime/details/{{ $character->anime->id }}">
                                            {{ $character->anime->title }}
                                        </a>
                                    </p>
                                    <p class="leading-relaxed text-base">Voice actor:
                                        <a class="mt-3 text-indigo-500 inline-flex items-center" href="/va/details/{{ $character->anime->id }}">
                                            {{ $character->va->name }}
                                        </a>
                                    </p>
                                </div>
                            </div>
{{--                            <div class="p-4 lg:w-1/4 md:w-1/2">--}}
{{--                                <div class="h-full flex flex-col items-center text-center">--}}
{{--                                    <a href="/character/details/{{ $character->id }}">--}}
{{--                                        <img alt="team" class="flex-shrink-0 rounded-lg w-full object-cover object-center mb-4" src="{{ $character->image }}">--}}
{{--                                    </a>--}}
{{--                                    <div class="w-full">--}}
{{--                                        <h2 class="title-font font-medium text-lg text-gray-900">{{ $character->name }}</h2>--}}
{{--                                        <a href="/anime/details/{{ $character->anime->id }}">--}}
{{--                                            <h3 class="tracking-widest text-indigo-500 title-font">{{ $character->anime->title }}</h3>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
