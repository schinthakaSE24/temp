@if (isset($errors) && count($errors))

    There were {{ count($errors->all()) }} Error(s)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }} </li>
        @endforeach
    </ul>

@endif
@include('libraries.styles')
@include('libraries.scripts')
<div class="card">
    <div class="card-header">Edit Student</div>
    <div class="card-body">
        <form method="post" action="{{ route('update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{ $product->title }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $product->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>
