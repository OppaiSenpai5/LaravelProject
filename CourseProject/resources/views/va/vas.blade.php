@php use App\Models\Va; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <section class="mt-12 text-gray-800 text-center">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                            Voice Actors
                        </h1>
                    </div>

                    <div class="grid md:grid-cols-3 xl:grid-cols-4 gap-x-6 lg:gap-xl-12">
                        @foreach(Va::all() as $va)
                            <div class="mb-12">
                                <a href="/va/details/{{ $va->id }}">
                                    <img src="{{ $va->image }}" class="rounded-full object-cover object-center mx-auto shadow-lg mb-4 w-32 h-32" alt=""/>
                                    <p class="font-bold mb-2">{{ $va->name }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
