@php use App\Models\Anime; @endphp
<x-app-layout>


    <div class="py-12 bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-900 overflow-hidden shadow-xl sm:rounded-lg p-5">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-8 mx-auto">
                        <div class="flex flex-wrap w-full mb-20">
                            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">Anime List</h1>
                                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                            </div>
                        </div>

                        <div class="mb-10">
                            <form>
                                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    </div>
                                    <input name="filter[title]" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-800 focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Search By Title" required>
                                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-indigo-500 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Search</button>
                                </div>
                            </form>
                        </div>

                        <div class="flex flex-wrap -m-4">
                            @foreach($animes as $anime)
                                <div class="xl:w-1/4 md:w-1/3 p-2">
                                    <a href="/anime/details/{{ $anime->id }}">
                                        <div class="bg-gray-800 p-2 rounded-lg">
                                            <img class="rounded w-full mb-6" src="{{ $anime->image }}" alt="content">
                                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">
                                                {{ $anime->aired }}</h3>
                                            <h2 class="text-lg text-white font-medium title-font">{{ $anime->title }}</h2>
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
