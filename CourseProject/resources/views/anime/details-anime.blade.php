<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 py-4 md:flex-row flex-col items-center">
                    <div class="lg:max-w-sm lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                        <img class="object-cover object-center rounded" alt="hero" src="{{ $anime->image }}">
                    </div>
                    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col gap-20 md:items-start md:text-left items-center text-center">
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
        </div>
    </div>
{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">--}}
{{--                <div class="flex">--}}
{{--                    <div class="flex-auto text-5xl mb-4">--}}
{{--                        <span class="">{{ $anime->title }}</span>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="flex flex-row items-stretch py-3">--}}
{{--                    <img src="/images/{{ $anime->image }}"/>--}}
{{--                    <div class="px-6 text-lg flex flex-col justify-between">--}}
{{--                        <div class="flex flex-col gap-1">--}}
{{--                            <div>--}}
{{--                                <strong>Episodes: </strong>--}}
{{--                                <span class="text-sm text-gray-600">{{ $anime->episodes }}</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong>Duration: </strong>--}}
{{--                                <span class="text-sm text-gray-600">{{ $anime->duration }}m</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong>Aired: </strong>--}}
{{--                                <span class="text-sm text-gray-600">{{ $anime->aired }}</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong>MAL Score: </strong>--}}
{{--                                <span class="text-sm text-gray-600">{{ $anime->score }}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="text-justify">--}}
{{--                            <strong>Synopsys: </strong>--}}
{{--                            <br>--}}
{{--                            <span>{{ $anime->description }}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

</x-app-layout>
