<!doctype html>
<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8 bg bg-dots-lighter bg-gray-900">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="portfolio Logo" width="70" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="flex-1 bg-green-200 text-xs font-bold uppercase rounded-full py-3 px-12 flex lg:inline-flex hover:bg-green-300">
                            Welcome, {{auth()->user()->username}}!
                            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
                        </button>
                    </x-slot>

{{--                    @admin--}}
{{--                    <x-dropdown-item href="/admin/posts" :active="request()->routeIs('admin_posts')">Dashboard</x-dropdown-item>--}}
{{--                    <x-dropdown-item href="/admin/posts/create" :active="request()->routeIs('post')">New Post</x-dropdown-item>--}}
{{--                    @endadmin--}}
                    <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log out</x-dropdown-item>

                    <form id="logout-form" method="post" action="/logout" class="hidden">
                        @csrf
                    </form>

                </x-dropdown>

            @else
                <a href="/register" class="text-xs font-bold uppercase bg-blue-500 ml-3 rounded-full text-white py-3 px-5 hover:bg-blue-600">Register</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase bg-green-500 ml-3 rounded-full text-white py-3 px-5 hover:bg-blue-600">Log In</a>
            @endauth

        </div>
    </nav>

    {{$slot}}

    <footer id="newsletter"
            class="bg-gray-800 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl">Sign in/up to make your Portfolio!</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>
    </footer>
</section>
<x-flash/>
</body>
