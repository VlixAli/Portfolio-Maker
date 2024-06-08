@if($errors->any())
    <div class="alert alert-danger">
        <h3>Error Occurred!</h3>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group mb-3">
    <x-form2.input label="Name" name="name" placeholder="Add project name" :value="$project->name ?? ''"/>
    <x-form2.input label="Image" type="file" name="image" placeholder="Add project image(not required)" :value="$project->image ?? ''"/>
    <x-form2.input label="Category" name="category" placeholder="Add project category" :value="$project->category ?? ''"/>
    <x-form2.input label="Client" name="client" placeholder="Add project client" :value="$project->client ?? ''"/>
    <x-form2.input label="Date" type="date" name="date" placeholder="Add project date" :value="$project->date ?? ''"/>
    <x-form2.input label="Url" name="url" placeholder="Add project url" :value="$project->url ?? ''"/>
    <x-form2.textarea label="Description" name="description" placeholder="Add project description" :value="$project->description ?? ''"/>
</div>
<div class="form-group mb-3">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
