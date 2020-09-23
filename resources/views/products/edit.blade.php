@extends('layouts.dashboard')
  @section('content')
    <div class="col-md-2"></div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row ">
                        <div class="col-md-12 procss">
                            <h2 class="procss2">Edit Product</h2>
                            <a class="btn btn-primary procss3"  href="{{ route('products.index') }}"> Back</a>
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
                
                <form action="{{ route('products.update',$product->id) }}" method="POST" name="edit">
                    @csrf
                    @method('PUT')
                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{-- <label for="exampleInputName1">Title</label> --}}
                                <strong>Title:</strong>
                                <input type="text" class="form-control" placeholder="title" name="title" value="{{ $product->title }}">
                            </div>
                        </div>
                   
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Price:</strong>
                                <input type="text" class="form-control"  placeholder="price" name="price" value="{{ $product->price }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>City:</strong>
                                <input type="text" class="form-control"  placeholder="city" name="city" value="{{ $product->city }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>No Of Days:</strong>
                                <input type="text" class="form-control" placeholder="Location" name="no_of_days" value="{{ $product->no_of_days }}">
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <strong>Uploaded file:</strong>
                                <div class="row">
                                    <div class="input-group col-xs-6 col-md-6">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value="{{ $product->image }}">
                                    </div>
                                    <div class="input-group col-xs-6 col-md-6">
                                        <span class="input-group-append"> --}}
                                            {{-- <button type ="file" class="file-upload-browse btn btn-info" id="imgupload" name="image">
                                                Upload file</button> --}}
                                            {{-- <input type="file" id="imgupload" name="image" >
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="image" class="file-upload-default" id="fileUploadInput" style="display:none">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" id ="showFileName" disabled placeholder="Upload gdfgdsgsdImage" name="image">
                                  <span class="input-group-append">
                                    <button id="uploadButton" class="file-upload-browse btn btn-info" type="button">Upload</button>
                                  </span>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" rows="2" name="description" value="{{ $product->description }}"></textarea>
                            </div>
                        </div>
                      
                        
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                    </div>
                
                </form>

                
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
@endsection

