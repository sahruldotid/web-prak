<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'dashboard') ? 'active' : '' }}" href="{{route('user_dashboard')}}">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'chat') ? 'active' : '' }}" href="{{route('user_chat')}}">
                  <span data-feather="mail"></span>
                  Chat  
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'transaction') ? 'active' : '' }}" href="{{route('user_transaction')}}">
                  <span data-feather="shopping-cart"></span>
                  Transaction
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{(request()->segment(2) == 'edit') ? 'active' : '' }}" href="{{route('user_edit')}}">
                  <span data-feather="users"></span>
                  Edit Account
                </a>
              </li>
            </ul>        
          </div>
        </nav>