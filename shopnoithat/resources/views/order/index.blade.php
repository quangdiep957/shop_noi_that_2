@extends('..\layouts.app')
@section('content')



     <!-- MAIN CONTENT-->
            
     <div class="main-content">
                <div class="section__content section__content--p30">
                    
                             
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-light table-striped table-hover table-sm table_results ajax w-auto pma_table">
                                    <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <a href="{{route('orders.create')}}"> <i class="zmdi zmdi-plus"></i>ADD</button></a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <form action="" method="POST">
            <div class="row">
                <input class="au-input au-input--xl" type="text" name="Search" placeholder="Search for datas &amp; reports..." />
                <button class="au-btn--submit" type="submit">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
            </form>
                                </div>
                                       
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
                                        @foreach($orders as $order) 
                                               <tr>
                                              
                                                 <td>{{$order->name}}</td>
                                                 <td>{{$order->phone}}</td>
                                                 <td>{{$order->email}}</td>
                                                 <td>{{$order->website}}</td>
                                              
                                                 <td>{{$order->description}}</td>
                                                
                                                 <td><a href="{{route('orders.edit',$order->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                                                 <td>
                                                     <form method="POST" action="{{route('orders.destroy',$order->id)}}" onsubmit="return(confirm('ban co that su muon xoa'))">@method('DELETE')
                                                        @csrf
                                                        <input type="submit" value="xoa" class="btn btn-danger"/>
                                                    </form>
                                                </td>

                                               </tr>
                                               @endforeach
                                            
                                        
                                           
                                        </tbody>
                                    </table>
                                    <div>
                        {{$orders->onEachSide(10)->links("pagination::bootstrap-4")}}
                        </div>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
@endsection