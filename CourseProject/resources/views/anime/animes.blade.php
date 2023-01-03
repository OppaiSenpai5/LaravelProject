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
                <div class="flex">
                    <div class="flex-auto text-2xl mb-4">Animes List</div>

                    <div class="flex-auto text-right mt-2">
                        <a href="/anime" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                            New Anime</a>
                    </div>
                </div>

                <div class="flex flex-row items-stretch flex-wrap">
                    @foreach (Anime::all() as $anime)
                        <div class="w-1/4 p-2 bg-white rounded-lg">
                            <a href="/anime/details/{{ $anime->id }}">
                                <img class="rounded-t-lg" src="images/{{ $anime->image }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-center text-lg font-bold tracking-tight">
                                        {{ $anime->title }}</h5>
                                </a>
                                <a href="/anime/{{$anime->id}}" name="edit"
                                   class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                <form action="/anime/{{$anime->id}}" class="inline-block">
                                    <button type="submit" name="delete" formmethod="POST"
                                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Delete
                                    </button>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
