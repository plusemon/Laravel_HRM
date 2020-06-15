
<div id="wrapper">
    <!-- Sidebar Section-->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="img/avatar.svg">
        </div>
        <div class="sidebar-brand-text mx-3">Employee</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('employee') }}">
          <i class="fas fa-address-card"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Main
      </div>

      <!--Profile Show Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('employee/profile') }}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Profile</span>
        </a>
      </li>

       <!--Task Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('employee/leave') }}">
          <i class="fas fa-clipboard-list"></i>
          <span>Leave Request</span>
        </a>
      </li>


      <!--Task Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('employee/attandence') }}">
          <i class="fas fa-clipboard-list"></i>
          <span>View Attandence</span>
        </a>
      </li>

      <!--Task Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('employee/events') }}">
          <i class="fas fa-clipboard-list"></i>
          <span>View Events</span>
        </a>
      </li>

      <!--Task Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('employee/task') }}">
          <i class="fas fa-clipboard-list"></i>
          <span>Task</span>
        </a>
      </li>





      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        <i class="fas fa-cogs">Settings</i>
      </div>

      <!--Award Section-->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('employee/award') }}">
          <i class="fas fa-trophy"></i>
          <span>Award</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('employee/notice') }}">
          <i class="fas fa-briefcase"></i>
          <span>Notice Board</span>
        </a>
      </li>



      <hr class="sidebar-divider">
    </ul>
    <!-- Sidebar Section-->

