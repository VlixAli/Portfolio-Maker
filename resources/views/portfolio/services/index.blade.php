<x-portfolio.inner-page title="Services" :user="auth()->user()->fullName">
    <x-portfolio.alert type="success"/>
    <x-portfolio.alert type="info"/>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Icon</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($services as $service)
            <tr>
                <td> {{ $service->id }}</td>
                <td><a href="{{ route('portfolio.services.edit' , $service->id) }}">{{ $service->name }}</a></td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->icon }}</td>
                <td>
                    <a href="{{ route('portfolio.services.edit', $service->id) }}"
                       class="btn btn-sm btn-outline-success">Edit</a>
                </td>
                <td>
                    <form action="{{ route('portfolio.services.delete', $service->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No Service defined.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="form-group mb-3">
        <a class="btn btn-outline-primary mx-2" href="{{route('portfolio.services.create')}}" role="button">Add new
            Service</a>
        <form class="btn" action="{{ route('portfolio.services.empty') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete all Services</button>
        </form>
    </div>
</x-portfolio.inner-page>
