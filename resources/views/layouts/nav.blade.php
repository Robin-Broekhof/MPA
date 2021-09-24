
<body>
    <ul>
        <li><a 
            href="/"
            class="{{ request()->is('/') ? 'active' : ''}}"
            >Home page</a></li>
        <li><a 
            href="/genres/"
            class="{{ request()->is('genres') ? 'active' : ''}}">
            Genres page</a></li>
        <li><a 
            href="#"
            class=""
            >item3</a></li>
        <li><a 
            href="#"
            class=""
            >item4</a></li>
        <li><a 
            href="#"
            class=""
            >item5</a></li>
    </ul>

