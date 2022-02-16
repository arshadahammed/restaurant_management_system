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
   <form action="{{ url('/updatefoodchef',$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">Enter Name</label>
    <input type="text" name="name" class="form-control" value="{{$data->name}}" style="background-color: rgb(171, 171, 213)">
   
  </div>


  <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">Speciality</label>
    <input type="text" name="speciality" class="form-control" value="{{ $data->speciality }}" style="background-color:  rgb(171, 171, 213">
   
  </div>
 

   
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Old Image</label>
    <img   src="/chefimage/{{ $data->image }}" alt="">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> New Image</label>
    <input type="file" name="image" class="form-control" style="background-color:  rgb(171, 171, 213"  >
  </div>

  

  <button type="submit" class="btn btn-primary" value="Update">Update</button> 
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