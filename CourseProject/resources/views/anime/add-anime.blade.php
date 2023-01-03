<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Anime') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form method="POST" action="/anime" enctype="multipart/form-data">

                    <div class="form-group my-3">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                        @if ($errors->has('title'))
                            <span class="text-red-600">{{ $errors->first('title') }}</span>
                        @endif
                    </div>

                    <div class="form-group my-3">
                        <label for="episodes">Episodes</label>
                        <input type="number" id="episodes" name="episodes" min="1" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                        @if ($errors->has('episodes'))
                            <span class="text-red-600">{{ $errors->first('episodes') }}</span>
                        @endif
                    </div>

                    <div class="form-group my-3">
                        <label for="duration">Duration</label>
                        <input type="number" id="duration" name="duration" min="1" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                        @if ($errors->has('duration'))
                            <span class="text-red-600">{{ $errors->first('duration') }}</span>
                        @endif
                    </div>

                    <div class="form-group my-3">
                        <label for="score">Score</label>
                        <input type="number" id="score" name="score" min="1" step="0.01" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                        @if ($errors->has('score'))
                            <span class="text-red-600">{{ $errors->first('score') }}</span>
                        @endif
                    </div>

                    <div class="form-group my-3">
                        <label for="description">Description</label>
                        <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-40 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"></textarea>
                        @if ($errors->has('description'))
                            <span class="text-red-600">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-group my-3">
                        <label for="aired">Aired</label>
                        <input type="text" id="aired" name="aired" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                        @if ($errors->has('aired'))
                            <span class="text-red-600">{{ $errors->first('aired') }}</span>
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
