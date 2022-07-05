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
        <form action="{{route('customers.update',[$customers->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @METHOD('PUT')
        @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Họ tên</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="fullname" name="fullname" placeholder="Text" class="form-control" value="{{count($errors)?old('fullname'):$customers->fullname}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Giới Tính</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex"  value="1"{{old('sex')?"checked":""}}>Nam
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" value="0"{{old('sex')?"":"checked"}}>Nữ
                </div>
            </div>
            <div class="form-group row">
                    <label class="col-sm-2" for="DOB">Năm sinh</label>
                    <input class="col-sm-10 form-control" name="DOB" placeholder="Năm sinh" value="{{count($errors)?old('DOB'):$customers->DOB}}"/>
                    
            </div>
            <div class="form-group row">
                    <label class="col-sm-2" for="address">Địa chỉ</label>
                    <input class="col-sm-10 form-control" name="address" placeholder="Địa chỉ" value="{{count($errors)?old('address'):$customers->address}}"/>
                    
            </div>
            <div class="form-group row">
                    <label class="col-sm-2" for="phone">Số điện thoại</label>
                    <input class="col-sm-10 form-control" name="phone" placeholder="Năm sinh" value="{{count($errors)?old('phone'):$customers->phone}}"/>
                    
            </div>
            <div class="form-group row">
                    <label class="col-sm-2" for="email">email</label>
                    <input class="col-sm-10 form-control" name="email" placeholder="Năm sinh" value="{{count($errors)?old('email'):$customers->email}}"/>
                    
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Mô tả</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="description" name="description" placeholder="Text" class="form-control" value="{{count($errors)?old('description'):$customers->description}}">
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