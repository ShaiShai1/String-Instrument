<nav id="sidebar" style="background: linear-gradient(to bottom, #e6f2ff, #b3d9ff, #80bfff, #4da6ff, #1a8cff); padding: 20px;">
    <!-- Sidebar Header-->
    <div style="display: flex; align-items: center; margin-bottom: 20px;">
        <div class="avatar" style="margin-right: 15px;">
            <img src="{{ asset('images\logo.png') }}" alt="..." style="border-radius: 50%; width: 50px; height: 50px;">
        </div>
        <div class="title">
            <h1 class="h5" style="color: #333; margin: 0;">String Tone</h1>
            <p style="color: #333; margin: 0;">The String of Hope</p>
        </div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <span class="heading" style="color: #333; font-weight: bold; display: block; margin-bottom: 10px;">Main</span>
    <ul style="list-style: none; padding: 0; margin: 0;">
        <li style="margin-bottom: 10px;">
            <a href="{{ url('admin/dashboard') }}" style="color: #333; text-decoration: none; display: flex; align-items: center; padding: 5px; border-radius: 5px;">
                <i class="icon-home" style="margin-right: 10px;"></i>Home
            </a>
        </li>
        <li style="margin-bottom: 10px;">
            <a href="{{ url('view_category') }}" style="color: #333; text-decoration: none; display: flex; align-items: center; padding: 5px; border-radius: 5px;">
                <i class="icon-grid" style="margin-right: 10px;"></i>Category
            </a>
        </li>
        <li style="margin-bottom: 10px;">
            <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse" text-decoration: none; display: flex; align-items: center; padding: 5px; border-radius: 5px;>
                <i class="icon-windows" style="margin-right: 10px;"></i>Products
            </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled" style="list-style: none; padding: 0 0 0 20px; margin: 10px 0 0;">
                <li style="margin-bottom: 10px;"><a href="{{ url('add_product') }}" style="color: #ffffff; text-decoration: none; padding: 5px; border-radius: 5px;">Add Product</a></li>
                <li><a href="{{ url('view_product') }}" style="color: #ffffff; text-decoration: none; padding: 5px; border-radius: 5px;">View Product</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ url('view_orders') }}" style="color: #333; text-decoration: none; display: flex; align-items: center; padding: 5px; border-radius: 5px;">
                <i class="icon-grid" style="margin-right: 10px;"></i>Orders
            </a>
        </li>
    </ul>
</nav>

<style>
    /* Sidebar styles */
    #sidebar {
        background: linear-gradient(to bottom, #e6f2ff, #b3d9ff, #80bfff, #4da6ff, #1a8cff);
        padding: 20px;
    }

    #sidebar .title h1 {
        color: #333;
        margin: 0;
    }

    #sidebar .title p {
        color: #333;
        margin: 0;
    }

    #sidebar .heading {
        color: #333;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }

    #sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #sidebar ul li {
        margin-bottom: 10px;
    }

    #sidebar ul li a {
        color: #333;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 5px;
        border-radius: 5px;
    }

    #sidebar ul li a:hover {
    color: #000; /* Change text color on hover */
    background-color: #fff; /* Change background color on hover */
}

    #sidebar ul li ul {
        list-style: none;
        padding: 0 0 0 20px;
        margin: 10px 0 0;
    }

    #sidebar ul li ul li {
        margin-bottom: 10px;
    }

</style>
