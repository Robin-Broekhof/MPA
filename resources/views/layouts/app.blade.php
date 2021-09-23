<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .active {
            color:red;
        }
    </style>

</head>
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


    @yield("content")



    
    
</body>
</html>