@extends('layouts.dashboard')
    @section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="card-title">Show Product Table</h4>
                    </div>
                    <div class="col-md-2">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                    </div>
                </div>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>price</th>
                        <th>description</th>
                        <th>image</th>
                        <th>city</th>
                        <th>no_of_days</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->image }}</td>
                            <td>{{ $product->city }}</td>
                            <td>{{ $product->no_of_days }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
