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
   <div style="">
        <table class="table table-hover">
  <thead>
    <tr>
      
      <th  scope="col"><h5 style="color: rgb(255, 189, 47)">Name</h5></th>
      <th scope="col"><h5 style="color: rgb(255, 189, 47)">Email</th>
      <th scope="col"><h5 style="color: rgb(255, 189, 47)">Phone</th>
        <th scope="col"><h5 style="color: rgb(255, 189, 47)">Date</th>
           <th scope="col"><h5 style="color: rgb(255, 189, 47)">Time</th>
              <th scope="col"><h5 style="color: rgb(255, 189, 47)">Message</th>
    </tr>
  </thead>
  <tbody>
    
   @foreach ($data as $data )
      <tr>
      <td><h6 style="color:white;">{{ $data->name }}</h6></td>
      <td><h6 style="color:white;">{{ $data->email }}</h6></td>
       <td><h6 style="color:white;">{{ $data->phone }}</h6></td>
        <td><h6 style="color:white;">{{ $data->date }}</h6></td>
         <td><h6 style="color:white;">{{ $data->time }}</h6></td>
          <td><h6 style="color:white;">{{ $data->message }}</h6></td>
          
              
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