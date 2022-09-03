@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="text-center">
            <h2>Add New Product</h2>
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
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mt-2">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group mt-2">
                <strong>Price:</strong>
                <input type="number" class="form-control" name="price" placeholder="price">
            </div>
            <div class="form-group mt-2">
                <strong>UPC:</strong>
                <input type="number" class="form-control" name="upc" placeholder="upc">
            </div>
            <div class="form-group mt-2">
                <strong>Status:</strong>
                <input type="text" class="form-control" name="status" placeholder="status">
            </div>
            <div class="form-group mt-2">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary mt-3 text-center">Submit</button>
            </div>
        </div>
    </div>     
</form>
@endsection