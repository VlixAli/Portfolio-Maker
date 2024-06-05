<x-portfolio.inner-page title="Edit Skill" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post">
        @csrf
        @method('PUT')

        @include('portfolio.educations._form', [
    'education' => $education ,
    'button_label' => 'Update'
])
    </form>
</x-portfolio.inner-page>
