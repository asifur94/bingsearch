<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="{{route('dashboard')}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>







      <li class="nav-item">
        <a href="{{route('user.index')}}" class="nav-link {{ (request()->is('admin/user')) ? 'active' : '' }}">
          <i class="nav-icon fas fa-th"></i>
          <p>
            User
          </p>
        </a>
      </li>


      <li class="nav-item

          {{ (request()->is('admin/site-setting')) ? 'menu-open' : '' }}

      ">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Settings
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('site-setting')}}" class="nav-link {{ (request()->is('admin/site-setting')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Website Setting</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{route('change-password')}}" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>Change Password</p>
        </a>
      </li>
    </ul>
  </nav>