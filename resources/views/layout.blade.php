<!DOCTYPE html>
<html>

<head>
    <title>Luxury Watches | Home</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{asset('frontend/js/jquery-1.11.0.min.js')}}"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
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
                    <ul class="nav navbar-nav">
                        @if(Session::has('user'))
                        <li>
                            <a href="">
                                <span class="glyphicon glyphicon-user"> Hi {{Session::get('user')['username']}}</span>
                            </a>

                        </li>
                        <li>
                            <a href="/user/logout"><span class="glyphicon glyphicon-log-in"> Logout</span></a>
                        </li>

                        @else
                        <li><a href="/user/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="/user/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>

                        @endif
                    </ul>


                </div>
                <div class="col-md-6 top-header-left">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href=""><i class="fa fa-envelope"></i> Contact</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/show-cart')}}"><span class="glyphicon glyphicon-shopping-cart"></span>Cart(0)</a>
                        </li>


                    </ul>
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
    <hr>

    <!--information-starts-->
    <div class="information">
        <div class="container">
            <div class="infor-top" style="background-color: black;">
                <div class="col-md-3 infor-left">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#"><span class="fb"></span>
                                <h6>Facebook</h6>
                            </a></li>
                        <li><a href="#"><span class="twit"></span>
                                <h6>Twitter</h6>
                            </a></li>
                        <li><a href="#"><span class="google"></span>
                                <h6>Google+</h6>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="#">
                                <p>Specials</p>
                            </a></li>
                        <li><a href="#">
                                <p>New Products</p>
                            </a></li>
                        <li><a href="#">
                                <p>Our Stores</p>
                            </a></li>
                        <li><a href="contact.html">
                                <p>Contact Us</p>
                            </a></li>
                        <li><a href="#">
                                <p>Top Sellers</p>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="account.html">
                                <p>My Account</p>
                            </a></li>
                        <li><a href="#">
                                <p>My Credit slips</p>
                            </a></li>
                        <li><a href="#">
                                <p>My Merchandise returns</p>
                            </a></li>
                        <li><a href="#">
                                <p>My Personal info</p>
                            </a></li>
                        <li><a href="#">
                                <p>My Addresses</p>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Store Information</h3>
                    <h4>The company name,
                        <span>Lorem ipsum dolor,</span>
                        Glasglow Dr 40 Fe 72.</h4>
                    <h5>+955 123 4567</h5>
                    <p><a href="mailto:example@email.com">contact@example.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--information-end-->
    <!--footer-starts-->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-6 footer-left">
                    © 2021 Watch Shop. All Rights Reserved
                </div>
                <div class="col-md-6 footer-right">
                    Design by <a href="http://w3layouts.com/"
                            target="_blank">FPT Aptech</a>
                </div>
                <div class="clearfix"></div>
            </div>
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
				swal({
				title: "Added to cart!",
				text: "Your cart has been updated!",
				icon: "success",
				timer: 1000
});
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
