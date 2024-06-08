<x-portfolio.inner-page title="Projects" :user="auth()->user()->fullName">
    <x-portfolio.alert type="success"/>
    <x-portfolio.alert type="info"/>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Client</th>
            <th>Date</th>
            <th>URL</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($projects as $project)
            <tr>
                <td><a href="{{ route('portfolio.projects.edit' , $project->id) }}">{{ $project->name }}</a></td>
                <td>{{ $project->category}}</td>
                <td>{{ $project->client }}</td>
                <td>{{ $project->date }}</td>
                <td>{{ $project->url }}</td>
                <td>
                    <a href="{{ route('portfolio.projects.edit', $project->id) }}"
                       class="btn btn-sm btn-outline-success">Edit</a>
                </td>
                <td>
                    <form action="{{ route('portfolio.projects.delete', $project->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No Experience defined.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="form-group mb-3">
        <a class="btn btn-outline-primary mx-2" href="{{route('portfolio.projects.create')}}" role="button">Add new
            Project</a>
        <form class="btn" action="{{ route('portfolio.projects.empty') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete all Projects</button>
        </form>
    </div>
</x-portfolio.inner-page>
