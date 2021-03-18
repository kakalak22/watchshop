@extends('admin.layout.admin')

@section('title')
<title>List Brand</title>
@endsection

@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@10.js')}}"></script>
    <script src="{{ asset('admins/product/index/list.js')}}"></script>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        @include('admin.partials.content-header', ['name' => 'Brand', 'key' => 'List'])
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('brands.create')}}" class="btn btn-success float-right m-2">Add</a>
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
                            @foreach($brands as $br)
                            <tr>
                                <th scope="row">{{$br->id}}</th>
                                <td>{{$br->name}}</td>
                                <td><a href="{{ route('brands.edit', ['id' => $br->id]) }}"
                                        class="btn btn-default">Edit</a>
                                  <a href="" data-url="{{route('brands.delete', ['id' => $br->id])}}" class="btn btn-danger action_delete">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                {{ $brands->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
