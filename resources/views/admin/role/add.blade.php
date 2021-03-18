@extends('admin.layout.admin')

@section('title')
<title>Add Roles</title>
@endsection

@section('css')
<link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('admins/user/add/add.css')}}" rel="stylesheet" />

@endsection



@section('content')
<div class="content-wrapper">
    <div class="content-header">
        @include('admin.partials.content-header', ['name' => 'Roles', 'key' => 'Add'])
    </div>
    <div class="container">
        <form action="{{ route('users.store')}}" method="POST" enctype="multipart/form-data">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Role Name:</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Role Name" value="{{old('name')}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Decriptions Role:</label>
                                        <textarea name="display_name" class="form-control"
                                            placeholder="Enter Decriptions Role" rows="4"
                                            value="{{old('display_name')}}"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary float-right"
                                        style="margin-bottom: 20px;">Submit</button>
                                </div>
                                <div class="col-md-12">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Primary card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
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
<script src="{{asset('admins/user/add/add.js')}}"></script>


@endsection
