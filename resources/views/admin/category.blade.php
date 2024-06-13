<!DOCTYPE html>
<html>
<head>
  <!-- css links -->
  @include('admin.links')
  <!-- end css links -->

  <style type="text/css">
    * {
      color: black;
    }

    body {
      font-family: Arial, sans-serif;
    }

    input[type='text'] {
      padding: 15px;
      width: 400px;
      height: 50px;
      color: black; 
    }
    .page-header {
      height:700px;
      background-color: #f0f0f0;
      padding: 20px;
      margin-bottom: 20px;
     
    }

    h1 {
      color: #333;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .btn {
      color: white; 
      margin: 5px;
    }

    .table-responsive-md {
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table {
      width: 100%;
      margin-bottom: 1rem;
      color: #333;
      border-collapse: collapse;
    }

    .table th,
    .table td {
      padding: 12px;
      text-align: left;
      border-top: 1px solid #dee2e6;
    }

    .table thead th {
      background-color: #f8f9fa;
      border-bottom: 2px solid #dee2e6;
    }

    .table .btn {
      padding: 5px 10px;
    }

    .footer {
      padding: 20px;
      background-color: #f8f9fa; 
      color: #333; 
      text-align: center;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
    }

    .page-content {
      background-color: #f0f0f0;
      padding: 20px; 
    }
  </style>
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
          <h1>Add Category</h1>

          <div class="div_deg d-flex justify-content-center align-items-center m-4">
            <!-- form -->
            <form action="{{ url('add_category') }}" method="post">
              @csrf
              <div>
                <input type="text" name="category" id="category">
                <input class="btn btn-danger" type="submit" value="Add Category">
              </div>
            </form>
            <!-- end form -->
          </div>
          
          <!-- table -->
          <div class="table-responsive-md d-flex justify-content-center align-items-center text-center">
            <div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Category Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $data)
                  <tr class="vertical-align-center">
                    <td class="align-middle">{{ $data->category_name }}</td>
                    <td class="align-middle">
                      <a class="btn btn-success" href="{{ url('edit_category', $data->id) }}">Edit</a>
                      <a class="btn btn-danger" onclick='confirmation(event)' href="{{ url('delete_category', $data->id) }}">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- end table -->

        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript files-->
  <!-- delete modal -->
  <script type="text/javascript">
    function confirmation(ev){
      ev.preventDefault();
      var urlToRedirect = ev.currentTarget.getAttribute('href');
      console.log(urlToRedirect);

      swal({
        title: "Are you sure to delete this?",
        text: "This delete will be permanent",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willCancel) => {
        if (willCancel) {
          window.location.href = urlToRedirect;
        }
      });
    }
  </script>
  <!-- end delete modal -->

  @include('admin.js')
  
</body>
</html>
