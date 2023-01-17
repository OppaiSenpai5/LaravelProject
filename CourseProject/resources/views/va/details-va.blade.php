<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl text-white mx-auto sm:p-6 lg:p-8 bg-slate-900 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex justify-between p-4">
                <div class="flex space-x-4">
                    <div>
                        <img src="{{ $va->image }}" alt="" class="object-cover w-40 h-40 rounded-full bg-gray-500">
                    </div>
                    <div class="flex flex-grow flex-col sm:text-left text-center mt-6 sm:mt-0 justify-center">
                        <h1 class="font-bold text-5xl">{{ $va->name }}</h1>
                    </div>
                </div>
            </div>
            <div class="p-4 text-md text-justify text-white mt-3">
                <div class="flex flex-col">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-indigo-500"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-3">
                        <h1 class="sm:w-2/5 text-white font-medium title-font text-2xl mb-2 sm:mb-0">About</h1>
                    </div>
                </div>
                <?= $va->about ?>
            </div>
            <div class="p-4 space-y-2 text-md text-justify text-white mt-3">
                <div class="flex flex-col">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-indigo-500"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-3">
                        <h1 class="sm:w-2/5 text-white font-medium title-font text-2xl mb-2 sm:mb-0">Characters</h1>
                    </div>
                </div>
                @foreach($va->characters as $character)
                    <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div class="text-center">
                            <a href="/character/details/{{ $character->id }}">
                                <img class="mx-auto mb-4 w-36 h-36 object-center object-cover rounded-full" src="{{ $character->image }}" alt="Bonnie Avatar">
                            </a>
                            <h3 class="mb-1 text-2xl font-bold tracking-tight">
                                {{ $character->name }}
                            </h3>
                            <a href="/anime/details/{{ $character->anime->id }}">
                                <p class="mt-3 text-indigo-500 inline-flex items-center">
                                    {{ $character->anime->title }}
                                </p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
