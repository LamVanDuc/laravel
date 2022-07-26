@extends('products.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Add Product</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px">
            <a class="btn btn-primary" herf="{{route('products.index')}}">Back</a>
        </div>
    </div>

    @if($error->any())
        <div class="alert-danger">
            <strong>Oop!</strong> There were some problem with your input.<br><br>
            <ul>
                @foreach($error->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <from action="{{route('products.store')}}" method="POST">
        @csrf

        <div class="row">
            <div class="form-group">
                <strong>Product Name:</strong>
                <input type="text" name="product_name" class="form-control" placeholder="product Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Description: </strong>
                <textarea class="form-control" style="height:150px" name="product_desc" placeholder="product Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">>
            <div class="form-control">
                <strong>Qty:</strong>
                <input type="number" class="form-control" name="product_qty">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </from>
@endsection
