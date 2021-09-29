
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-nav">

              <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" 
              href="/">
              Home page</a>

              <a class="nav-link {{ request()->is('genres') ? 'active' : ''}}" 
              href="/genres/">
              Genres page</a>

              <a class="nav-link {{ request()->is('playlists') ? 'active' : ''}}" 
              href="/playlists/">
              Playlists</a>

              <a class="nav-link {{ request()->is('login') ? 'active' : ''}}" 
              href="/login/">
              Login</a>

              <a class="nav-link me-2 {{ request()->is('register') ? 'active' : ''}}" 
              href="/register/">
              Register</a>

            </div>
        </div>
      </nav>
