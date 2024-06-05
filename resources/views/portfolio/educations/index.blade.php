<x-portfolio.inner-page title="Education" :user="auth()->user()->fullName">
    <x-portfolio.alert type="success"/>
    <x-portfolio.alert type="info"/>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Institution</th>
            <th>Description</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($educations as $education)
            <tr>
                <td> {{ $education->id }}</td>
                <td><a href="{{ route('portfolio.educations.edit' , $education->id) }}">{{ $education->name }}</a></td>
                <td>{{ $education->start_year }} - {{$education->end_year}}</td>
                <td>
                    <a href="{{ route('portfolio.educations.edit', $education->id) }}"
                       class="btn btn-sm btn-outline-success">Edit</a>
                </td>
                <td>
                    <form action="{{ route('portfolio.educations.delete', $education->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No Education defined.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="form-group mb-3">
        <a class="btn btn-outline-primary mx-2" href="{{route('portfolio.educations.create')}}" role="button">Add new
            education</a>
        <form class="btn" action="{{ route('portfolio.educations.empty') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete all Education</button>
        </form>
    </div>
</x-portfolio.inner-page>
