@extends('..\layouts.app1')
@section('content')
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
        <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Giường ngủ</a></li>
    <li><a data-toggle="tab" href="#menu1">Ghế sofa</a></li>
    <li><a data-toggle="tab" href="#menu2">Đồng hồ treo tường</a></li>
    <li><a data-toggle="tab" href="#menu3">Bàn ăn mặt đá</a></li>
    <li><a data-toggle="tab" href="#menu4">Ghế thư giãn</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    
      <div class="row">
                   @foreach($pros1 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                          <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                            <form action="{{asset('client/Add_Cart/'.$product->id)}}" >
                                  @csrf
                                  
                                   <button class="" type="submit" >Add to cart</button>
                                 
                              </form>   
                            </div>                       
                        </div>
                    </div>
                      @endforeach
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
     
      <div class="row">
                   @foreach($pros2 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                          <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                                 <form action="{{asset('client/Add_Cart/'.$product->id)}}" >
                                  @csrf
                                  
                                   <button class="" type="submit" >Add to cart</button>
                                 
                              </form>   
                            </div>                       
                        </div>
                    </div>
                      @endforeach
    </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      
      <div class="row">
                   @foreach($pros3 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                          <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                                 <form action="{{asset('client/Add_Cart/'.$product->id)}}" >
                                  @csrf
                                  
                                   <button class="" type="submit" >Add to cart</button>
                                 
                              </form>   
                            </div>                       
                        </div>
                    </div>
                      @endforeach
    </div>
    </div>
    <div id="menu3" class="tab-pane fade">
     
      <div class="row">
                   @foreach($pros4 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                          <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                                 <form action="{{asset('client/Add_Cart/'.$product->id)}}" >
                                  @csrf
                                  
                                   <button class="" type="submit" >Add to cart</button>
                                 
                              </form>   
                            </div>                       
                        </div>
                    </div>
                      @endforeach
    </div>
    </div>
    <div id="menu4" class="tab-pane fade">
   
      <div class="row">
                   @foreach($pros5 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                          <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                                 <form action="{{asset('client/Add_Cart/'.$product->id)}}" >
                                  @csrf
                                  
                                   <button class="" type="submit" >Add to cart</button>
                                 
                              </form>   
                            </div>                       
                        </div>
                    </div>
                      @endforeach
    </div>
    </div>
  </div>

  </div>
</div>
        
        </div>
    </div>
@endsection
