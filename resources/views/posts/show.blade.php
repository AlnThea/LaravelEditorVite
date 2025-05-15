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


    <div class="flex flex-col items-center justify-center">
        <div class="flex justify-between w-full">
            <div class="text-xl font-bold capitalize">{{$post->title}} </div>
            <div>
                <a href="{{route('posts.edit', $post)}}" class="px-4 py-2 bg-indigo-500 text-white rounded-lg">Edit</a>
            </div>

        </div>
        <div class="w-full relative">
            {!! $post->render() !!}
        </div>
    </div>
</x-app-layout>

