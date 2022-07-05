 @extends('../layouts.app1')
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
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="shop.php">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                       
                        @foreach($pros1 as $pro) 
                           
                            <div class="thubmnail-recent">
                            <img src="{{asset('uploads')}}/{{$pro->id}}.jpg" alt="" style="height:100px">
                            <h2 class="product-name">{{$pro->name}}</h2>
                            <div class="product-inner-price">
                            <ins>{{number_format($pro->price)}}đ</ins> <del>{{number_format($pro->old_price)}}đ</del>
                            </div>                
                        </div>
                        @endforeach
                        
                    </div>
                    
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                           
                        </div>
                   
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="product-images">
                            <div class="product-main-img">
                                <img src="{{asset('uploads')}}/{{$products->id}}.jpg" alt="">
                            </div>
                          
                
                                <div class="product-gallery">
                                <img src="{{asset('uploads')}}/{{$pro->id}}.jpg" alt="">
                                <img src="{{asset('uploads')}}/{{$pro->id}}.jpg" alt="">
                                <img src="{{asset('uploads')}}/{{$pro->id}}.jpg" alt="">
                                </div>
                      
                      </div>
                    </div>
                      <div class="col-sm-6">
                          <div class="product-inner">
                              <h2 class="product-name">{{$products->name}}</h2>
                              <div class="product-inner-price">
                              <ins>{{number_format($products->price)}}đ</ins> <del>{{number_format($products->old_price)}}đ</del>
                              </div>    
                              
                              <form action="{{asset('client/Add_Cart/'.$products->id)}}"  class="cart">
                                  @csrf
                                  <div class="quantity">
                                      <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                  </div>
                                  <a> <button class="add_to_cart_button" type="submit" >Add to cart</button></a>
                                 
                              </form>   
                              
                              <div class="product-inner-category">
                                  <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                              </div> 
                              
                              <div role="tabpanel">
                                  <ul class="product-tab" role="tablist">
                                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                  </ul>
                                  <div class="tab-content">
                                      <div role="tabpanel" class="tab-pane fade in active" id="home">
                                          <h2>Product Description</h2>  
                                          <p>
                                          {{$products->description}}
                                          </p>
                                      </div>
                                      
              
                <div role="tabpanel" class="tab-pane fade" id="profile">
                                          <h2>Reviews</h2>
                                          <div class="submit-review">
                                              <form action="" method="POST">
                                              <p><label for="name">Name</label> <input name="name" type="text"></p>
                                              <p><label for="email">Email</label> <input name="email" type="email"></p>
                                              <div class="rating-chooser">
                                                  <p>Your rating</p>

                                                  <div class="rating-wrap-post">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                  </div>
                                              </div>
                                              <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                              <p><input type="submit" value="Submit"></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php
                             /*
                              if(isset($_POST['review']))
                              {
                              $email=$_POST['email'];
                              $mota=$_POST['review'];
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                              $date=date("Y-m-d H:i:s");
                              $ten=$_POST['name'];
                              $sql="insert into danhgia(email,mota,datetime,ten) values('$email','$mota','$date','$ten')";
                              $val=mysqli_query($conn,$sql) or die ('Lỗi');
                              
                              }*/
                              ?>

                              
                          </div>
                      </div>
                  </div>                      
                 
<div class="blog-post-area" >

<h2 class="title text-center">Latest From our Blog</h2>
@foreach($comments as $comment)

        <div class="single-blog-post">
        <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i> {{$comment->customer_id}}</li>
                    <li><i class="fa fa-clock-o"></i>{{$comment->commented_date}}</li>
                
                </ul>
                <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                </span>
        </div>
        <p>{{$comment->comment}}</p>
        </div>



                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                            @foreach($pros1 as $pro)
                            <div class="single-product">
                                    <div class="product-f-image">
                                    <img src="img_sp/'.$row1['ANH'].'" alt="">
                                        <div class="product-hover">
                                          
                                            <a href="single-product.php?MASP='.$row1['MASP'].'" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2 class="product-name">{{$pro->name}}</h2>
                            <div class="product-inner-price">
                            <ins>{{number_format($pro->price)}}đ</ins> <del>{{number_format($pro->old_price)}}đ</del>
                            </div>        
                                </div>
                          @endforeach
        @endforeach 
                                  
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


@endsection