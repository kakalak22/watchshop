@extends('layout')
@section('title')
<title>List of product</title>
@endsection
@section('content')
    <!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<?php $count = 0; ?>
				@foreach ($cate as $item)
				<?php if($count == 1) break; ?>
					<ol class="breadcrumb">
						<li><a href="{{URL::to('/home')}}">Home</a></li>
						<li class="active">{{$item->Category->name}}</li>
					</ol>
				<?php $count++; ?>
				@endforeach
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--prdt-starts-->
	<div class="prdt"> 
		<div class="container">
			<div class="prdt-top">
				<div class="col-md-9 prdt-left">
					<div class="product-one">
						@foreach ($cate as $item)
						<div class="col-md-4 product-left p-left">
							<div class="product-main simpleCart_shelfItem">
								<a href="{{URL::to('/product-details/'.$item->id)}}" class="mask"><img class="img-responsive zoom-img" src="{{URL::to($item->feature_image)}}" alt="" /></a></a>
								<div class="product-bottom">
									<h3>{{$item->name}}</h3>
									<a href="{{URL::to('/product-details/'.$item->id)}}"><p>Explore Now</p></a>
									<h4><a class="item_add" href="#" 
										data-url="{{URL::to('/add-to-cart/'.$item->id)}}";
										><i></i></a> <span class=" item_price">{{number_format($item->price)}} đ</span></h4>
								</div>
								<div class="srch srch1">
									<span>-50%</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="col-md-3 prdt-right">
				<div class="w_sidebar">
					<section  class="sky-form">
						<h4>Catogories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>
							</div>
							<div class="col col-4">								
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Women Watches</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids Watches</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Men Watches</label>			
							</div>
						</div>
					</section>
					<section  class="sky-form">
						<h4>Brand</h4>
						<div class="row1 row2 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sonata</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Titan</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casio</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Omax</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fastrack</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sports</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fossil</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Maxima</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yepme</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Citizen</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Diesel</label>									
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<!--product-end-->
@endsection