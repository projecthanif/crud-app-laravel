<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <title>remind.me</title>
</head>

<body>
    <nav>
        <ul class="navbar">
            <li>
                <a href="/" class="nav-link">remind.me</a>
            </li>
            <div class="left">
                <li>
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li>
                    <a href="/auth/signup" class="nav-link">Sign Up</a>
                </li>
            </div>
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
