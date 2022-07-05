
@extends('..\layouts.app')
@section('content')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <button class="btn btn-danger "> <a href="{{route('products.create')}}">ADD <i class="far fa-newspaper" style="color:green;margin-left:5px"></i></a></button>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                                            <tr>
                                                <th>Tên sản phẩm</th> 
                                                <th>Mã loại sản phẩm</th>  
                                                <th>Mã Kiểu</th>
                                                <th>Size</th>
                                                <th>Giá nhập</th>
                                                <th>Giá bán</th>
                                                <th>Mô tả</th>
                                                <th>Lượt xem</th>
                                                <th>Mã nhà cung cấp</th>
                                               <th>Ảnh</th>
                                               <th></th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                        @foreach($products as $pro) 
                                               <tr>
                                              
                                                 <td>{{$pro->name}}</td>
                                                 <td>{{$pro->categorie_id}}</td>
                                                 <td>{{$pro->style_id}}</td>
                                                 <td>{{$pro->size}}</td>
                                                 <td>{{$pro->price}}</td>
                                                 <td>{{$pro->old_price}}</td>
                                                 <td>{{$pro->description}}</td>
                                                 <td>{{$pro->viewed}}</td>
                                                 <td>{{$pro->partner_id}}</td>
                                                 <td><img src="{{asset('uploads')}}/{{$pro->id}}.jpg" width="80",height="50"></td>
                                                 
                                                
                                                 <td><a href="{{route('products.edit',$pro->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                                                 <td>
                                                     <form method="POST" action="{{route('products.destroy',$pro->id)}}" onsubmit="return(confirm('ban co that su muon xoa'))">@method('DELETE')
                                                        @csrf
                                                        <input type="submit" value="xoa" class="btn btn-danger"/>
                                                    </form>
                                                </td>

                                               </tr>
                                               @endforeach
                                            
                                        
                                           
                                        </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
        </div>
        <!-- /.row -->

        <div>
                        {{$products->onEachSide(10)->links("pagination::bootstrap-4")}}
            </div>  
                              
                        


@endsection

