<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container flex flex-col w-full p-6 divide-y rounded-md divide-gray-300 bg-gray-50 text-gray-800">
                <div class="flex justify-between p-4">
                    <div class="flex space-x-4">
                        <div>
                            <img src="{{ $character->image }}" alt="" class="object-cover w-40 h-40 rounded-full bg-gray-500">
                        </div>
                        <div class="flex flex-grow flex-col sm:text-left text-center mt-6 sm:mt-0 justify-center">
                            <h1 class="font-bold text-5xl">{{ $character->name }}</h1>
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
                </div>
                <div class="p-4 space-y-2 text-md text-justify text-gray-600">
                    <?= $character->about ?>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
