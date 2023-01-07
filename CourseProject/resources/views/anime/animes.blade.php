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
                                <div class="xl:w-1/4 md:w-1/2 p-2">
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
{{--                <section class="text-gray-600 body-font">--}}
{{--                    <div class="container px-5 py-24 mx-auto">--}}
{{--                        <div class="flex flex-col text-center w-full mb-20">--}}
{{--                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>--}}
{{--                            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>--}}
{{--                        </div>--}}
{{--                        <div class="flex flex-wrap -m-4">--}}
{{--                        @foreach(Anime::all() as $anime)--}}
{{--                            <div class="w-1/4 p-4">--}}
{{--                                <div class="flex relative">--}}
{{--                                    <img alt="gallery" class="absolute inset-0 w-full h-auto" src="{{ $anime->image }}">--}}
{{--                                    <div class="px-8 py-10 z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">--}}
{{--                                        <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>--}}
{{--                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $anime->title }}</h1>--}}
{{--                                        <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
            </div>
        </div>
    </div>
</x-app-layout>
