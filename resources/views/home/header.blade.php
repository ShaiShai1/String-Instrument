<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .header_section {
      height: 80px; 
      display: flex-end;
      align-items: center;
    }
    .modal-dialog {
      max-width: 800px;
      margin: 1.75rem auto;
    }
    .modal-header {
      background-color: #f8f9fa;
      border-bottom: 1px solid #dee2e6;
    }
    .modal-body {
      max-height: 60vh;
      overflow-y: auto;
    }
    .modal-footer {
      background-color: #f8f9fa;
      border-top: 1px solid #dee2e6;
    }

    .navbar-nav > li:not(:last-child) {
      margin-right: 10px;
    }

    .logout-text {
      display: none;
    }

    .logout-link:hover .logout-text {
      display: inline;
    }
  </style>
</head>
<body>
<header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item d-flex align-items-center" >
            <img style="width:50px; margin-left: 30px; margin-right: 10px;" src="images/logo.png" alt="" class="logo">
               <span class="company_name" style="color: #8b4513;">
                <b>String Tone</b>
               </span>

            <a class="nav-link" href="{{url('/')}}" style="color: #6b4226;"><b>Home</b></a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" style="color: #6b4226;" href="#shop"><b>Shop</b></a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" style="color: #6b4226; scroll-behavior: smooth;" href="#contact"><b>Contact Us</b></a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" style="color: #6b4226;" href="{{ url('home.about_us') }}" data-toggle="modal" data-target="#aboutUsModal"><b>About Us</b></a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" style="color: #6b4226;" href="{{ url('home.privacy_policy') }}" data-toggle="modal" data-target="#privacyPolicyModal"><b>Privacy Policy</b></a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" style="color: #6b4226;" href="{{ url('home.terms_conditions') }}" data-toggle="modal" data-target="#termsConditionsModal"><b>Terms and Conditions</b></a>
          </li>
        </ul>

        @if (Route::has('login'))
@auth
<a style="color: #6b4226; margin-right: 10px;" href="{{url('myorders')}}"><b>My Orders</b></a>
<a href="{{url('mycart')}}" style="color: #6b4226; margin-right: 10px;">
  <i class="fa fa-shopping-bag" aria-hidden="true"></i>
  [{{$count }}]
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
<a href="{{ route('logout') }}" class="logout-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #6b4226;">
  <i class="fa fa-sign-out" aria-hidden="true"></i>
  <span class="logout-text"><b>Logout</b></span>
</a>
@else
<a href="{{ url('/login') }}" style="color: #6b4226; margin-right: 10px;">
  <i class="fa fa-user" aria-hidden="true"></i>
  <span>Login</span>
</a>
<a href="{{ url('/register') }}" style="color: #6b4226; margin-right: 10px;">
  <i class="fa fa-vcard" aria-hidden="true"></i>
  <span>Signup</span>
