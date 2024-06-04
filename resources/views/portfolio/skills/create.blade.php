<x-portfolio.inner-page title="Add Skill" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post">
        @csrf

        @include('portfolio.skills._form')
    </form>
</x-portfolio.inner-page>
