<html>
<head>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home.css">
    @yield('css')
</head>
<body>
<header>
    <img id="logo" src="images/logo.png" alt="">
    @if(Auth::check())
    <div id="profile_field">
        <a id="profile_link" href="#">
            <img src="images/profilepic.png" alt="username"><br>
            <div id="name">{{ Auth::user()->name }}</div>
        </a>
        <div id="messages">
            <img src="images/buttons/messages.png" alt="Messages">
            <div id="messages_amount_number">4</div>
        </div>
        <a id="logout" href="auth/logout">Log out</a>
    </div>
    @endif
</header>
<nav>
    <ul>
        <li><a href="/">Overview</a></li>
        <li><a href="setgoals">Set Goal</a></li>
        <li><a href="mygoals">My Goals</a></li>
        <li><a href="#">Friends</a></li>
    </ul>
</nav>
@yield('content')
</body>
</html>