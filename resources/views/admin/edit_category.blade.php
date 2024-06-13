<!DOCTYPE html>
<html>
  <head> 
    <!-- css links -->
    @include('admin.links')
    <!-- end css links -->

    <script>
        // Initial state, prevents the browser back button
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            // Push the state again to prevent back navigation
            history.go(10);
        };
    </script>
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
            <h1 class="text-white">Update Category</h1>

            <div class="div_deg d-flex justify-content-center align-items-center m-4">

                <!-- form -->
                <form action="{{ url('update_category', $data->id) }}" method="post">
                    @csrf
                    <div>
                        <input style="width: 400px; height: 50px; padding: 15px;" class="" type="text" value="{{ $data->category_name }}" name="category" id="category">
                        <input class="btn btn-warning" type="submit" value="Update Category">
                    </div>
                </form>
                <!-- end form -->
            </div>
            
            <!-- table -->
           
            <!-- end table -->

        </div>
      </div>
    </div>
      


    <!-- JavaScript files-->
    @include ('admin.js')
  </body>
</html>