<!DOCTYPE html>
<html>
  <head> 
    <!-- css links -->
    @include('admin.links')
    <!-- end css links -->

    <style type="text/css">
        input[type='text']{
            padding: 15px;
            width: 400px;
            height: 50px;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <h1 class="text-white">Update Product</h1>

                     <!-- body -->
                        <form class="row row-cols-lg-auto g-3 d-flex justify-content-center align-items-center" action="{{ url('edit_product', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Title -->
                            <div class="col-8">
                                <label class="text-white fw-bold fs-6" for="title">Product Title</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $data->title }}" name="title" class="form-control" id="title" placeholder="Product Title" required>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-8">
                                <label class="text-white fw-bold fs-6" for="description">Description</label>
                                <div class="input-group">
                                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="description" required>{{ $data->description }}</textarea>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="col-8">
                                <label class="text-white fw-bold fs-6" for="price">Price</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $data->price }}" name="price" class="form-control" id="price" placeholder="Price" required>
                                </div>
                            </div>

                            <!-- Quantity -->
                            <div class="col-8">
                                <label class="text-white fw-bold fs-6" for="quantity">Quantity</label>
                                <div class="input-group">
                                    <input type="number" value="{{ $data->quantity }}" name="qty" class="form-control" id="quantity" placeholder="Quantity" required>
                                </div>
                            </div>

                            <!-- Product Category -->
                            <div class="col-8">
                                <label class="text-white fw-bold fs-6" for="category">Product Category</label>
                                <select class="form-select" id="category" name="category">
                                    <option value="{{ $data->category }}">{{ $data->category }}</option>
                                    @foreach($category as $category)
                                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                    @endforeach
                                  
                                </select>
                            </div>

                            <!-- Product Image -->
                            <div class="col-8">
                                <div class="input-group col-12">
                                    <!-- Current Image -->
                                    <label class="text-white fw-bold fs-6" for="cprice">Current Image </label>
                                    <img width="150"  class="ml-3" src="/products/{{ $data->image }}" alt="Current Image">
                                    <!-- New Image -->
                                    <label class="text-white fw-bold fs-6 ml-4" for="image">New Image </label>
                                    <input type="file" name="image" class="form-control ml-3" id="image" placeholder="New Image">
                                </div>    
                            </div>

                            <div class="col-8 mt-5 fw-bold">
                                <input type="submit" class="btn btn-primary" value="Update Product">
                            </div>

                        </form>
                    <!-- end body -->

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
          title:"Are you sure to delete this?",
          text: "This delete will be permanent",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willCancel)=>{
          if(willCancel){
            window.location.href=urlToRedirect;
          }
        });
      }
    </script>
    <!-- end delete modal -->

    @include ('admin.js')
    
  </body>
</html>