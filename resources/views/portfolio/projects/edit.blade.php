<x-portfolio.inner-page title="Edit Project" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('portfolio.projects._form', [
    'project' => $project,
    'button_label' => 'Update'
])
    </form>
</x-portfolio.inner-page>
