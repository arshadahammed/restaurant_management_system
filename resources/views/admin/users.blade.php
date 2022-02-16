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
    <div style="position: relative; top:60px; right:-150px">
        <table class="table table-dark table-hover" >
  <thead>
    <tr>
      
      <th  scope="col"><h5 style="color: rgb(255, 189, 47)">Name</h5></th>
      <th scope="col"><h5 style="color: rgb(255, 189, 47)">Email</th>
      <th scope="col"><h5 style="color: rgb(255, 189, 47)">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($data as $data )
   <tr>
      <td><h6 style="color:white;">{{ $data->name }}</h6></td>
      <td><h6 style="color:white;">{{ $data->email }}</h6></td>
        @if($data->usertype==0)
       <td><a href="{{ url('/deleteuser',$data->id) }}">Delete</a></td>
       @else
       <td><a>Not Allowed</a></td>
       @endif
    </tr>
     @endforeach
    </table>
    </div>

</div>
      @include("admin.adminscript")



        <!-- main-panel ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    
  </body>
</html>