<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" />
  <link rel="stylesheet" href="{{ asset('css/evo-calendar.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/evo-calendar.midnight-blue.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/calendar-style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <title>@yield('title') - Mental Support</title>
</head>

<body>
  <header>
    <a href="#" class="brand"><img src="{{ asset('assets/logo.png') }}" alt="Youth Minds Connect"></a>
    <div class="menu-btn actives"></div>
    <div class="navigation active">
      <div class="navigation-item">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <br />
        <div class="dropdown">
          <a href="#" class="dropdown-toggle">Explore
            <span class="material-symbols-outlined">expand_more</span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('calendar') }}">Calendar</a></li>
            <li><a href="{{ route('resources') }}">Resources</a></li>
            <li><a href="{{ route('articles') }}">Articles</a></li>
          </ul>
        </div>
        <br /><br />
        <div class="dropdown">
          <a href="#" class="dropdown-toggle">Community
            <span class="material-symbols-outlined">expand_more</span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('peer-support') }}">Peer-to-Peer Support</a></li>
            <li><a href="{{ route('interactive-workshops') }}">Interactive Workshops</a></li>
            <li><a href="{{ route('wellness-challenges') }}">Wellness Challenges</a></li>
            <li><a href="{{ route('community-spotlight') }}">Community Spotlight</a></li>
          </ul>
        </div>
        <br />
        <a href="{{ route('psychologist') }}">Professionals</a>
        <a href="{{ route('feedback') }}">Feedback</a>
        <a href="{{ route('notifications') }}">Notifications</a>
        @guest
        <a href="{{ route('login') }}">Login/Signup</a>
        @else
        <a href="{{ route('profile.edit') }}">Profile</a>
        <!-- Other authenticated links -->
        @endguest
      </div>
      </nav>
    </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/tracker.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>