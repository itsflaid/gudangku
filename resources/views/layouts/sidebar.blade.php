        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle">
                <span class="brand-text font-weight-light">Gudangku</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">MENU SUPERADMIN</li>

                        <li class="nav-item">
                            <a wire:navigate href="{{ route('superadmin.user.index') }}" class="nav-link @yield('menuSuperadminUser')">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a wire:navigate href="{{ route('superadmin.kategori.index') }}" class="nav-link  @yield('menuSuperadminKategori')">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                Kategori
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a wire:navigate href="{{ route('superadmin.barang.index') }}" class="nav-link  @yield('menuSuperadminBarang')">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>
                                Barang
                                </p>
                            </a>
                        </li>




                        <li class="nav-header">MENU ADMIN</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>
                                Barang
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
