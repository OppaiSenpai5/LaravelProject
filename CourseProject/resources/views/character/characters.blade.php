@php use App\Models\Character; @endphp
<x-app-layout>

    <div class="py-12 bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-slate-900 overflow-hidden shadow-xl sm:rounded-lg p-5">
            <section class="text-gray-200 body-font">
                <div class="container px-5 py-10 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="text-5xl font-medium title-font mb-4 text-white">CHARACTERS</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">A list of all characters starring in the animes on our site.</p>
                    </div>

                    <div class="mb-16">
                        <form>
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input name="filter[name]" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-white border border-gray-300 rounded-lg bg-gray-800 focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Search By Name" required>
                                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="flex flex-wrap -m-4">
                        @foreach($characters as $character)
                            <div class="flex lg:w-1/2 border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                                <a href="/character/details/{{ $character->id }}">
                                    <img alt="team" class="w-40 h-40 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="{{ $character->image }}">
                                </a>
                                <div class="flex flex-grow flex-col sm:text-left text-center mt-6 sm:mt-0 justify-center">
                                    <h1 class="text-white text-3xl title-font mb-2">{{ $character->name }}</h1>
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
