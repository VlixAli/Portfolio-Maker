<x-portfolio.inner-page title="Add Experience" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post">
        @csrf

        @include('portfolio.experiences._form')
    </form>
</x-portfolio.inner-page>
