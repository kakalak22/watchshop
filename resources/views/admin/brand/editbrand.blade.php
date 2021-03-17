@extends('admin.layout.admin')

@section('title')
<title>Edit Brand</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        @include('admin.partials.content-header', ['name' => 'Brand', 'key' => 'Edit'])
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <form action="{{route('brands.update', ['id' => $brand->id])}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Category Name:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" value="{{ $brand->name }}"
                                     class="form-control" placeholder="Enter Category">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
