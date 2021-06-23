<body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top">
        <div class="container">
        <a href="/" class="navbar-brand">Social Media Consultant</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
       
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link px-3">Home</a>
                    </li>
                    <li class="nav-item">
                        @auth
                        <a class="nav-link px-3" href="/dashboard">My Account</a>
                        @endauth
                        @guest
                        <a class="nav-link px-3" href="/login">Login</a>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>