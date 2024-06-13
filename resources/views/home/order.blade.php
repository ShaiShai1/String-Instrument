<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    @include ('home.links')
</head>
<body>

    <div class="hero_area">
    
        <!-- header section strats -->
            @include ('home.header')
        <!-- end header section -->


        <div class="container d-flex justify-content-center p-4 ">
        <!-- table -->
        <table style=" box-shadow: 0 5px 0 black; "
            class=" table table-striped table-hover table-bordered table-sm text-dark bg-light my-4 rounded">
            <thead class="bg-primary text-white py-3">
                <tr class="text-center">
                <th scope="col" class="fs-5">Product Name</th>
                <th scope="col" class="fs-5">Price</th>
                <th scope="col" class="fs-5">Delivery Status</th>
                <th scope="col" class="fs-5">Image</th>
                </tr>
            </thead>
            <tbody>

                @foreach($order as $order)
                <tr class="bg-white text-center">
                    <td class="align-middle">{{$order->product->title}}</td>
                    <td class="align-middle">{{$order->product->price}}</td>
                    <td class="align-middle">{{$order->status}} </td>
                    <td class="align-middle">
                        <img height="70" width="70" src="/products/{{$order->product->image}}" alt="">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- end table -->
        </div>


    </div>


    <!-- info and footer section -->
    @include ('home.footer')
    <!-- end info and footer section -->
    
</body>
</html>