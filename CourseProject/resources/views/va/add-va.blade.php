<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Voice Actor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form method="POST" action="/va" enctype="multipart/form-data">

                    <div class="form-group my-3">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                        @if ($errors->has('name'))
                            <span class="text-red-600">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group my-3">
                        <label for="about">About</label>
                        <textarea name="about" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-40 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"></textarea>
                        @if ($errors->has('about'))
                            <span class="text-red-600">{{ $errors->first('about') }}</span>
                        @endif
                    </div>

                    <div class="form-group my-3">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                        @if ($errors->has('image'))
                            <span class="text-red-600">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <div class="form-group my-3">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Anime</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
