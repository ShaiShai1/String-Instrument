<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>

    <div style="text-align: center;">
        <h4>Customer Name: {{ $data->name }}</h4>
        <h4>Customer Address: {{ $data->rec_address }}</h4>
        <h4>Phone Number: {{ $data->phone }}</h4>
        <h4>Product Title: {{ $data->product->title }}</h4>
        <h4>Price: {{ $data->product->price }}</h4>
        <img class="align-middle" height="100" width="100" src="products/{{ $data->product->image }}" alt="...">
    </div>

</body>
</html>