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
    <x-form2.input label="Position" name="position" placeholder="Add your Position" :value="$experience->position ?? ''"/>
    <x-form2.input label="Starting Year" name="starting_year" placeholder="Add your starting year" :value="$experience->starting_year ?? ''"/>
    <x-form2.input label="Ending year" name="ending_year" placeholder="Add your Ending year" :value="$experience->ending_year ?? ''"/>
    <x-form2.input label="company" name="company" placeholder="Add your company" :value="$experience->company ?? ''"/>
    <x-form2.textarea label="Description" name="description" placeholder="Add your description" :value="$experience->description ?? ''"/>
</div>
<div class="form-group mb-3">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
