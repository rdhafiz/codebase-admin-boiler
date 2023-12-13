<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Header -->
    <div class="content-header">
        <!-- User Avatar -->
        <a class="img-link me-2" href="javascript:void(0)">
            <img class="img-avatar img-avatar32" src="{{ asset('storage/'.auth()->guard('admin')->user()->avatar) }}" alt="">
        </a>
        <!-- END User Avatar -->

        <!-- User Info -->
        <a class="link-fx text-body-color-dark fw-semibold fs-sm" href="javascript:void(0)">
            {{ auth()->guard('admin')->user()->name }}
        </a>
        <!-- END User Info -->

        <!-- Close Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-primary ms-auto" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
        </button>
        <!-- END Close Side Overlay -->
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="content-side">
        <p>
            Content Here
        </p>
    </div>
    <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->

<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <div>
                <a class="text-decoration-none fw-bold tracking-wide mx-auto" href="{{route('CMS.dashboard')}}">
                  <span class="smini-hidden">
                      <img style="width: 150px" src="{{asset('assets/images/purplemed.png')}}" alt="">
                  </span>
                </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-primary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link  {{Route::currentRouteName() == 'CMS.dashboard' ? 'active' : ''}}" href="{{route('CMS.dashboard')}}">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Website Settings</li>
                    <li class="nav-main-item {{in_array(Route::currentRouteName(), ['CMS.page.index']) ? 'open' : ''}}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-lightbulb"></i>
                            <span class="nav-main-link-name">Pages</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{Route::currentRouteName() == 'CMS.page.index' ? 'active' : ''}}" href="{{route('CMS.page.index')}}">
                                    <span class="nav-main-link-name">All Pages</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Learning Management</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{Route::currentRouteName() == 'CMS.course.index' ? 'active' : ''}}" href="{{route('CMS.course.index')}}">
                            <i class="nav-main-link-icon fa fa-check-to-slot"></i>
                            <span class="nav-main-link-name">All Courses</span>
                        </a>
                    </li>
                    <li class="nav-main-item {{in_array(Route::currentRouteName(), ['CMS.course.category.index','CMS.course.type.index','CMS.course.schedule.index']) ? 'open' : ''}}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="javascript:void(0)">
                            <i class="nav-main-link-icon fa fa-cubes"></i>
                            <span class="nav-main-link-name">Course Management</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{Route::currentRouteName() == 'CMS.course.category.index' ? 'active' : ''}}" href="{{route('CMS.course.category.index')}}">
                                    <span class="nav-main-link-name">Course Category</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link {{Route::currentRouteName() == 'CMS.course.type.index' ? 'active' : ''}}" href="{{route('CMS.course.type.index')}}">
                                    <span class="nav-main-link-name">Course Type</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link {{Route::currentRouteName() == 'CMS.course.schedule.index' ? 'active' : ''}}" href="{{route('CMS.course.schedule.index')}}">
                                    <span class="nav-main-link-name">Course Schedule</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Job Management</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('CMS.recruiter.index')}}">
                            <i class="nav-main-link-icon fa fa-globe"></i>
                            <span class="nav-main-link-name">Recruiters</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->
