<!-- Header -->
<header id="page-header">
<div class="w-100" id="vueHeaderInstance">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center space-x-2">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Full Search -->
            <form class="d-none d-sm-inline-block" action="#" method="POST" onsubmit="return false;">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search..">
                    <span class="input-group-text">
                  <i class="fa fa-search"></i>
                </span>
                </div>
            </form>
            <!-- END Full Search -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fw-semibold">{{ auth()->guard('admin')->user()->name }}</span>
                    <i class="fa fa-angle-down opacity-50 ms-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="p-2">
                        <a class="dropdown-item d-flex align-items-center justify-content-start space-x-1" href="be_pages_generic_profile.html">
                            <i class="fa fa-fw fa-user opacity-25 me-2"></i>
                            <span>Profile</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-start" href="be_pages_generic_inbox.html">
                            <i class="fa fa-fw fa-user-edit opacity-25 me-2"></i>
                            <span>Profile Update</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-start space-x-1" href="be_pages_generic_invoice.html">
                            <i class="fa fa-fw fa-key opacity-25 me-2"></i>
                            <span>Change Password</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item d-flex align-items-center justify-content-start space-x-1" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-fw fa-bell opacity-25 me-2"></i>
                            <span>Notification Settings</span>
                        </a>
                        <!-- END Side Overlay -->

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center justify-content-start space-x-1" href="javascript:void(0)" @click="logout">
                            <i class="fa fa-fw fa-sign-out-alt opacity-25 me-2"></i>
                            <span>Sign Out</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="fa fa-fw fa-list"></i>
            </button>
            <!-- END Toggle Side Overlay -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-body-extra-light">
        <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
                <div class="input-group">
                    <!-- Close Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                    <!-- END Close Search Section -->
                    <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-fw fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="far fa-sun fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</div>
</header>
<!-- END Header -->
