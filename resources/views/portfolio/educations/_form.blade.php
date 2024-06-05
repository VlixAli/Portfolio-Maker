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
    <x-form2.input label="Education" name="name" placeholder="Add your Education" :value="$education->name ?? ''"/>
    <x-form2.input label="Starting Year" name="start_year" placeholder="Add your starting year" :value="$education->start_year ?? ''"/>
    <x-form2.input label="Ending year" name="end_year" placeholder="Add your Ending year" :value="$education->end_year ?? ''"/>
    <x-form2.input label="Institution" name="institution" placeholder="Add your institution" :value="$education->institution ?? ''"/>
    <x-form2.input label="Description" name="description" placeholder="Add your description" :value="$education->description ?? ''"/>
</div>
<div class="form-group mb-3">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
