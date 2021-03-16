@extends('admin.layout.admin')

@section('title')
<title>Add Product</title>
@endsection

@section('css')
<link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />

<link href="{{asset('admins/product/add/add.css')}}" rel="stylesheet" />

@endsection

<style>

</style>


@section('content')
<div class="content-wrapper">
    <div class="content-header">
        @include('admin.partials.content-header', ['name' => 'Product', 'key' => 'Add'])
    </div>
    <div class="container">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Product Name:</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Product Name">
                                    </div>

                                    <div class="form-group">
                                        <label>Price:</label>
                                        <input type="text" name="price" class="form-control" placeholder="Enter Price">
                                    </div>

                                    <div>
                                        <label>Category:</label>
                                        <select class="form-control" name="category">
                                            <option>Select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-2">
                                        <label>Brand:</label>
                                        <select class="form-control" name="brand">
                                            <label>Brand:</label>
                                            <option>Select Brand</option>
                                            @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}"> {{ $brand->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group mt-2">
                                        <label>Feature Image:</label>
                                        <input type="file" name="feature_image" class="form-control-file"
                                            style="width:100%;">
                                    </div>

                                    <div class="form-group">
                                        <label>Detailed Images:</label>
                                        <input type="file" multiple name="image_path[]" class="form-control-file">
                                    </div>

                                    <div class="form-group">
                                        <label>Quantity:</label>
                                        <input type="number" name="quantity" class="form-control"
                                            placeholder="Enter Quantity">
                                    </div>

                                    <div class="form-group">
                                        <label>New:</label>
                                        <input type="text" name="new" class="form-control" placeholder="Enter New">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descriptions:</label>
                                        <textarea type="text" name="descriptions"
                                            class="form-control tinymce_editor_init"
                                            placeholder="Enter Descriptions"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right"
                                        style="margin-bottom: 20px;">Submit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{asset('admins/product/add/add.js')}}"></script>

@endsection
