<x-portfolio.inner-page title="Add Education" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post">
        @csrf

        @include('portfolio.educations._form')
    </form>
</x-portfolio.inner-page>
