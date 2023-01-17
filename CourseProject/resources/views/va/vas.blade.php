@php use App\Models\Va; @endphp
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-900 overflow-hidden shadow-xl sm:rounded-lg p-5">
                <section class="mt-12 text-white text-center">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="sm:text-5xl text-2xl font-medium title-font mb-4">
                            Voice Actors
                        </h1>
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

                    <div class="grid md:grid-cols-3 xl:grid-cols-4 gap-x-6 lg:gap-xl-12">
                        @foreach($vas as $va)
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
