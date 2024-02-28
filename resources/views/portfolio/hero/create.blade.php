@php use Illuminate\Support\Facades\URL; @endphp
<x-portfolio.inner-page title="Add Title" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post">
        @csrf

        @include('portfolio.hero._form')
    </form>
</x-portfolio.inner-page>
