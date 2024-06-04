<x-portfolio.inner-page title="Skills" :user="auth()->user()->fullName">
    <x-portfolio.alert type="success"/>
    <x-portfolio.alert type="info"/>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Level</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($skills as $skill)
            <tr>
                <td> {{ $skill->id }}</td>
                <td><a href="{{ route('portfolio.hero.edit' , $skill->id) }}">{{ $skill->name }}</a></td>
                <td>{{ $skill->level }}</td>
                <td>
                    <a href="{{ route('portfolio.skills.edit', $skill->id) }}"
                       class="btn btn-sm btn-outline-success">Edit</a>
                </td>
                <td>
                    <form action="{{ route('portfolio.skills.delete', $skill->id) }}" method="post">
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
        <a class="btn btn-outline-primary mx-2" href="{{route('portfolio.skills.create')}}" role="button">Add new
            skill</a>
        <form class="btn" action="{{ route('portfolio.skills.empty') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete all titles</button>
        </form>
    </div>
</x-portfolio.inner-page>
