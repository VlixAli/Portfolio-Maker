<x-portfolio.inner-page title="Experiences" :user="auth()->user()->fullName">
    <x-portfolio.alert type="success"/>
    <x-portfolio.alert type="info"/>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Position</th>
            <th>Date</th>
            <th>company</th>
            <th>Description</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($experiences as $experience)
            <tr>
                <td> {{ $experience->id }}</td>
                <td><a href="{{ route('portfolio.educations.edit' , $experience->id) }}">{{ $experience->position }}</a></td>
                <td>{{ $experience->starting_year }} - {{$experience->ending_year}}</td>
                <td>{{ $experience->company }}</td>
                <td>{{ $experience->description }}</td>
                <td>
                    <a href="{{ route('portfolio.experiences.edit', $experience->id) }}"
                       class="btn btn-sm btn-outline-success">Edit</a>
                </td>
                <td>
                    <form action="{{ route('portfolio.experiences.delete', $experience->id) }}" method="post">
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
        <a class="btn btn-outline-primary mx-2" href="{{route('portfolio.experiences.create')}}" role="button">Add new
            Experience</a>
        <form class="btn" action="{{ route('portfolio.experiences.empty') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete all Experiences</button>
        </form>
    </div>
</x-portfolio.inner-page>
