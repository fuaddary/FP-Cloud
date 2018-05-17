 <!-- Sidebar -->
 <nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                    </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="/">
                            <i class="fa fa-handshake-o text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">SSH</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar15.jpg')}}" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link">
                        <img class="img-avatar" src="/image/penyok.jpg" alt="">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase">Admin</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                <i class="si si-drop"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark" href="/masuk">
                                <i class="si si-logout"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a class="{{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}"><i class="fa fa-coffee"></i><span class="sidebar-mini-hide">Dasbor</span></a>
                    </li>
                    <li>
                        <a class="{{ request()->is('post') ? 'active' : '' }}" href="{{ url('/post') }}"><i class="fa fa-file-text-o"></i><span class="sidebar-mini-hide">Posting</span></a>
                    </li>
                    <li>
                        <a class="{{ request()->is('gallery') ? 'active' : '' }}" href="{{ url('/gallery') }}"><i class="fa fa-photo"></i><span class="sidebar-mini-hide">Galeri</span></a>
                    </li>
                    <li>
                        <a class="{{ request()->is('comment') ? 'active' : '' }}" href="{{ url('/comment') }}"><i class="si si-bubbles"></i><span class="sidebar-mini-hide">Komentar</span></a>
                    </li>
                    <li>
                        <a class="{{ request()->is('user') ? 'active' : '' }}" href="{{ url('/user') }}"><i class="si si-users"></i><span class="sidebar-mini-hide">Pengguna</span></a>
                    </li>
                    <li>
                        <a class="{{ request()->is('donation') ? 'active' : '' }}" href="{{ url('/donation') }}"><i class="fa fa-money"></i><span class="sidebar-mini-hide">Donasi</span></a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->