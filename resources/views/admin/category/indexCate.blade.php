@extends('admin.layout.admin')

@section('title')
<title>Main Admin</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        @include('admin.partials.content-header', ['name' => 'category', 'key' => 'List'])
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('categories.create')}}" class="btn btn-success float-right m-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $cate)
                            <tr>
                                <th scope="row">{{$cate->id}}</th>
                                <td>{{$cate->name}}</td>
                                <td><a href="{{ route('categories.edit', ['id' => $cate->id]) }}"
                                        class="btn btn-default">Edit</a>
                                    <a href="{{ route('categories.delete', ['id' => $cate->id]) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
