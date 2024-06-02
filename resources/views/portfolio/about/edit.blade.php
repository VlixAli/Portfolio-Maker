<x-portfolio.inner-page title="Edit About me" :user="auth()->user()->fullName">
    <form class="mb-4" action="{{ route('portfolio.about.update', auth()->user()->id)}}" method="post">
        @csrf
        @method('PUT')

        <x-form2.textarea name="summary" label="Summary" :value="$about->summary?? null" />
        <x-form2.input name="title" label="Title" :value="$about->title?? null" />
        <x-form2.textarea name="short_summary" label="Short Summary" :value="$about->short_summary?? null" />
        <x-form2.input type="date" name="birthday" label="Birthday" :value="$about->birthday?? null" />
        <x-form2.input name="age" label="Age" :value="$about->age?? null"></x-form2.input>
        <x-form2.input name="website" label="Website" :value="$about->website?? null" />
        <x-form2.input name="degree" label="Degree" :value="$about->degree?? null" />
        <x-form2.input name="phone" label="Phone" :value="$about->phone?? null" />
        <x-form2.input name="email" label="Email" :value="$about->email?? null" />
        <x-form2.input name="city" label="City" :value="$about->city?? null" />
        <x-form2.input name="freelance" label="Freelance" :value="$about->freelance?? null" />
        <x-form2.textarea name="ending" label="Ending" :value="$about->ending?? null" />

        <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
</x-portfolio.inner-page>
