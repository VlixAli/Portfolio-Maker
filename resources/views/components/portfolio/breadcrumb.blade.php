@props([
    'title' => 'Inner Page'
])

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $title }}</h2>
            <ol>
                <li><a href="{{route('portfolio.index')}}">Home</a></li>
                <li>{{ $title }}</li>
            </ol>
        </div>
    </div>
</section><!-- End Breadcrumbs -->
