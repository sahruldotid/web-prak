        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'dashboard') ? 'active' : '' }}" href="{{route('admin_dashboard')}}">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'customer') ? 'active' : '' }}" href="{{route('admin_customer')}}">
                  <span data-feather="user"></span>
                  Customer  
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'consultant') ? 'active' : '' }}" href="{{route('admin_consultant')}}">
                  <span data-feather="users"></span>
                  Consultant
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'edit') ? 'active' : '' }}" href="{{route('admin_edit')}}">
                  <span data-feather="edit"></span>
                  Edit Account
                </a>
              </li>
            </ul>        
          </div>
        </nav>