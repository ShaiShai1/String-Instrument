<!DOCTYPE html>
<html>

<head>
   @include ('home.links')
</head>

<body>
  <div class="hero_area">
    
    <!-- header section strats -->
        @include ('home.header')
    <!-- end header section -->

  </div>
    
    <!-- Product Details Start -->
    <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Product Details
        </h2>
      </div>

      <div class="d-flex justify-content-center">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/products/{{$data->image}}" class="img-fluid rounded-start" style="object-fit: contain; height: 100%;" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$data->title}}</h5>
                    <p class="card-text">{{$data->description}}</p>
                    <p class="card-text">Price: ₱{{$data->price}}</p>
                    <p class="card-text">Category: {{$data->category}}</p>
                    <div class="d-flex align-items-center">
                        <p class="card-text me-2">Quantity:</p>
                        <div class="d-flex align-items-center">
                            <button class="quantity-btn" type="button" data-action="decrement">
                                <span class="quantity-btn-text">-</span>
                            </button>
                            <input type="text" class="quantity-input" value="{{$data->quantity}}">
                            <button class="quantity-btn" type="button" data-action="increment">
                                <span class="quantity-btn-text">+</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .quantity-btn {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #333;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        height: 30px;
        line-height: 28px;
        padding: 0 10px;
        text-align: center;
        width: 30px;
    }

    .quantity-btn-text {
        display: block;
        line-height: 1;
    }

    .quantity-input {
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        height: 30px;
        margin: 0 4px;
        padding: 4px 8px;
        text-align: center;
        width: 60px;
    }
</style>

<script>
    document.querySelectorAll('.quantity-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const action = this.dataset.action;
            const quantityInput = this.parentNode.querySelector('.quantity-input');
            let quantity = parseInt(quantityInput.value);

            if (action === 'decrement') {
                quantity = quantity > 1 ? quantity - 1 : 1;
            } else if (action === 'increment') {
                quantity++;
            }

            quantityInput.value = quantity;
        });
    });
</script>    
    <!-- Product Details End -->
     
    </div>
  </section>


    <!-- info and footer section -->
        @include ('home.footer')
    <!-- end info and footer section -->

</body>

</html>