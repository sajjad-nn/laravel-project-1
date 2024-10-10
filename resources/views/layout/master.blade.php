<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my project-@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <p>this is Header</p>

        <div>
            @yield('content')
        </div>
        <footer>
            <p>this is footer </p>
        </footer>
    </header>
    
</body>
</html>