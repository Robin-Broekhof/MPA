
<body>
    <ul>
        <li><a 
            href="/"
            class="{{ request()->is('/') ? 'active' : ''}}"
            >Home page</a></li>
        <li><a 
            href="/genres/"
            class="{{ request()->is('genres') ? 'active' : ''}}"
            >Genres page</a></li>
        <li><a 
            href="/login/"
            class="{{ request()->is('login') ? 'active' : ''}}"
            >login</a></li>
        <li><a 
            href="/register/"
            class="{{ request()->is('register') ? 'active' : ''}}"
            >register</a></li>
        <li><a 
            href="#"
            class=""
            >item5</a></li>
    </ul>

