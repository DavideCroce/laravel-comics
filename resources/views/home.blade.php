<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>
</head>

<body>
    <header>
        <div class="topheader container">
            <div class="row">
                <div class="col-2">DC POWER VISA</div>
                <div class="col-2">ADDITIONAL DC SITES</div>
            </div>
        </div>
        <div class="bottomheader">
            <img src="../../public/images/dc-logo.png" alt="">
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
                <input type="text" placeholder="SEARCH">
            </div>
        </div>

    </header>
</body>

</html>