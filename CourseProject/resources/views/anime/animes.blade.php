@php use App\Models\Anime; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-8 mx-auto">
                        <div class="flex flex-wrap w-full mb-20">
                            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Anime List</h1>
                                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-4">
                            @foreach(Anime::all() as $anime)
                                <div class="xl:w-1/4 md:w-1/3 p-2">
                                    <a href="/anime/details/{{ $anime->id }}">
                                        <div class="bg-gray-100 p-2 rounded-lg">
                                            <img class="rounded w-full mb-6" src="{{ $anime->image }}" alt="content">
                                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">
                                                {{ $anime->aired }}</h3>
                                            <h2 class="text-lg text-gray-900 font-medium title-font">{{ $anime->title }}</h2>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
