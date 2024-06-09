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
    <x-form2.input label="Name" name="name" placeholder="Add service name" :value="$service->name ?? ''"/>
    <x-form2.input label="Description" name="description" placeholder="Add service description" :value="$service->description ?? ''"/>
    <x-form2.select label="Icon" name="icon" :options="['bi bi-briefcase' => '1', 'bi bi-card-checklist' => '2',
        'bi bi-bar-chart' => '3', 'bi bi-binoculars' => '4', 'bi bi-brightness-high' => '5',
         'bi bi-calendar4-week' => '6']" :value="$service->icon ?? ''"/>
</div>
<div class="form-group mb-3">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
