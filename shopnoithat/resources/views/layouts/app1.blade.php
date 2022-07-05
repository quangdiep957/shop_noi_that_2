
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout Page - Ustora Demo</title>
    
    <!-- Google Fonts -->

    <link href="{{'http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600'}}" rel='stylesheet' type='text/css'>
    <link href="{{'http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300'}}" rel='stylesheet' type='text/css'>
    <link href="{{'http://fonts.googleapis.com/css?family=Raleway:400,100'}}" rel='stylesheet' type='text/css'>
    <script src="{{'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js'}}"></script>
    <link rel="stylesheet" href="{{'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css'}}">
    <link rel="stylesheet" href="{{'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css'}}">
    
    <!-- Bootstrap -->
    <link rel=" stylesheet" type="text/css" href="{{asset('css/tintuc1.css')}}" />
    <script href="{{'https://code.jquery.com/jquery-3.6.0.min.js'}}"></script>
    <script type="text/javascript" src="{{asset('js/web.js')}}"></script>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'}}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="{{'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'}}" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="{{'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'}}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/quantity.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/main2.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                           
                           @php $user=session()->get(key:'user');
                            @endphp
                           
                           
                             
                               @if($user!=null)
                               <li><a href=""><i class="fa fa-user">{{  $user['name']}}</i>
                                </a></li>
                              
                            
                             <li><a href="{{asset('remove')}}/{{$user['id']}}"><i class="fa fa-user"></i> Logout</a></li>
                             @else
                             <li><a href="{{asset('customers')}}"><i class="fa fa-user">login</i>
                             @endif
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                    <img src="{{asset('./img/Screenshot (684).png')}}" /> 
                    </div>
                </div>
              
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt">đ</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
               
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{asset('/client/home')}}">Home</a></li>
                        <li><a href="{{asset('/client/product')}}">Product</a></li>
                        <li><a href="{{asset('/client/detail')}}">Single product</a></li>
                        <li><a href="{{asset('cart')}}">Cart</a></li>
                        <li><a href="{{asset('checkout')}}">Checkout</a></li>
                        <li><a href="{{asset('client/blog')}}">Blog</a></li>
                        <li><a href="{{asset('client/contact')}}">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
  
                                @yield('content')
<div class="container">
        <section class="section brands">
            <div class="container-fluid text-center">
                <h2 class="section-title">
                    NGƯỜI NỔI TIẾNG TIN DÙNG
                </h2>
                <span>
                Chọn lựa từ các thương hiệu sản phẩm cao cấp và tiết kiệm nhất
                </span>
            </div>
            
            <div class="brand-layout container">
                <div class="glide" id="glide1">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/169.png')}}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/170.png')}}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/171.png')}}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/173.png')}}" alt="">
                            </li>

                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/175.png')}}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/176.png')}}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/177.png')}}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/178.png')}}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/180.png')}}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{asset('./img/nguoinoitieng/181.png')}}" alt="">
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{asset('js/glide.js')}}">
        </script>
</div>
<div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                    <img src="{{asset('./img/logo-f.png')}}" style="float: left;
                        width: 160px;
                        overflow: hidden;                      
                        margin-right: 68px;
                        font-size: 13px;
                        background-size: auto 80px;"/> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                           @foreach($categories as $cat)
                                        <li><a href="#">{{$cat->name}}</a></li>
                            @endforeach
                         
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="{{'https://code.jquery.com/jquery.min.js'}}"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="{{'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'}}"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    
    
    <!-- jQuery easing -->
    <script src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>
    
    <!-- Main Script -->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="{{asset('js/bxslider.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/script.slider.js')}}"></script>
  </body>
</html>