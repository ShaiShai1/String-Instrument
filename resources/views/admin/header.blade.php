<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase">
                <strong class="text-primary" style="color: #8b4513;">ADMIN</strong><strong style="color: #ffffff;">DASHBOARD</strong>
            </div>
            <div class="brand-text brand-sm">
                <strong class="text-primary" style="color: #8b4513;">A</strong><strong style="color: #ffffff;">D</strong>
            </div>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input type="submit" value="Logout" onclick="logoutConfirmation(event)" class="btn btn-outline-success" style="background-color: #ffffff; color: #000000; border: none;">
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>