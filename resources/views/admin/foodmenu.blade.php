<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
  <div class="col-sm-4 offset-md-3"> 
   <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" placeholder="Title" style="background-color: rgb(171, 171, 213)">
   
  </div>


  <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">price</label>
    <input type="text" name="price" class="form-control" placeholder="Price" style="background-color:  rgb(171, 171, 213">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" name="image" class="form-control" style="background-color:  rgb(171, 171, 213"  >
  </div>

   <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">description</label>
    <input type="text" name="description" class="form-control" placeholder="description" style="background-color:  rgb(171, 171, 213">
   
  </div>

  

  <button type="submit" class="btn btn-primary" value="Save">Save</button> 
  {{-- dfdvd  --}}
</form> <br> <br>

   <div style="">
        <table class="table table-hover">
  <thead>
    <tr>
      
      <th  scope="col"><h5 style="color: rgb(255, 189, 47)">Food Name</h5></th>
      <th scope="col"><h5 style="color: rgb(255, 189, 47)">Price</th>
      <th scope="col"><h5 style="color: rgb(255, 189, 47)">Description</th>
        <th scope="col"><h5 style="color: rgb(255, 189, 47)">Image</th>
           <th scope="col"><h5 style="color: rgb(255, 189, 47)">Actions</th>
              <th scope="col"><h5 style="color: rgb(255, 189, 47)">Actions2</th>
    </tr>
  </thead>
  <tbody>
    
   @foreach ($data as $data )
      <tr>
      <td><h6 style="color:white;">{{ $data->title }}</h6></td>
      <td><h6 style="color:white;">{{ $data->price }}</h6></td>
       <td><h6 style="color:white;">{{ $data->description }}</h6></td>
       <td><img height="400" width="200" src="/foodimage/{{ $data->image }}" ></td>
       <td><a href="{{ url('/deletemenu',$data->id) }}">Delete</a></td>
       <td><a href="{{ url('/updateview',$data->id) }}">Update</a></td>
       
        
         
    </tr>
     @endforeach
     
    </table>
    </div>








</div>
  </div>












      @include("admin.adminscript")



        <!-- main-panel ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    
  </body>
</html>