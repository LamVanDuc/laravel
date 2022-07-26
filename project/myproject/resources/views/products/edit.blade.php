@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit product</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px">
                <a class="btn btn-primary" href="{{route('products.index')}}">Back</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input. <br><br>
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{$error}}</li>
            </ul>
        </div>
    @endif

    <form action="{{route('products.update',$product->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="form-control">
                    <strong>
                        Product Name:
                    </strong>
                    <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control" placeholder="Product Name">
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-control">
                    <strong>
                        Product Description:
                    </strong>
                    <input type="text" name="product_name" value="{{$product->product_desc}}" class="form-control" placeholder="Product description">
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-control">
                    <strong>
                        Qty:
                    </strong>
                    <input type="text" name="product_name" value="{{$product->product_qty}}" class="form-control" placeholder="Quantity">
                </div>
            </div>
            <div class="col-xs-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
