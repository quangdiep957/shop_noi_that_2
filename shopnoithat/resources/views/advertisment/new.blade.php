@extends('..\layouts.app')
@section('content')
<ul>
    @foreach($errors->all() as $error)

    <li>{{$error}}</li>


    @endforeach
</ul><div class="card">
    <div class="card-header">
   
    </div>
    <div class="card-body card-block">
        <form action="{{route('advertisments.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Nội dung</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="content" name="content" placeholder="Text" class="form-control" value="{{old('content')}}">
                </div>
            </div>
            
            <div class="form-group row">
                    <label class="col-sm-2" for="phone">Thời gian bắt đầu</label>
                    <input class="col-sm-10 form-control" name="starttime" type="date" placeholder="Năm sinh" value="{{old('starttime')}}"/>
                    
            </div>
            <div class="form-group row">
                    <label class="col-sm-2" for="email">Thời gian kết thúc</label>
                    <input class="col-sm-10 form-control" type="date" name="endtime" placeholder="Năm sinh" value="{{old('endtime')}}"/>
                    
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Mô tả</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="description" name="description" placeholder="Text" class="form-control" value="{{old('description')}}">
                </div>
            </div>
            <div class="card-footer">
        <button type="submit" name="add" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
        </form>
        <a href="IndexProduct.php">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> BACK
            </button>
        </a>
    </div>
    
</div>    
@endsection