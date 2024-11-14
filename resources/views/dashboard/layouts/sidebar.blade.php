<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white custom-scollbar custom-scollbar-sidebar" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a href="{{ route('home') }}">
                <img style="margin-top:-34px;height:150px;display: unset; border-radius:5px;" src="{{ asset('images/demo_1.jpg') }}">
            </a>
        </div>
        <div class="navbar-inner mt-4">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav custom-scollbar">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            <i class="fas fa-chalkboard fa-lg" style="color: #000000;"></i>
                            <span class="nav-link-text"><b>Products</b></span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
