@extends('app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
 <div class="pull-left">
 <h2> Edit product</h2>
 </div>
 <div class="pull-right">
<a class="btn btn-primary" href="{{url('/')}}"> Back</a>
 </div>
    </div>
</div>
<form action="{{route('update',$product->id )}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Name:</strong>
        <input type="text" name="name" class="form-control" value= "{{$product->name}}" placeholder="Name">
         </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
           <strong>Detail:</strong>
           <textarea name="detail" class="form-control" placeholder="DEtail"  style="height: 150px">{{$product->detail}}</textarea>
            </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
           <strong>Image:</strong>
           <input type="file" name="image" class="form-control" placeholder="Image">
           <img src="/images/{{$product->image}}" width="300px">
            </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
           </div>
    </div>
  </form>
</div>
