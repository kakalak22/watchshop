@extends('admin.layout.admin')

@section('title')
<title>List Role</title>
@endsection

@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/product/index/list.js')}}"></script>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        @include('admin.partials.content-header', ['name' => 'Role', 'key' => 'List'])
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('roles.create')}}" class="btn btn-success float-right m-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Role Name</th>
                                <th scope="col">Description Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <th scope="row">{{$role->id}}</th>
                                <td>{{$role->name}}</td>
                                <td>{{$role->display_name}}</td>
                                <td><a href=""
                                        class="btn btn-default">Edit</a>
                                        <a data-url="" href="" class="btn btn-danger action_delete">Delete</a>
                                </td>
                            </tr>

                            @endforeach
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
