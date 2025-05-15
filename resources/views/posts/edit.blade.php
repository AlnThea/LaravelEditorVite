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
        <h2 class="text-3xl mb-4">Edit Post</h2>

        <form action="{{route('posts.update', $post)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <x-input-label for="title">Title</x-input-label>
                <x-text-input type="text" id="title" name="title" value="{{$post->title}}" />
                @error('title')
                <div class="text-red-500 text-xs">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <x-input-label for="content">Content</x-input-label>
                <input name="content" id="content" type="text" value="{{$post->content}}"/>
                @error('content')
                <div class="text-red-500 text-xs">{{$message}}</div>
                @enderror
            </div>
            <x-primary-button type="submit" class="button">Save</x-primary-button>
        </form>
    </div>
</x-app-layout>
