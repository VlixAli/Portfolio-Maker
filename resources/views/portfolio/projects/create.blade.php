<x-portfolio.inner-page title="Add Project" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post" enctype="multipart/form-data">
        @csrf

        @include('portfolio.projects._form')
    </form>
</x-portfolio.inner-page>
