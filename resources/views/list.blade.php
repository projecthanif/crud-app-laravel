<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}" />
    <title>remind</title>
</head>

<body>
    <aside>
        <div class="flex">
            <a href="/" class="aside-link">
                <h3 class="title">remind.me</h3>
            </a>
            <button id="close"></button>
        </div>
        <ul class="aside">
            <li>
                <a href="#" class="aside-link">Lists</a>
            </li>
            <div class="down">
                <li>
                    <a href="#" class="aside-link">About</a>
                </li>
                <li>
                    <a href="#" class="aside-link">Help</a>
                </li>
                <li>
                    <form action="/auth/logout" method="post">
                        @csrf
                        @method('post')
                        <a type="submit" href="/auth/logout" class="aside-link">Log Out</a>
                    </form>
                </li>
            </div>
        </ul>
    </aside>
    <header>
        <div class="lg-header">
            <h2 class="title t1">Your Lists</h2>
            <div class="user-info">
                @auth
                    <h3 class="title v2">Welcome, {{ auth()->user()->name }}</h3>
                    <!-- <img src="#" alt="user"> -->
                @else
                    <h3 class="title v2">Welcome, hanif</h3>
                @endauth

            </div>
        </div>
        <div class="sm-header">
            <h3 class="sm title">remind.me</h3>
            <button class="navbar-btn" id="navbar"></button>
        </div>
    </header>
    <main>
        <section class="card-container">
            <div class="card">
                <h5 class="title v3">To Do</h5>
                <button class="btn"><i class="fa fa cross"></i></button>
                @if (count($listings) !== 0)
                    @foreach ($listings as $listing)
                        <x-card :listing="$listing" />
                    @endforeach
                @endif
            </div>
            <x-card-model :listing="$listing" />
            <div class="card">
                <h5 class="title v3">In Progress</h5>
            </div>
            <div class="card">
                <h5 class="title v3">Completed</h5>
            </div>
        </section>
    </main>
</body>

<script src="{{ asset('js/app.js') }}"></script>

</html>
