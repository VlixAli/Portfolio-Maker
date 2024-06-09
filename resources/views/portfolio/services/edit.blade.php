<x-portfolio.inner-page title="Edit Skill" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post">
        @csrf
        @method('PUT')

        @include('portfolio.services._form', [
    'service' => $service ,
    'button_label' => 'Update'
])
    </form>
</x-portfolio.inner-page>
