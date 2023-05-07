<x-app-layout>
  
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss");
  </head>
  <body>
    <div class="container-scroller">

 @include("admin.navbar");




 <div style="position: relative; top:60px;right:-150px">
        
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

        @csrf

    <div>
        <label>Title</label>
        <input style="color: aquamarine" type="text" name="title" value="{{$data->title}}" required>
    </div>
    <div>
        <label>Price</label>
        <input style="color: aquamarine" type="number" name="price" value="{{$data->price}}" required>
    </div> 
    
    <div>
        <label>Deescription</label>
        <input style="color: aquamarine" type="text" name="description" value="{{$data->description}}" required>
    </div>
    <div>
        <label>Offer</label>
        <input style="color: aquamarine" type="number" name="offer" value="{{$data->offer}}" required>
    </div>
    <div>
        <label>Old Image</label>
       <img height="200" width="200" src="/turfimage/{{$data->image}}" alt="">
    </div>
    <div>
        <label>New Image</label>
        <input type="file" name="image" placeholder="write a title" required>
    </div>
    <div>
        <input class="btn btn-primary" style="color: white" type="Submit" value="save">
        
    </div>


    </div>
    </div>

 @include("admin.adminscript");

  </body>