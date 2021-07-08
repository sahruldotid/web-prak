<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'dashboard') ? 'active' : '' }}" href="{{route('consultant_dashboard')}}">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'edit') ? 'active' : '' }}" href="{{route('consultant_edit')}}">
                  <span data-feather="users"></span>
                  Edit Account
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'history') ? 'active' : '' }}" href="{{route('consultant_history')}}">
                  <span data-feather="book"></span>
                  Edit Account
                </a>
              </li>
            </ul>        
          </div>
        </nav>