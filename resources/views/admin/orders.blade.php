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
    <div class="container">
<h1>Customer Orders</h1>

   <form action="{{ url('/search') }}" method="GET">
       <input type="text" name="search" style="color:blue;">
       <input type="submit" value="search" class="btn btn-success">



   </form>


    <div style="position: relative; top:100px; right:10px">
    <table class="table table-hover table-dark">
  <thead>
    <tr>
    <th  scope="col"><h5 style="color: rgb(255, 189, 47)">Name</h5></th>
    <th scope="col"><h5 style="color: rgb(255, 189, 47)">Phone</th>
    <th scope="col"><h5 style="color: rgb(255, 189, 47)">Address</th>
    <th scope="col"><h5 style="color: rgb(255, 189, 47)">Food Name</th>
    <th scope="col"><h5 style="color: rgb(255, 189, 47)">Price</th>    <th scope="col"><h5 style="color: rgb(255, 189, 47)">Qunatity</th>      
     <th scope="col"><h5 style="color: rgb(255, 189, 47)">Total Price</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($data as $data)
          
      
    <tr>
      
      <td><h6 style="color:white;">{{ $data->name }}</h6></td>
        <td><h6 style="color:white;">{{ $data->phone }}</h6></td> 
        <td><h6 style="color:white;">{{ $data->address }}</h6></td> <td><h6 style="color:white;">{{ $data->foodname }}</h6></td> <td><h6 style="color:white;">{{ $data->price }}$</h6></td>
         <td><h6 style="color:white;">{{ $data->quantity }}</h6></td>
           <td><h6 style="color:white;">{{ $data->quantity * $data->price }}</h6></td>
         @endforeach
    </tr>
   
  </tbody>
</table>
</div>
</div>


      @include("admin.adminscript")



        <!-- main-panel ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    
  </body>
</html>