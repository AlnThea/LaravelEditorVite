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
        <div class="px-10 ">

            <p class="text-4xl">Posts</p>
            <div class="flex flex-col gap-5">
                @foreach($posts as $post)
                    <div class="flex items-center justify-between bg-gray-100 px-7 py-4">
                        <h3 class="text-lg font-bold">{{$post->title}}</h3>
                        <div>
                            <a href="{{route('posts.show', $post)}}" class="px-3 py-2 bg-yellow-500 text-yellow-800 rounded">View</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
