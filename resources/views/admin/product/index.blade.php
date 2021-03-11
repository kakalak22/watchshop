@extends('admin.layout.admin')

@section('title')
<title>Add Product</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        @include('admin.partials.content-header', ['name' => 'Product', 'key' => 'List'])
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('product.create')}}" class="btn btn-success float-right m-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Feature Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($categories as $cate) --}}
                            <tr>
                                <th scope="row">1</th>
                                <td>Coat</td>
                                <td>500000</td>
                                <td><img src="" alt=""></td>
                                <td>abc</td>
                                <td>Khoat Nam</td>
                                <td>5</td>
                                <td>Lu Is Vi Ton</td>
                                <td><a href=""
                                        class="btn btn-default">Edit</a>
                                    <a href=""
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                {{-- {{ $categories->links() }} --}}
            </div>
        </div>
    </div>
</div>

@endsection
