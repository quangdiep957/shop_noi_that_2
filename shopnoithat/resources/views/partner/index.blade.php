
@extends('..\layouts.app')
@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <button class="btn btn-danger "> <a href="{{route('partners.create')}}">ADD <i class="far fa-newspaper" style="color:green;margin-left:5px"></i></a></button>
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
                                                <th>Tên nhà cung cấp</th> 
                                                <th>Số điện thoại</th>  
                                                <th>Email</th>
                                                <th>Website</th>
                                                <th>Mô tả</th>
                                                <th></th>
                                               
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                        @foreach($partners as $partner) 
                                               <tr>
                                              
                                                 <td>{{$partner->name}}</td>
                                                 <td>{{$partner->phone}}</td>
                                                 <td>{{$partner->email}}</td>
                                                 <td>{{$partner->website}}</td>
                                              
                                                 <td>{{$partner->description}}</td>
                                                
                                                 <td><a href="{{route('partners.edit',$partner->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                                                 <td>
                                                     <form method="POST" action="{{route('partners.destroy',$partner->id)}}" onsubmit="return(confirm('ban co that su muon xoa'))">@method('DELETE')
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
                        {{$partners->onEachSide(10)->links("pagination::bootstrap-4")}}
            </div>  



@endsection

