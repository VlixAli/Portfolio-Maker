@props([
    'title' => 'Inner Page2'
])

<x-portfolio.layout>
    <x-portfolio.navbar />
    <main id="main">
        <x-portfolio.breadcrumb :title="$title" />
        {{ $slot }}
    </main><!-- End #main -->
</x-portfolio.layout>
