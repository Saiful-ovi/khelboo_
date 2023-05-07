<x-app-layout>
  
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss");
  </head>
  <body>
    <div class="container-scroller">

 @include("admin.navbar");

  
    <div style="position: relative; top:60px;right:-150px">
        
    <form action="{{url('/uploadturf')}}" method="post" enctype="multipart/form-data">

        @csrf

    <div>
        <label>Title</label>
        <input style="color: aquamarine" type="text" name="title" placeholder="write a title" required>
    </div>
    <div>
        <label>Price</label>
        <input style="color: aquamarine" type="number" name="price" placeholder="price" required>
    </div>
    <div>
        <label>Image</label>
        <input type="file" name="image" placeholder="write a title" required>
    </div>
    <div>
        <label>Deescription</label>
        <input style="color: aquamarine" type="text" name="description" placeholder="description" required>
    </div>
    <div>
        <label>Offer</label>
        <input style="color: aquamarine" type="number" name="offer" placeholder="offer" required>
    </div>
    <div>
        <input class="btn btn-primary" style="color: white" type="Submit" value="save">
        
    </div>

    
<br>
    </form>
    <div>

        <table bgcolor="black">
            <tr>
                <th  style="padding: 30px">ID</th>
                <th  style="padding: 30px">Turfs Name</th>
                <th style="padding: 30px">Price</th>
                <th style="padding: 30px">Discription</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Offer</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Action2</th>
            </tr>
            @foreach ($data as $data)
                
          
               <tr align="center">
              <td>{{$data->id}}</td>
              <td>{{$data->title}}</td>
              <td>{{$data->price}}</td>
              <td>{{$data->description}}</td>
              <td><img height="200" width="200" src="/turfimage/{{$data->image}}" alt=""></td>
              <td>{{$data->offer}}</td>
              <td>
                <button type="button" class="btn btn-danger"><a href="{{url('/deleteturf',$data->id)}}">Delete</a></button> 
              </td>

              <td>
                <button type="button" class="btn btn-danger"><a href="{{url('/updateview',$data->id)}}">Update</a></button> 
              </td>
               </tr>
               @endforeach

        </table>
    </div>
    
    </div> 



    </div>


 @include("admin.adminscript");

  </body>
</html>