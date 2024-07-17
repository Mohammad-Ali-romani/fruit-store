
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url("/index")}}">
                    <div class="sidebar-brand-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
                          </svg>                    </div>
                    <div class="sidebar-brand-text mx-3">Dashboard fruit store</div>
                </a>
    
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Category Products</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route("Category.index")}}">Index</a>
                            <a class="collapse-item" href="{{route("Category.create")}}">Create</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Products"
                        aria-expanded="true" aria-controls="Products">
                        <i class="fas fa-fw fa-cog"></i>
                        <span> Products</span>
                    </a>
                    <div id="Products" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route("Producte.index")}}">Index</a>
                            <a class="collapse-item" href="{{route("Producte.create")}}">Create</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Meta"
                        aria-expanded="true" aria-controls="Meta">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Meta Products</span>
                    </a>
                    <div id="Meta" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route("Meta.index")}}">Index</a>
                            <a class="collapse-item" href="{{route("Meta.create")}}">Create</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Ads"
                        aria-expanded="true" aria-controls="Ads">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Ads </span>
                    </a>
                    <div id="Ads" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route("Ads.index")}}">Index</a>
                            <a class="collapse-item" href="{{route("Ads.create")}}">Create</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Image_Slider"
                        aria-expanded="true" aria-controls="Image_Slider">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Image Slider </span>
                    </a>
                    <div id="Image_Slider" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route("Image_Sider.index")}}">Index</a>
                            <a class="collapse-item" href="{{route("Image_Sider.create")}}">Create</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#main"
                        aria-expanded="true" aria-controls="main">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Main Info </span>
                    </a>
                    <div id="main" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route("Main.index")}}">Index</a>
                            <a class="collapse-item" href="{{route("Main.create")}}">Create</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("Carts.index")}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Carts</span></a>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("Contants.index")}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Contants</span></a>
                </li>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("Orders.index")}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Orders</span></a>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("Product_Tags.index")}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Product Tags</span></a>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("Reviews.index")}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Reviews</span></a>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("Services.index")}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Services</span></a>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("Setting.index")}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Setting</span></a>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("Tags.index")}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Tags</span></a>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("Test_Imondal.index")}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Test Imondal</span></a>
                </li>
                                <!-- Heading -->
                                <div class="sidebar-heading">
                                    Interface
                                </div>
                    
                                <!-- Nav Item - Pages Collapse Menu -->

                {{-- <!-- Divider -->
                <hr class="sidebar-divider">
    

    
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Utilities</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item" href="utilities-color.html">Colors</a>
                            <a class="collapse-item" href="utilities-border.html">Borders</a>
                            <a class="collapse-item" href="utilities-animation.html">Animations</a>
                            <a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                    </div>
                </li>
    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                    Addons
                </div>
    
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Pages</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Login Screens:</h6>
                            <a class="collapse-item" href="login.html">Login</a>
                            <a class="collapse-item" href="register.html">Register</a>
                            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">Other Pages:</h6>
                            <a class="collapse-item" href="404.html">404 Page</a>
                            <a class="collapse-item" href="blank.html">Blank Page</a>
                        </div>
                    </div>
                </li>
    
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span></a>
                </li>
    
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                </li>
     --}}
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
    
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
    

    
            </ul>
            <!-- End of Sidebar -->
    