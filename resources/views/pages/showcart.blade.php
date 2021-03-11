@extends('layout')
@section('content')
    <!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Checkout</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Product</th>
								<th>Quantity</th>
								<th class="text-center">Price</th>
								<th class="text-center">Total</th>
								<th> </th>
							</tr>
						</thead>
						<tbody>
							@foreach (Cart::content() as $item)
							<tr>
								<td class="col-sm-8 col-md-6">
								<div class="media">
									<a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{$item->options->image}}" style="width: 72px; height: 72px;"> </a>
									<div class="media-body">
										<h4 class="media-heading"><a href="#">{{$item->name}}</a></h4>
										<h5 class="media-heading"> by <a href="#">{{$item->options->brand}}</a></h5>
									</div>
								</div></td>
								<td class="col-sm-1 col-md-1" style="text-align: center">
								<input type="qty" class="form-control" id="exampleInputEmail1" value="{{$item->qty}}">
								</td>
								<td class="col-sm-1 col-md-1 text-center"><strong>{{number_format($item->price)}} VND</strong></td>
								<td class="col-sm-1 col-md-1 text-center"><strong>{{number_format($item->price * $item->qty)}} VND</strong></td>
								<td class="col-sm-1 col-md-1">
								<a type="button" class="btn btn-danger" href="{{URL::to('/delete-cart-item/'.$item->rowId)}}">
									<span class="glyphicon glyphicon-remove"></span> Remove
								</a></td>
							</tr>
							@endforeach
							<tr>
								<td>   </td>
								<td>   </td>
								<td>   </td>
								<td><h5>Subtotal</h5></td>
								<td class="text-right"><h5><strong>{{number_format(Cart::subtotal())}} VND</strong></h5></td>
							</tr>
							<tr>
								<td>   </td>
								<td>   </td>
								<td>   </td>
								<td><h5>Estimated shipping</h5></td>
								<td class="text-right"><h5><strong>Freeship</strong></h5></td>
							</tr>
							<tr>
								<td>   </td>
								<td>   </td>
								<td>   </td>
								<td><h3>Total</h3></td>
								<td class="text-right"><h3><strong>{{number_format(Cart::total())}} VND</strong></h3></td>
							</tr>
							<tr>
								<td>   </td>
								<td>   </td>
								<td>   </td>
								<td>
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
								</button></td>
								<td>
								<a type="button" class="btn btn-success" href = "{{URL::to('/checkout')}}">
									Checkout <span class="glyphicon glyphicon-play"></span>
								</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--end-ckeckout--> 
@endsection