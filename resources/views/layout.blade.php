<!DOCTYPE html>
<html>

<head>
    <title>Luxury Watches | Home :: w3layouts</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{asset('frontend/js/jquery-1.11.0.min.js')}}"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!--start-menu-->
    <script src="https://kit.fontawesome.com/80ea8b739f.js" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/js/simpleCart.min.js')}}"> </script>
    <link href="{{asset('frontend/css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{asset('frontend/js/memenu.js')}}"></script>
    <script>
        $(document).ready(function(){$(".memenu").memenu();});
    </script>
    <!--dropdown-->
    <script src="{{asset('frontend/js/jquery.easydropdown.js')}}"></script>
    <script>
        simpleCart({
    currency: "BTC" // set the currency to pounds sterling
});
    </script>
    <script src="{{asset('frontend/js/sweetalert.min.js')}}"></script>
</head>

<body>
    <!--top-header-->
    <div class="top-header">
        <div class="container">
            <div class="top-header-main">
                <div class="col-md-6 top-header-left">
                    <div class="drop">
                        <i class="fas fa-user" style="color:white; width : 20px"></i>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 top-header-left">
                    <div class="cart box_1">
                        <a href="{{URL::to('/show-cart')}}">
                            <div class="total">
                                <span class="simpleCart_total"></span></div>
                            <img src="{{asset('frontend/images/cart-1.png')}}" alt="" />
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--top-header-->
    <!--start-logo-->
    <div class="logo">
        <a href="{{URL::to('/home')}}">
            <h1>Luxury Watches</h1>
        </a>
    </div>
    <!--start-logo-->
    <!--bottom-header-->
    <div class="header-bottom">
        <div class="container">
            <div class="header">
                <div class="col-md-9 header-left">
                    <div class="top-nav">
                        <ul class="memenu skyblue">
                            <li class="{{ Nav::isRoute('home') }}"><a href="{{URL::to('/home')}}">Home</a></li>
                            @foreach ($product_type as $item)
                            <li class="grid {{ Nav::isResource($item->id, 'product-by-cate', NULL, FALSE) }}"><a
                                    href="{{URL::to('/product-by-cate/'.$item->id)}}">{{$item->name}}</a>
                            </li>
                            @endforeach
                            <li class="grid {{ Nav::isRoute('brand-product') }}"><a
                                    href="{{URL::to('/all-product-by-brand')}}">Brands</a>

                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1 me-one">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                @foreach ($product_brand as $key)
                                                <li><a
                                                        href="{{URL::to('/product-by-brand/'.$key->id)}}">{{$key->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid"><a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 header-right">
                    <form action="/search" class="navbar-form">
                        <div class="search-bar">
                            <div>
                                <input type="text" name="query" class="form-control search-box"
                                    placeholder="Search here">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </div>
                    </form>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--bottom-header-->
    @yield('content')
    <!--information-starts-->

    <!--information-end-->
    <!--footer-starts-->
    <div class="footer">

        <div class="row">
            <!-- FOOTER CONTENT -->

            <footer class="footer-distributed">

                <div class="footer-left">

                    <img src="{{URL::to('src/images/logo.png')}}" style="width: 200px; height:
                    100px;"
                         alt="">

                    <p class="footer-links">
                        <a href="{{ url('/index') }}">Home</a>
                        ·
                        @if (Auth::guest())
                            <a href="{{ url('/register') }}">Sign Up</a>
                            ·
                            <a href="{{ url('/login') }}">Login</a>
                            ·
                        @endif
                        {{-- <a href="{{route('contactUs')}}">Contact</a> --}}
                    </p>

                    <p class="footer-company-name">Develop by Elon Musk &copy; 2021</p>
                </div>

                <div class="footer-center">

                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>23 Temerinska Street</span> Novi Sad, Serbia</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+1 555 123456</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:watch-shop@company.com">watch-shop@company.com</a></p>
                    </div>

                </div>

                <div class="footer-right">

                    <p class="footer-company-about">
                        <span>About the company</span>
                        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>

                    <div class="footer-icons">

                        <a target="_blank" href="https://www.linkedin.com/in/aleksandar-bu%C5%A1baher-430537137/"><i class="fa
                        fa-linkedin"></i></a>
                        <a target="_blank" href="https://github.com/ABusbaher/watch-shop-laravel"><i class="fa fa-github"></i></a>
                        <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>

                    </div>

                </div>

            </footer>
        </div>
    </div>
    <!--footer-end-->
</body>
<script>
    function addToCart(event){
		event.preventDefault();
		let urlCart = $(this).data('url');
		$.ajax({
			type: "GET",
			url: urlCart,
			datatype: 'json',
			success: function (data){
				swal("Added to your cart!", "Your cart has been updated!", "success");
			},
			error: function(){

			}
		});
	}

	$(function (){
		$('.item_add').on('click',addToCart);
	});
</script>

<script>
    var text = $("#product-quantity");
	var form = $("#myform");
	console.log(text);
	text.bind("change keyup", function() {
		if( $(this).val() > 1 )
		$("#myform").submit();
	});
</script>

</html>
