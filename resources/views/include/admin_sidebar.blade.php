<div id="wrapper">
    <!-- Sidebar Section-->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon">
                <img src="img/avatar.svg">
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="admin">
                <i class="fas fa-address-card"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Main
        </div>

        <!--Profile Show Section-->
        <li class="nav-item">
            <a class="nav-link" href="admin-profile">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Profile</span>
            </a>
        </li>

        <!--System Manage Section-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fab fa-windows"></i>
                <span>System Manage</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">System Manage</h6>
                    <a class="collapse-item"
                        href="{{ asset('admin-system-department') }}">Department</a>
                    <a class="collapse-item" href="{{ asset('admin-system-country') }}">Country</a>
                </div>
            </div>
        </li>

        <!--Attandence Manage Section-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAttandence"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Attandence</span>
            </a>
            <div id="collapseAttandence" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Attandence</h6>
                    <a class="collapse-item" href="alerts.html">Mark Attandence</a>
                    <a class="collapse-item" href="buttons.html">View Attandence</a>
                </div>
            </div>
        </li>


        <!--Salary Section-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                aria-expanded="true" aria-controls="collapsePage">
                <i class="fas fa-dollar-sign"></i>
                <span>Salary</span>
            </a>
            <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Salary</h6>
                    <a class="collapse-item" href="{{ asset('admin-salary') }}">Add Salary</a>
                    <a class="collapse-item" href="register.html">Pay Salary</a>
                </div>
            </div>
        </li>


        <!--Task Section-->
        <li class="nav-item">
            <a class="nav-link" href="admin-task-index">
                <i class="fas fa-clipboard-list"></i>
                <span>Task</span>
            </a>
        </li>


        <!--Leaves Manage Section-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLeave"
                aria-expanded="true" aria-controls="collapseTable">
                <i class="fas fa-fw fa-table"></i>
                <span>Leave Manage</span>
            </a>
            <div id="collapseLeave" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Leave Manage</h6>
                    <a class="collapse-item" href="admin-leave-types">Leave Types</a>
                    <a class="collapse-item" href="admin-leave-view">View Leave Application</a>
                </div>
            </div>
        </li>


        <!--User Manage Section-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-users"></i>
                <span>User Manage</span>
            </a>
            <div id="collapseUser" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">User Manage</h6>
                    <a class="collapse-item" href="admin-add-user">Add User</a>
                    <a class="collapse-item" href="admin-user-view">View User List</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            <i class="fas fa-cogs">Settings</i>
        </div>

        <!--Report Section-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport"
                aria-expanded="true" aria-controls="collapsePage">
                <i class="fas fa-fw fa-columns"></i>
                <span>Report</span>
            </a>
            <div id="collapseReport" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Report</h6>
                    <a class="collapse-item" href="#">Salary Report</a>
                    <a class="collapse-item" href="register.html">Employee Report</a>
                </div>
            </div>
        </li>

        <!--Award Section-->
        <li class="nav-item">
            <a class="nav-link" href="admin-award-index">
                <i class="fas fa-trophy"></i>
                <span>Award</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ asset('admin-notice-index') }}">
                <i class="fas fa-briefcase"></i>
                <span>Notice Board</span>
            </a>
        </li>



        <hr class="sidebar-divider">
    </ul>
    <!-- Sidebar Section-->

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <!-- TopBar Section-->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: Weve noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="img/avatar.svg" style="max-width: 60px">
                            <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.html">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!--Finish Topbar Section-->
