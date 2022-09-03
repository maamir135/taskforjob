@extends('products.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="text-center">
                <h2>Edit Product</h2>
            </div>
            <div class="text-end">
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
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
    
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Price:</strong>
                    <input class="form-control" name="price" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                    <strong>UPC:</strong>
                    <input class="form-control" name="upc" value="{{ $product->upc }}" placeholder="upc">
                </div>
                <div class="form-group">
                    <strong>status:</strong>
                    <input class="form-control" name="status" value="{{ $product->status }}" placeholder="status">
                </div>
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $product->image }}" width="300px">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary mt-3 text-center">Submit</button>
                </div>
            </div>
        </div>
         <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div> -->
     
    </form>
@endsection