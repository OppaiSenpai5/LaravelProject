<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 py-4 md:flex-row flex-col items-center">
                    <div class="lg:max-w-sm lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                        <img class="object-cover object-center rounded" alt="hero" src="{{ $anime->image }}">
                    </div>
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col gap-20 md:items-start md:text-left items-center text-center">
                        <div>
                            <h1 class="title-font sm:text-4xl text-3xl mb-1 font-medium text-gray-900">
                                {{ $anime->title }}
                            </h1>
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                <span>Ep {{ $anime->episodes }} &#x2022; {{ $anime->duration }} m |</span>
                                <span> {{ $anime->aired }} |</span>
                                <span>MAL Score: {{ $anime->score }}</span>
                            </h2>
                        </div>
                        <div>
                            <p class="mb-8 leading-relaxed text-justify">
                                {{ $anime->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-10 mx-auto flex items-center md:flex-row flex-col">
                    <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
                        <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">
                            Cast of Characters and Voice Actors
                        </h1>
                    </div>
                </div>
                <div class="flex flex-wrap -m-2">
                    @foreach($anime->characters as $character)
                        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                            <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                                <a href="/character/details/{{ $character->id }}">
                                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="{{ $character->image }}">
                                </a>
                                <div class="flex-grow text-center">
                                    <h2 class="text-gray-900 title-font font-medium">{{ $character->name }}</h2>
                                    <p class="text-gray-500">{{ $character->va->name }}</p>
                                </div>
                                <a href="/va/details/{{ $character->va->id }}">
                                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full ml-4" src="{{ $character->va->image }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
