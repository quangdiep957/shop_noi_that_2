@extends('..\layouts.app')
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
        <form action="{{route('partners.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tên nhà cung cấp</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="name" name="name" placeholder="" class="form-control" value="{{old('name')}}">
                  
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Phone</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="email-input" name="phone" placeholder="" class="form-control" value="{{old('phone')}}">
                </div>
            </div>
        
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="disabled-input" name="email" placeholder=""  class="form-control" required value="{{old('email')}}">
                </div>
               
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">website</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="disabled-input" name="website" placeholder=""  class="form-control" required value="{{old('website')}}">
                </div>
               
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">MÔ TẢ</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="description" id="textarea-input" rows="9" placeholder="" class="form-control">{{old('description')}}</textarea>
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