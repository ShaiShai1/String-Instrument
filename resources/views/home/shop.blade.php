<section class="shop_section layout_padding" id="shop">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">

        @foreach($products as $product)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box" style="background-color: #bdb7ab; border-radius: 20px; 
                      border: 2px solid black; box-shadow:  0 8px 7px rgba(0, 0, 0, 1);">
              <div class="img-box">
                <img src="products/{{$product->image}}" alt="">
              </div>
              <div class="detail-box">
                <p>{{$product->title}}</p>
                <h6>Price
                  <span style="color: red;">₱{{$product->price}}</span>
                </h6>
              </div>
              <div class="d-flex justify-content-end p-3">
                <a class="btn btn-light mr-2" href="{{url('product_details', $product->id)}}">Details</a>
                <a class="btn btn-dark text-white" href="{{url('add_cart',$product->id)}}">Add to Cart</a>
              </div>
          </div>
        </div>
        @endforeach
           
    </div>
  </section>