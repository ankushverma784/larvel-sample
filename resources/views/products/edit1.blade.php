@extends('layouts.dashboard')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>  
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form class="forms-sample" action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control"  placeholder="title" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" rows="2" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Price</label>
                    <input type="text" class="form-control"  placeholder="price" name="price" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">City</label>
                    <input type="text" class="form-control"  placeholder="city" name="city" >
                </div>
                <div class="form-group">
                    <label  >File upload</label>
                   
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                           
                            {{-- <button type ="file" class="file-upload-browse btn btn-info" id="imgupload" name="image">
                                Upload file</button> --}}
                            <input type="file" id="imgupload" name="image">
                        </span>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputCity1">No of Days</label>
                    <input type="text" class="form-control" placeholder="Location" name="no_of_days">
                </div>
            
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
    </form>
    </div>
@endsection