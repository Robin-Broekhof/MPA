
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

      <ul class="navbar-nav">

        <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" 
          href="/">
          Home</a>
          <a class="nav-link {{ request()->is('genres') ? 'active' : ''}}" 
          href="/genres">
          Genres</a>
          <a class="nav-link {{ request()->is('songs') ? 'active' : ''}}" 
          href="/songs">
          Songs</a>
          <a class="nav-link {{ request()->is('playlists') ? 'active' : ''}}" 
          href="/playlists">
          Playlists</a>
        
      </ul>

    

    <div class="d-flex align-items-center">
      <ul class="navbar-nav">
        <a class="nav-link {{ request()->is('login') ? 'active' : ''}}" 
          href="/login/">
          Login</a>
        <a class="nav-link {{ request()->is('register') ? 'active' : ''}}" 
          href="/register/">
          Register</a>
      </ul>
    </div>


  </div>
</nav>