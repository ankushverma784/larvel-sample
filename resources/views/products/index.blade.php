@extends('layouts.dashboard')
 
@section('content')

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="card-title">Show Product Table</h4>
                    </div>
                    <div class="col-md-2">
                            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                                
                    </div>

                </div>
                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                               @endif
                {{-- <p class="card-description">  </p> --}}
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>title</th>
                        <th>price</th>
                        <th>description</th>
                        <th>image</th>
                        <th>city</th>
                        <th>no_of_days</th>
                        <th width="280px">Action</th>                
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->image }}</td>
                        <td>{{ $product->city }}</td>
                        <td>{{ $product->no_of_days }}</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
            
                                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                
                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                {!! $products->links() !!}
            </div>
          </div>
        </div>

@endsection
