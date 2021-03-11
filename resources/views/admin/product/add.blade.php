@extends('admin.layout.admin')

@section('title')
<title>Add Product</title>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

<style>

</style>


@section('content')
<div class="content-wrapper">
    <div class="content-header">
        @include('admin.partials.content-header', ['name' => 'Product', 'key' => 'Add'])
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <form action="" method="POST" enctype="multipart/form-data">
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

                                <!-- <select class="form-control" multiple="multiple">
                                    <option selected="selected">orange</option>
                                    <option>white</option>
                                    <option selected="selected">purple</option>
                                </select> -->


                                <div class="form-group">
                                    <label>Descriptions:</label>
                                    <textarea type="text" name="content" class="form-control"
                                        placeholder="Enter Descriptions"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Category:</label>
                                    <input type="text" name="category_id" class="form-control select2_init"
                                        placeholder="Enter Category">
                                </div>

                                <div class="form-group">
                                    <label>Brand:</label>
                                    <input type="text" name="brand_id" class="form-control select2_init"
                                        placeholder="Enter Brand">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quantity:</label>
                                    <input type="text" name="quantity" class="form-control"
                                        placeholder="Enter Quantity">
                                </div>

                                <div class="form-group">
                                    <label>New:</label>
                                    <input type="text" name="new" class="form-control" placeholder="Enter New">
                                </div>

                                <div class="form-group">
                                    <label>Feature Image:</label>
                                    <input type="file" name="feature_image" class="form-control-file"
                                        placeholder="Choose Feature Image">
                                </div>

                                <div class="form-group">
                                    <label>Detailed Images:</label>
                                    <input type="file" multiple name="image_id[]" class="form-control-file"
                                        placeholder="Choose Feature Image">
                                </div>

                                <button type="submit" class="btn btn-primary float-right ">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(function () {
        $(".select2_init").select2({
            placeholder: "Slect a state",
            allowClear: true
        })
        console.log("aa");
    });
</script>
@endsection
