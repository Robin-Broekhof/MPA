
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

              <a class="nav-link float-end{{ request()->is('login') ? 'active' : ''}}" 
              href="/login/">
              login</a>

              <a class="nav-link float-right{{ request()->is('register') ? 'active' : ''}}" 
              href="/register/">
              register</a>

            </div>
        </div>
      </nav>
