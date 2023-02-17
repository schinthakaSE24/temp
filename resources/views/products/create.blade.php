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
    <div class="card-header">Add Product</div>
    <div class="card-body">
        <form method="post" action="{{ route('store') }}"enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Product Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>
