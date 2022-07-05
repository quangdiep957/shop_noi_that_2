@extends('..\layouts.app1')
@section('content')
		<div style="width: 100%;padding-top: 50px;">
			<div id ="cten">
				<!-- Cột bên trái -->
				<div id="left">
					<!-- Phần thứ nhất -->
					<div class="head">
						<p>TIN TỨC SỰ KIỆN</p>
					</div>
					<!-- Phần thứ hai -->
					<div id="head2">
					<iframe width="810" height="405" src="https://www.youtube.com/embed/uRrHaJ-A_gs?rel=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
					</div>
					<!-- Phần thứ 3 -->
					<div id="head3" style="height:auto">
						@foreach($blog3 as $blog)
						<div class="row">
							<a href="#">
								<img src="{{asset('uploads/blog')}}/{{$blog->id}}.jpg" width="80%" >
							</a>
							<p style="margin-left:15px;width:65%">
								<a href="#" style="font-weight:bold">{{$blog->tieude}}</a>
							</p>
						</div>
                        @endforeach
						
						
						
					</div>
					<!-- Phần 4 -->
                    @foreach($blog4 as $blog)
							<div class="head4">
							<div class="left4">
								<a href="#"><img src="{{asset('uploads/blog')}}/{{$blog->id}}.jpg" width="100%" height="100%"></a>
							</div>
							<div class="right4">
								<h3>
								<a href="#" style="font-weight:bold">{{$blog->tieude}}</a>
								</h3>
								<p>{{$blog->mota}}</p>
							</div>
						</div>
                        @endforeach
					
					<div id="add">
					<div id="showadd">
						<a href="#">Bấm để xem thêm</a>
					</div>
				</div>
				</div>
				<!-- Cột bên phải -->
				<div class="cot_phai">
					<div class="til">
						<p>DANH MỤC</p>
					</div>
					<div class="phai1">
						<ul>
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;"><a href="#">Cẩm nang nhà đẹp<strong>(132)</strong></a>
							</li>
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;"><a href="#">Mẫu nhà đẹp<strong>(45)</strong></a>
							</li>
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;">	<a href="#">Mẫu thiết kế nhà bếp <strong>(48)</strong></a>
							</li>
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;"><a href="#">Mẫu thiết kế phòng khách <strong>(27)</strong></a>
							</li>
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;"><a href="#">Mẫu thiết kế phòng ngủ <strong>(56)</strong></a>
							</li>
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;">	<a href="#">Mẫu thiết kế phòng ngủ cho bé <strong>(34)</strong></a>
							</li>
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;"><a href="#">Mẹo hay mách bạn<strong>(98)</strong></a>
							</li>
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;">	<a href="#">Phong thủy nội thất<strong>(112)</strong></a>
							</li>						
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;"><a href="#">Trang trí không gian nội thất<strong>(127)</strong></a>
							</li>							
							<li>
								<img src="{{asset('img/star.png')}}" style="width:5%;height: 5%;">	<a href="#">Video<strong>(48)</strong></a>
							</li>
						</ul>
					</div>
					<!-- Phần 2 -->
					<div id="phai2">
						<p>XU HƯỚNG 2021</p>
					</div>
					<!-- Phần 3 -->
					<div id="phai3" style="height:290px">
						<img src="{{asset('uploads/blog/6.jpg')}}" width="100%" height="100%">
						<p>
							<a href="#">ERADO nhà tài trợ vàng liveshow Ý Lan, Vũ Khanh, Hương Lan, Lê Hiếu</a>
						</p>
					</div>
                    @foreach($blogs as $blog)
					<div id="phai4">
							<div id="lt">
								<a href="#">
									<h4>{{$blog->tieude}}</h4>
								</a>
							</div>
							<div id="rt">
								<a href="#">
								<img src="{{asset('uploads/blog')}}/{{$blog->id}}.jpg" width="135" height="85%">
								</a>
							</div>
						</div>
                        @endforeach
					<!-- Phần 4 -->
				
					
				</div>
			</div>
		</div>
	</div>

</body>

@endsection