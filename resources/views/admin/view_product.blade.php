<!DOCTYPE html>
<html>
<head>
    <!-- css links -->
    @include('admin.links')
    <!-- end css links -->

    <style>
        body {
            font-family: 'Arial', sans-serif; 
            color: #333; 
        }

        .page-header {
            background-color: #f0f0f0;
            padding: 20px;
            margin-bottom: 20px;
            color: #333; 
        }

        .page-content {
            background-color: #f0f0f0;
            padding: 20px;
        }

        .table {
            background-color: #fff; 
        }

        .table th {
            background-color: #00E5EE; 
        }

        .table td {
            background-color: #f0f0f0; 
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input[type="search"],
        .search-form button[type="submit"] {
            height: 40px;
            font-size: 16px;
        }

        .view-product-heading {
            margin: 0;
            margin-right: 20px;
        }

        .modal-content {
            background-color: white; 
            border: none; 
        }

        .modal-header,
        .modal-body,
        .modal-footer {
            border: none; 
            background-color: white;
        }

        .btn-close {
            color: #000; 
        }
    </style>
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

                <div class="header-content">
                    <h1 class="view-product-heading">View Product</h1>
                    <form action="{{url('product_search')}}" method="get" class="search-form">
                        @csrf
                        <input type="search" name="search" class="form-control" style="width: 300px;" placeholder="Search..." required>
                        <button type="submit" class="btn btn-secondary ml-2">Search</button>
                    </form>
                </div>

                <!-- table -->
                <div class="table-responsive-md d-flex justify-content-center align-items-center">
                    <div>
                        <table class="table table-hover table-bordered border-success">
                            <tr class="table-warning text-black text-center">
                                <th>Product Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>

                            @foreach($product as $products)
                            <tr class="vertical-align-center text-black">
                                <td>{{ $products->title }}</td>
                                <td>{!!Str::limit($products->description,50)!!}</td>
                                <td class="text-center">{{ $products->category }}</td>
                                <td class="text-center">{{ $products->price }}</td>
                                <td class="text-center">{{ $products->quantity }}</td>
                                <td>
                                    <img height="70" width="70" src="products/{{ $products->image }}" alt="image">
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-success" href="{{ url('update_product', $products->id) }}">Edit</a>
                                    <a class="btn btn-danger ml-2" onclick="confirmation(event)" href="{{ url('delete_product', $products->id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </table>
                        <div class="pagination justify-content-center mt-3">
                            {{ $product->onEachSide(1)->links() }}
                        </div>
                    </div>
                </div>
                <!-- end table -->
            </div>
        </div>
    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this product?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" id="confirmDeleteButton">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript files-->
@include('admin.js')

<script>
    function confirmation(event) {
        event.preventDefault();
        var deleteUrl = event.target.href;
        var confirmDeleteButton = document.getElementById('confirmDeleteButton');
        confirmDeleteButton.setAttribute('href', deleteUrl);
        var modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        modal.show();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
