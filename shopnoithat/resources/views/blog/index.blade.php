
@extends('..\layouts.app')
@section('content')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <button class="btn btn-danger "> <a href="{{route('blog.create')}}">ADD <i class="far fa-newspaper" style="color:green;margin-left:5px"></i></a></button>
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
                                                 
                                                <th>Tiêu đề</th>  
                                                <th>Mô tả</th>
                                                <th>Ảnh</th>
                                                <th>Email</th>
                                             
                                               <th></th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                        @foreach($blogs as $blog) 
                                               <tr>
                                              
                                                 <td>{{$blog->tieude}}</td>
                                                 <td>{{$blog->mota}}</td>
                                                 <td>{{$blog->email}}</td>
                                                 <td><td><img src="{{asset('uploads/blog/')}}/{{$blog->id}}.jpg" width="80",height="50"></td></td>
                                                 <td><a href="{{route('blog.edit',$blog->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                                                 <td>
                                                     <form method="POST" action="{{route('blog.destroy',$blog->id)}}" onsubmit="return(confirm('ban co that su muon xoa'))">@method('DELETE')
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
                        {{$blogs->onEachSide(10)->links("pagination::bootstrap-4")}}
            </div>  
                              
                        


@endsection
