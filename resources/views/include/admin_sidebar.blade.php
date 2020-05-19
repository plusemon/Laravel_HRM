

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
        <a class="nav-link" href="{{ url('/admin') }}">
          <i class="fas fa-address-card"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Main
      </div>

      <!--Profile Show Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.profile') }}">
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
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">System Manage</h6>
            <a class="collapse-item" href="{{url('admin/departments')}}">Department</a>
            <a class="collapse-item" href="{{url('admin/countries')}}">Country</a>
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
        <div id="collapseAttandence" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Attandence</h6>
            <a class="collapse-item" href="{{url('admin/attandence/create')}}">Add Attandence</a>
            <a class="collapse-item" href="{{url('admin/attandence')}}">View Attandence</a>
          </div>
        </div>
      </li>


      <!--Salary Section-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-dollar-sign"></i>
          <span>Salary</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Salary</h6>
            <a class="collapse-item" href="{{url('admin/salaries')}}">Add Salary</a>
            <a class="collapse-item" href="{{url('admin/pay_salary')}}">Pay Salary</a>
          </div>
        </div>
      </li>

      <!--Task Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/events')}}">
          <i class="far fa-calendar-check"></i>
          <span>Event</span>
        </a>
      </li>


      <!--Task Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/task') }}">
          <i class="fas fa-clipboard-list"></i>
          <span>Task</span>
        </a>
      </li>


      <!--Leaves Manage Section-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLeave" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Leave Manage</span>
        </a>
        <div id="collapseLeave" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Leave Manage</h6>
            <a class="collapse-item" href="{{url('admin/leave_types')}}">Leave Types</a>
            <a class="collapse-item" href="{{url('admin/leave')}}">View Leave Application</a>
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
            <a class="collapse-item" href="{{ url('admin/users/create') }}">Add User</a>
            <a class="collapse-item" href="{{ url('admin/users') }}">View User List</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        <i class="fas fa-cogs">Settings</i>
      </div>

      <!--Report Section-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Report</span>
        </a>
        <div id="collapseReport" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Report</h6>
            <a class="collapse-item" href="#">Salary Report</a>
            <a class="collapse-item" href="">Employee Report</a>
          </div>
        </div>
      </li>

      <!--Award Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/award')}}">
          <i class="fas fa-trophy"></i>
          <span>Award</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/notice')}}">
          <i class="fas fa-briefcase"></i>
          <span>Notice Board</span>
        </a>
      </li>



      <hr class="sidebar-divider">
    </ul>
    <!-- Sidebar Section-->
