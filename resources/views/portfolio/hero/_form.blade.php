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
    <x-form2.input label="New Title" name="name" placeholder="Add your new Title!"/>
</div>
<div class="form-group mb-3">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
