@props([
    'title' => 'Inner Page2',
    'user' => 'anonymous' ,
    'image' => 'assets/img/profile-img.jpg'
])

<x-portfolio.layout>
    <x-portfolio.navbar :user="$user" :image="$image" />
    <main id="main">
        <x-portfolio.breadcrumb :title="$title" />
        <div class="mt-3 mx-3">
        {{ $slot }}
        </div>
    </main><!-- End #main -->
</x-portfolio.layout>
