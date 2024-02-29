<x-portfolio.inner-page title="Titles" :user="auth()->user()->fullName">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Created At</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($titles as $title)
            <tr>
                <td> {{ $title->id }}</td>
                <td><a href="{{ route('portfolio.hero.edit' , $title->slug) }}">{{ $title->name }}</a></td>
                <td>{{ $title->created_at }}</td>
                <td>
                    <a href="{{ route('portfolio.hero.edit', $title->slug) }}"
                       class="btn btn-sm btn-outline-success">Edit</a>
                </td>
                <td>
                    <form action="{{ route('portfolio.hero.create', $title->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No titles defined.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="form-group mb-3">
        <a class="btn btn-outline-primary mx-2" href="{{route('portfolio.hero.create')}}" role="button">Add new title</a>
    </div>
</x-portfolio.inner-page>
