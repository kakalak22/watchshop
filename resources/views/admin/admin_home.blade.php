@extends('admin.layout.admin')

@section('title')
<title>Main Admin</title>
@endsection

@section('content')
<div class="content-wrapper">
    @include('admin.partials.content-header', ['name' => 'Home', 'key' => 'home'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
