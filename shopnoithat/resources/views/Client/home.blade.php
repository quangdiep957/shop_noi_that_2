@extends('..\layouts.app1')
@section('content')

    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="{{asset('./img/img_sp/115.jpg')}}" alt="Slide">
						
					</li>
					<li><img src="{{asset('./img/img_sp/136 (1).jpg')}}" alt="Slide">
						
					</li>
					<li><img src="{{asset('./img/img_sp/136.jpg')}}" alt="Slide">
						
					</li>
					<li><img src="{{asset('./img/img_sp/223.jpg')}}" alt="Slide">
					
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sản Phẩm Nổi bật</h2>
                        <div class="product-carousel">
                                    @foreach($productnew as $product)
                                     <div class="single-product">
                                        <div class="product-f">
                                            <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>
                                
                                            <h2 style="text-align: center;"><a href=""></a>{{$product->name}}</h2>
                                
                                        <div class="product-carousel-price" style="text-align: center;">
                                        <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                                        </div> 
                                     </div>
                                     @endforeach
                                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list owl-carousel owl-theme owl-responsive-1000 owl-loaded">
                            <img src="{{asset('./img/img_sp/danhmuc/ban-da.jpg')}}" alt="">
                            <img src="{{asset('./img/img_sp/danhmuc/ban-ke.jpg')}}" alt="">
                            <img src="{{asset('./img/img_sp/danhmuc/tranh-treo.png')}}" alt="">
                            <img src="{{asset('./img/img_sp/danhmuc/ghe-sofa.jpg')}}" alt="">
                            <img src="{{asset('./img/img_sp/danhmuc/giuong.jpg')}}" alt="">            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                      
                            <div class="single-wid-product">
                            @foreach($productsale as $product)
                           <a href=""><img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" class="product-thumb" style="height:60px"></a>
                            <h2><a href="">{{$product->name}}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                            <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>    
                        @endforeach                        
                        </div>
                          
                        
                        
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                       
                            <div class="single-wid-product">
                            @foreach($productview as $product)
                           <a href="single-product.php?MASP='.$row1['MASP'].'"><img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" class="product-thumb" style="height:60px"></a>
                          <h2><a href="">{{$product->name}}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                           <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>   
                            @endforeach                             
                        </div>
                           
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                      
                            <div class="single-wid-product">
                            @foreach($productnew as $product)
                            <a href="single-product.php?MASP='.$row1['MASP'].'"><img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" class="product-thumb" style="height:60px"></a>
                          <h2><a href="">{{$product->name}}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                           <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>    
                            @endforeach                            
                        </div>
                          
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->

@endsection