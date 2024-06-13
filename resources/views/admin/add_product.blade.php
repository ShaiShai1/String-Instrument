<!DOCTYPE html>
<html>
<head>
    <!-- css links -->
    @include('admin.links')
    <!-- end css links -->
    <style>
        body {
            font-family: 'Arial', sans-serif; 
        }

        .page-header {
            background-color: #f0f0f0;
        }

        .page-content {
            background-color: #f0f0f0; 
            padding: 20px; 
        }

        .form-label.fw-bold {
            font-weight: bold;
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
        <div class="text-center"> <!-- Center the h1 -->
            <h1 class="mb-4" style="color: black;">Add Product</h1>
        </div>

        <!-- body -->
        <div class="row justify-content-center">
            <div class="col-8">
                <form class="g-3" action="{{ 'upload_product' }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="title" style="color: black;">Product Title</label>
                        <input type="text" name="title" class="form-control" id="title" style="color: black; placeholder="Product Title" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="description" style="color: black;">Description</label>
                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="description" style="color: black;" required></textarea>
                    </div>

                    <!-- Price -->
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="price" style="color: black;">Price</label>
                        <input type="text" name="price" class="form-control" id="price" style="color: black; placeholder="Price" required>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="quantity" style="color: black;">Quantity</label>
                        <input type="number" name="qty" class="form-control" id="quantity" style="color: black; placeholder="Quantity" required>
                    </div>

                    <!-- Product Category -->
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="category" style="color: black;">Product Category</label>
                        <select class="form-select" id="category" name="category">
                            <option disabled selected>Choose...</option>
                            @foreach($category as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Product Image -->
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="image" style="color: black;">Product Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Product Image" required>
                    </div>

                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Add Product">
                    </div>
                </form>
            </div>
        </div>
        <!-- end body -->
    </div>
</div>

<!-- JavaScript files-->
@include('admin.js')

</body>
</html>
