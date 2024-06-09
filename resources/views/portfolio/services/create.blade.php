<x-portfolio.inner-page title="Add Service" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post">
        @csrf

        @include('portfolio.services._form')
    </form>
</x-portfolio.inner-page>
