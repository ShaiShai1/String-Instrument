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
            padding: 10px;
            margin-bottom: 20px;
            color: #333; 
        }

        .page-content {
            background-color: #f0f0f0; 
            padding: 20px; 
        }

        .search-form {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-form input[type="search"],
        .search-form button[type="submit"] {
            height: 36px;
            font-size: 16px;
        }

        .view-product-heading {
            display: inline-block;
            margin-right: 10px;
        }

        .table-hover tbody tr:hover {
        background-color: #f9f9f9; 
        }

        .table th,
        .table td {
        text-align: left;
        padding: 5; 
        }
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
                <!-- table -->
                <table class="table table-striped table-hover table-bordered table-sm text-dark bg-light">
                    <thead class="bg-info text-black py-3" >
                    <tr class="text-center" >
                        <th scope="col" class="fs-5">Customer Name</th>
                        <th scope="col" class="fs-5">Address</th>
                        <th scope="col" class="fs-5">Phone</th>
                        <th scope="col" class="fs-5">Product Title</th>
                        <th scope="col" class="fs-5">Price</th>
                        <th scope="col" class="fs-5">Image</th>
                        <th scope="col" class="fs-5">Action</th>
                        <th scope="col" class="fs-5">Change Status</th>
                        <th scope="col" class="fs-5">Print PDF</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $order)
                    <tr class="bg-white text-center">
                        <td class="align-middle">{{ $order->name }}</td>
                        <td class="align-middle">{{ $order->rec_address }}</td>
                        <td class="align-middle">{{ $order->phone }}</td>
                        <td class="align-middle">{{ $order->product->title }}</td>
                        <td class="align-middle">{{ $order->product->price }}</td>
                        <td class="align-middle">
                            <img width="70" height="70" src="products/{{ $order->product->image }}" alt="">
                        </td>
                       <td class="align-middle" style="text-align: center;">
                        @if($order->status == 'inprogress')
                            <span class="p-1" style="font-weight: bold; color: white; background-color: gold; border-radius: 3px;">{{ $order->status }}</span>
                        @elseif($order->status == 'On the way')
                            <span class="p-1" style="font-weight: bold; color: white; background-color: blue; border-radius: 3px;">{{ $order->status }}</span>
                        @else
                            <span class="p-1" style="font-weight: bold; color: white; background-color: green; border-radius: 3px;">{{ $order->status }}</span>
                        @endif
                        </td>

                        <td class="align-middle">
                            <a class="btn btn-danger" href="{{ url('on_the_way', $order->id) }}">On the way</a>
                            <a class="btn btn-success" href="{{ url('delivered', $order->id) }}">Delivered</a>
                        </td>
                        <td class="align-middle">
                            <a class="btn btn-secondary" href="{{ url('print_pdf', $order->id) }}">Print PDF</a>
                        </td>
                        <!-- <td class="align-middle">
                        <a class="btn btn-danger" onclick='confirmation(event)' href="">Remove</a>
                        </td> -->
                    </tr>
                    @endforeach

                    </tbody>
                </table>

                <!-- end table -->
                <!-- end body -->

            </div>
        </div>
    </div>
</div>
<!-- JavaScript files-->

@include('admin.js')

</body>
</html>
