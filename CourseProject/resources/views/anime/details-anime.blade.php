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
                    <div class="flex-auto text-5xl mb-4">
                        <span class="">{{ $anime->title }}</span>
                    </div>
                </div>

                <div class="flex flex-row items-stretch py-3">
                    <img src="/images/{{ $anime->image }}"/>
                    <div class="px-6 text-lg flex flex-col justify-between">
                        <div class="flex flex-col gap-1">
                            <div>
                                <strong>Episodes: </strong>
                                <span class="text-sm text-gray-600">{{ $anime->episodes }}</span>
                            </div>
                            <div>
                                <strong>Duration: </strong>
                                <span class="text-sm text-gray-600">{{ $anime->duration }}m</span>
                            </div>
                            <div>
                                <strong>Aired: </strong>
                                <span class="text-sm text-gray-600">{{ $anime->aired }}</span>
                            </div>
                            <div>
                                <strong>MAL Score: </strong>
                                <span class="text-sm text-gray-600">{{ $anime->score }}</span>
                            </div>
                        </div>

                        <div class="text-justify">
                            <strong>Synopsys: </strong>
                            <br>
                            <span>{{ $anime->description }}</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
