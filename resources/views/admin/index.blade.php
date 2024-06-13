<!DOCTYPE html>
<html>
  <head> 
    <!-- css links -->
    @include('admin.links')
    <!-- end css links -->
  </head>
  <body>

    <!-- header -->
        @include('admin.header')
    <!-- end header -->


    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
            @include('admin.side')
      <!-- Sidebar Navigation end-->


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <!-- body -->
            @include('admin.body')
            <!-- end body -->
        
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include ('admin.js')
  </body>
</html>