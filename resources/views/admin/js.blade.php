  <!-- logout modal -->
  <script type="text/javascript">
    function logoutConfirmation(event) {
      event.preventDefault();
      swal({
        title: "Logout Account",
        text: "Are you sure you want to logout?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willLogout) => {
        if (willLogout) {
          document.getElementById('logout-form').submit();
        }
      });
    }
  </script>
  <!-- end logout modal -->


    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
      integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
      crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script src="{{ asset ('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('/admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset ('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset ('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset ('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset ('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset ('/admincss/js/front.js') }}"></script>