</a>
@endauth
@endif

      </div>
    </nav>
  </header>

  <!-- Modals -->
  <!-- Privacy Policy Modal -->
  <div class="modal fade" id="privacyPolicyModal" tabindex="-1" role="dialog" aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="privacyPolicyModalLabel">Privacy Policy</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  <h2>Privacy Policy</h2>
  <p><strong>Effective Date:</strong> 2024-2025</p>
  
  <h3>Introduction</h3>
  <p>Welcome to Strings of Hope. We value your privacy and are committed to protecting your personal information. This Privacy Policy outlines how we collect, use, and safeguard your information when you visit our website or make a purchase from our e-commerce store.</p>
  
  <h3>1. Information We Collect</h3>
  <p><strong>Personal Information:</strong> When you create an account, make a purchase, or contact us, we may collect personal information such as your name, email address, mailing address, phone number, and payment information.</p>
  <p><strong>Usage Data:</strong> We automatically collect information about your interaction with our website, including your browser type, and pages visited.</p>
  <p><strong>Cookies and Tracking Technologies:</strong> We use cookies and similar technologies to enhance your browsing experience, analyze site traffic, and understand user behavior.</p>
  
  <h3>2. How We Use Your Information</h3>
  <p><strong>To Process Transactions:</strong> We use your personal information to process orders, handle payments, and deliver products.</p>
  <p><strong>To Improve Our Services:</strong> We analyze usage data to improve our website’s functionality, design, and content.</p>
  <p><strong>To Communicate with You:</strong> We may use your contact information to send order confirmations, updates, newsletters, and promotional materials. You can opt out of marketing communications at any time.</p>
  <p><strong>To Comply with Legal Obligations:</strong> We may use your information to comply with legal and regulatory requirements.</p>
  
  <h3>3. Sharing Your Information</h3>
  <p><strong>Service Providers:</strong> We may share your information with third-party service providers who assist with payment processing, shipping, and website analytics. These providers are obligated to protect your information.</p>
  <p><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of assets, your information may be transferred to the new entity.</p>
  <p><strong>Legal Requirements:</strong> We may disclose your information if required by law or in response to valid requests by public authorities.</p>
  
  <h3>4. Security of Your Information</h3>
  <p>We implement appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. However, no online transmission or storage of data can be guaranteed to be 100% secure.</p>
  
  <h3>5. Your Rights and Choices</h3>
  <p><strong>Access and Update:</strong> You can access and update your personal information through your account settings.</p>
  <p><strong>Opt-Out:</strong> You can opt out of receiving promotional emails by following the unsubscribe link in the email.</p>
  <p><strong>Cookies:</strong> You can manage your cookie preferences through your browser settings.</p>
  
  <h3>6. Children's Privacy</h3>
  <p>Our website is not intended for children under the age of 12. We do not knowingly collect personal information from children under 12. If you believe we have collected such information, please contact us to have it removed.</p>
  
  <h3>7. Changes to This Privacy Policy</h3>
  <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated effective date. We encourage you to review this policy periodically.</p>
  
  <h3>8. Contact Us</h3>
  <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us at:</p>
        <p class="text-dark">
          <i class="fa fa-map-marker" aria-hidden="true"></i> Luna St. Alaminos City, Pangasinan<br>
          <i class="fa fa-phone" aria-hidden="true"></i> 909-123-4567<br>
          <i class="fa fa-envelope" aria-hidden="true"></i> stringtone@gmail.com
        </p> 
  <p>Thank you for choosing Strings of Hope. We appreciate your trust and are committed to protecting your privacy.</p>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- About Us Modal -->
<div class="modal fade" id="aboutUsModal" tabindex="-1" role="dialog" aria-labelledby="aboutUsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aboutUsModalLabel">About Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>About Us</h2>
        <p>
          Welcome to Strings of Hope, your ultimate destination for high-quality string instruments. <br>
          String Tone is dedicated to providing high-quality string instruments and accessories to musicians around the world. 
          Founded in 2020 by a group of passionate musicians, our mission is to empower artists by offering a wide range of top-notch products and unparalleled customer support.
          With a passion for music and a commitment to excellence, we strive to bring the finest selection of string instruments to musicians of all levels. 
          Whether you are a beginner looking to start your musical journey or a seasoned professional seeking the perfect addition to your collection, we have something for everyone.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


 <!-- Terms and Conditions Modal -->
