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

      <div class="container d-flex justify-content-center p-4">

        <div class="">
          <form action="{{ url('confirm_order') }}" method="post">
            @csrf

            <div class="form-group">
              <label for="name">Receiver Name</label>
              <input type="text" class="form-control" value="{{ Auth::user()->name }}" id="receiver" name="name" placeholder="">
            </div>

            <div class="form-group">
              <label for="address">Receiver Address</label>
              <textarea name="address" value="{{ Auth::user()->address }}" id="addres">{{ Auth::user()->address }}</textarea>
            </div>

            <div class="form-group">
              <label for="phone">Receiver Phone</label>
              <input type="text" value="{{ Auth::user()->phone }}" class="form-control" id="receiver" name="phone" placeholder="">
            </div>
            
            <input class="btn btn-primary" type="submit" value="Place Order">
          </form>
        </div>

        <!-- table -->
        <table class="table table-striped table-hover table-bordered table-sm text-dark bg-light">
          <thead class="bg-primary text-white py-3">
            <tr class="text-center">
              <th scope="col" class="fs-5">Product Title</th>
              <th scope="col" class="fs-5">Price</th>
              <th scope="col" class="fs-5">Image</th>
              <th scope="col" class="fs-5">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php
            $value=0.00;
          ?>

            @foreach($cart as $cart)
              <tr class="bg-white text-center">
                <td class="align-middle">{{$cart->product->title}}</td>
                <td class="align-middle">{{$cart->product->price}}</td>
                <td class="align-middle">
                  <img height="50%" width="50%" src="/products/{{$cart->product->image}}">
                </td>
                <td class="align-middle">
                  <a class="btn btn-danger" onclick='confirmation(event)' href="{{ url('delete_cart', $cart->id)}}">Remove</a>
                </td>
              </tr>

              <?php
              // Ensure the price is numeric before adding
              if (is_numeric($cart->product->price)) {
                $value += $cart->product->price;
              }
            ?>
            
            @endforeach
            
            
          </tbody>

          <div class="container row text-center" style="height: 50%; width: 50%;">
            <p class="p-3 border border-dark m-5" style="font-size: 1.5rem;">
              <span class="align-middle">Total Cart Value is : <span style="font-size: 2rem; font-weight: bold;">{{ "₱" . $value}}</span></span>
            </p>
        </div>
        </table>

        <!-- end table -->

        
        
      </div>

        
    
    <!-- info and footer section -->
        @include ('home.footer')
    <!-- end info and footer section -->

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
      integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
      crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>


</body>
</html>