{{--
    MAIN SITE HEADER
--}}


<header class="main-header">
    <div class="container">
        <a href="{{ route('home') }} " class="navbar-brand">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>

        <nav class="navbar-nav">
            <ul class="menu">
                <li>
                    <a href="#">Characters</a>
                </li>
                <li>
                    <a href="#">Comics</a>
                </li>
                <li>
                    <a href="#">Movies</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>
                <li>
                    <a href="#">GAMES</a>
                </li>
                <li>
                    <a href="#">Collectibles</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Fans</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Shop <i class="fas fa-caret-down"></i></a>
                </li>
            </ul>
            <span class="search-bar">
                Search <i class="fas fa-search"></i>
            </span>
        </nav>
    </div>
</header>