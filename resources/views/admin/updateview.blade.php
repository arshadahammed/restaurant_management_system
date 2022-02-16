<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
   @include("admin.admincss")
  </head>
  
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

    <div class="col-sm-4 offset-md-3"> 
   <form action="{{ url('/update',$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ $data->title }}" style="background-color: rgb(171, 171, 213)">
   
  </div>


  <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">price</label>
    <input type="text" name="price" class="form-control" value="{{ $data->price }}" style="background-color:  rgb(171, 171, 213">
   
  </div>
 

   <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">description</label>
    <input type="text" name="description" class="form-control" value="{{ $data->description }}" style="background-color:  rgb(171, 171, 213">
   
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Old Image</label>
    <img   src="/foodimage/{{ $data->image }}" alt="">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> New Image</label>
    <input type="file" name="image" class="form-control" style="background-color:  rgb(171, 171, 213"  >
  </div>

  

  <button type="submit" class="btn btn-primary" value="Save">Save</button> 
  {{-- dfdvd  --}}
</form> <br> <br>
</div>




    



    </div>


      @include("admin.adminscript")



        <!-- main-panel ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    
  </body>
</html>