<div class="modal fade" id="termsConditionsModal" tabindex="-1" role="dialog" aria-labelledby="termsConditionsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsConditionsModalLabel">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>Terms and Conditions</h2>
        <p>
          Effective Date: 2024-2025
        </p>
        <p>
          Welcome to Strings of Hope. By using our website and purchasing our products, you agree to comply with and be bound by the following terms and conditions. Please read them carefully before using our site or services.
        </p>
        <h3>1. Acceptance of Terms</h3>
        <p>
          By accessing our website and using our services, you accept and agree to be bound by these Terms and Conditions and our Privacy Policy. If you do not agree with these terms, please do not use our site or services.
        </p>
        <h3>2. Use of the Website</h3>
        <p>
          <strong>Eligibility:</strong> You must be at least 13 years old or have the consent of a parent or guardian to use our website.
        </p>
        <p>
          <strong>Account Registration:</strong> You may be required to create an account to access certain features of our website. You agree to provide accurate and complete information and to keep your account information updated. You are responsible for maintaining the confidentiality of your account and password.
        </p>
        <p>
          <strong>Prohibited Conduct:</strong> You agree not to use our website for any unlawful purpose or in any way that could harm our business or reputation. Prohibited conduct includes, but is not limited to, transmitting harmful or disruptive software, engaging in fraudulent activities, and violating intellectual property rights.
        </p>
        <h3>3. Products and Orders</h3>
        <p>
          <strong>Product Descriptions:</strong> We strive to provide accurate descriptions and images of our products. However, we do not warrant that the descriptions, images, or other content are completely accurate, current, or error-free.
        </p>
        <p>
          <strong>Pricing:</strong> All prices are listed in Philippine peso and are subject to change without notice. We are not responsible for typographical errors in pricing or product descriptions.
        </p>
        <p>
          <strong>Order Acceptance:</strong> We reserve the right to refuse or cancel any order at our discretion. If your order is canceled, we will notify you and provide a refund if payment has already been processed.
        </p>
        <p>
          <strong>Payment:</strong> Payment must be made at the time of purchase. We accept cash on delivery.
        </p>
        <p>
          <strong>Shipping:</strong> We will ship products to the address provided at the time of purchase. Shipping times and costs are outlined on our Shipping Policy page.
        </p>
        <p>
          <strong>Returns and Refunds:</strong> Our return and refund policy is outlined on our Returns Policy page.
        </p>
        <h3>4. Intellectual Property</h3>
        <p>
          All content on our website, including text, images, graphics, logos, and software, is the property of Strings of Hope or its licensors and is protected by copyright, trademark, and other intellectual property laws. You may not use, reproduce, distribute, or create derivative works from our content without our express written permission.
        </p>
        <h3>5. Limitation of Liability</h3>
        <p>
          To the fullest extent permitted by law, Strings of Hope shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of our website or products. Our total liability to you for any claim arising from your use of our website or products shall not exceed the amount you paid to us for the product in question.
        </p>
        <h3>6. Indemnification</h3>
        <p>
          You agree to indemnify and hold Strings of Hope, its affiliates, officers, agents, and employees harmless from any claim, demand, or damage, including reasonable attorneys’ fees, arising out of your violation of these Terms and Conditions or your use of our website.
        </p>
        <h3>7. Governing Law</h3>
        <p>
          These Terms and Conditions shall be governed by and construed in accordance with the laws of the Philippines, without regard to its conflict of law principles. Any disputes arising from these terms shall be resolved in the courts of the Philippines.
        </p>
        <h3>8. Changes to Terms and Conditions</h3>
        <p>
          We reserve the right to update or modify these Terms and Conditions at any time without prior notice. Your continued use of our website following any changes constitutes your acceptance of the new terms.
        </p>
        <h3>9. Contact Us</h3>
        <p>
          If you have any questions or concerns about these Terms and Conditions, please contact us at:
        </p>
        <p>
          Strings of Hope<br>
          Pangasinan<br>
          Alaminos City, Philippines, 2404<br>
          stringsofhope@gmail.com<br>
          +639923409715
        </p>
        <p>
          Thank you for choosing Strings of Hope. We appreciate your business and look forward to serving you.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {
      // Function to load content into modal
      function loadModalContent(modalId, url) {
        $(modalId).modal('show');
        $(modalId).find('.modal-body').load(url);
      }

      // Privacy Policy
      $('a[href="{{ url('home.privacy_policy') }}"]').on('click', function(e) {
        e.preventDefault();
        loadModalContent('#privacyPolicyModal', $(this).attr('href'));
      });

      // About Us
      $('a[href="{{ url('home.about_us') }}"]').on('click', function(e) {
        e.preventDefault();
        loadModalContent('#aboutUsModal', $(this).attr('href'));
      });

      // Terms and Conditions
      $('a[href="{{ url('home.terms_conditions') }}"]').on('click', function(e) {
        e.preventDefault();
        loadModalContent('#termsConditionsModal', $(this).attr('href'));
      });
    });
  </script>
</body>
</html>
