<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="flex items-center text-4xl font-bold">
                <p class="text-4xl">{{config('app.name')}}</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{route('posts.index')}}">Home</a>
                <a href="{{route('posts.create')}}">Create Post</a>
            </div>
        </div>
    </x-slot>


    <div class="container">
        <h1 class="text-3xl">Create Post</h1>
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <x-input-label for="title">Title</x-input-label>
                @error('title')
                <div class="text-red-500 text-xs">{{$message}}</div>
                @enderror
                <x-text-input type="text" id="title" name="title" />
            </div>
            <div class="form-group">
                <x-input-label for="content">Content</x-input-label>
                @error('content')
                <div class="text-red-500 text-xs">{{$message}}</div>
                @enderror
                <textarea name="content" id="content" ></textarea>
            </div>
            <x-primary-button type="submit" class="button">Save</x-primary-button>
        </form>

    </div>
</x-app-layout>

