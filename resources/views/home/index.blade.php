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

    <!-- slider section --> 
        @include ('home.section')
    <!-- end slider section -->

  </div>
  <!-- end hero area -->

    <!-- shop section -->
        @include ('home.shop')
    <!-- end shop section -->


    <!-- contact section -->
        @include ('home.contact')
    <!-- end contact section --> 

   

    <!-- info and footer section -->
        @include ('home.footer')
    <!-- end info and footer section -->

</body>

</html>