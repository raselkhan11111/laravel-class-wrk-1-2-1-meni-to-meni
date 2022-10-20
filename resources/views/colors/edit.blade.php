<x-master>
    <x-slot:title>
        Category Details
    </x-slot:title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category Edit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
            </div>
            <a href="{{ route('colors.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <x-forms.errors />

    <form action="{{ route('colors.update', $color->id) }}" method="post">
        @csrf
        @method('patch')

        <x-forms.input type="text" name="title" label="Name" :value="old('title', $color->title)" required
            placeholder="Enter name" />
        <label for="color">Select Color</label>
        <input type="color" name="color_code" label="Color Code" id="color"
            value="{{ old('color_code', $color->color_code) }}" class="form-control" required />



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-master>
