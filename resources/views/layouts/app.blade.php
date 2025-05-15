<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ config('app.url') }}">


    <title>{{config('app.name')}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-gray-100 dark:bg-gray-900">
    <div class="">
        <!-- Page Heading -->
        @if (isset($header))
            <div class="bg-white dark:bg-gray-800 shadow-lg">
                <div class=" mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                    <div class="flex justify-end">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                               class="hover:border-b-4 hover:pb-4 hover:border-b-yellow-500">
                                <div class="inline-block align-middle relative">
                                    <div class="absolute text-xl -top-1">
                                        <i class="ti ti-power"></i>
                                    </div>
                                    <span class="ml-7">{{ __('Log out') }}</span>
                                </div>
                            </a>
                        </form>
                    </div>

                </div>
            </div>
        @endif
    </div>


    <!-- Page Content -->
    <main class="px-3 py-12 sm:py-12 sm:px-5 bg-white mt-1">
        {{ $slot }}
    </main>
</div>


<script>const APP_URL = document.querySelector('meta[name="app-url"]').getAttribute('content');</script>
<script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
<script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>


@stack('scripts')
</body>
</html>
