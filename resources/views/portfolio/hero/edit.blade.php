@php use Illuminate\Support\Facades\URL; @endphp
<x-portfolio.inner-page title="Edit Title" :user="auth()->user()->fullName">
    <form action="{{ URL::current() }}" method="post">
        @csrf

        @include('portfolio.hero._form', [
    'title' => $title ,
    'button_label' => 'Update'
])
    </form>
</x-portfolio.inner-page>
