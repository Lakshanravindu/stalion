<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Grinders</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Our Menu</h1>
    </header>
    <main>
        <ul>
            @foreach ($menuItems as $item)
                <li>
                    <strong>{{ $item['name'] }}</strong>: ${{ $item['price'] }}
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>
