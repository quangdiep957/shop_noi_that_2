@extends('layouts.app')
@section('content')
<ul>
    @foreach($errors->all() as $error)

    <li>{{$error}}</li>


    @endforeach
</ul>
<div class="card">
    <div class="card-header">
        
    </div>
    <div class="card-body card-block">
        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tên sản phẩm</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="name" name="name" placeholder="Text" class="form-control" value="{{old('name')}}">
                  
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="disabled-input" class=" form-control-label">Loại sản phẩm</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="categorie_id">
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="disabled-input" class=" form-control-label">Nhà cung cấp</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="partner_id">
                    @foreach($partners as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="disabled-input" class=" form-control-label">Đặc điểm</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="style_id">
                    @foreach($styles as $style)
                    <option value="{{$style->id}}">{{$style->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">kích thước</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="email-input" name="size" placeholder="size" class="form-control" value="{{old('size')}}">
                </div>
            </div>
        
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">GIÁ NHẬP</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="disabled-input" name="price" placeholder="price"  class="form-control" required value="{{old('price')}}">
                </div>
               
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">GIÁ BÁN</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="disabled-input" name="old_price" placeholder="Disabled"  class="form-control" required value="{{old('old_price')}}">
                </div>
               
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Lượt xem</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="disabled-input" name="viewed" placeholder=""  class="form-control" required value="{{old('viewed')}}">
                </div>
               
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-multiple-input" class=" form-control-label">ẢNH</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-multiple-input" name="avatar" multiple="" class="form-control-file">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">MÔ TẢ</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{old('old_price')}}</textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                <label for="select" class=" form-control-label">Trạng thái</label>
                </div>
                <div class="col-12 col-md-9">
                <select name="TT">
                    <option name="TT" value="TRUE">TRUE</option>
                    <option name="TT" value="FALSE">FALSE</option>
                </select>
                </div>
               
            </div>
            <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
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