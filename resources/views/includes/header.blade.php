<header>
    <div class="topheader">
        <div class="row">
            <div class="col-2">DC POWER VISA</div>
            <div class="col-2">ADDITIONAL DC SITES</div>
        </div>
    </div>
    <div class="bottom-header">
        <figure>
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </figure>
        <ul class="navbar">
            <li> <a href="{{ route('characters') }}">CHARACTERS</a> </li>
            <li> <a href="{{ route('comics') }}">COMICS</a> </li>
            <li> <a href="{{ route('movies') }}">MOVIES</a> </li>
            <li> <a href="{{ route('tv') }}">TV</a> </li>
            <li> <a href="{{ route('games') }}">GAMES</a> </li>
            <li> <a href="{{ route('collectibles') }}">COLLECTIBLES</a> </li>
            <li> <a href="{{ route('videos') }}">VIDEOS</a> </li>
            <li> <a href="{{ route('fans') }}">FANS</a> </li>
            <li> <a href="{{ route('news') }}">NEWS</a> </li>
            <li> <a href="{{ route('shop') }}">SHOP</a> </li>
        </ul>
        <div class="searchbar">
            <input id="search" type="text" placeholder="SEARCH">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>

</header>