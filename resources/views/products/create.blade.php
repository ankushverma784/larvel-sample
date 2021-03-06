@extends('layouts.dashboard')
 
@section('content')

                <div class="col-md-2"></div>
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">

                                    <h4 class="card-title"><h2>Add New Product</h2></h4>
                                </div>
                            {{-- <p class="card-description"> Basic form elements </p> --}}
                                <div class="col-md-2">
                                        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
                                        
                            <form  class="forms-sample" action="{{ route('products.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="title" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Description</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="2" name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Price</label>
                                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="price" name="price" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">City</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="city" name="city" >
                                    </div>
                                    <div class="form-group">
                                        <label  >File upload</label>
                                        <input type="file" name="image" class="file-upload-default" id="fileUploadInput" style="display:none">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" id ="showFileName" disabled placeholder="Upload Image" name="image">
                                            <span class="input-group-append">
                                            <button id="uploadButton" class="file-upload-browse btn btn-info" type="button">Upload</button>
                                            </span>
                                        </div>
                                        </div>

                                    <div class="form-group">
                                        <label for="exampleInputCity1">No of Days</label>
                                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location" name="no_of_days">
                                    </div>
                                
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                    </div>
                </div>
                <div class="col-md-2"></div>

        
@endsection

