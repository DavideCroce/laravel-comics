<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC Comics</title>
</head>

<body>
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
                <input type="text" placeholder="SEARCH">
            </div>
        </div>

    </header>
    <div class="jumbotron">
        <div class="jb-image" style="background-image: url('{{ asset('images/jumbotron.jpg')}}');"></div>
    </div>
    <main>
        <div>CURRENT SERIES</div>
        <ul>
            <li>ACTION COMICS</li>
            <li>AMERICAN VAMPIRE 1976</li>
            <li>ACQUAMAN</li>
            <li>BATGIRL</li>
            <li>BATMAN</li>
            <li>BATMAN BEYOND</li>
            <li>BATMAN/SUPERMAN</li>
            <li>BATMAN/SUPERMAN ANNUAL</li>
            <li>BATMAN: THE JOKER WARZONE</li>
            <li>BATMAN: THREE JOKERS</li>
            <li>BATMAN: WHITEKNIGHT PRESENTS: HARLEY QUINN</li>
            <li>CATWOMAN</li>
        </ul>
        <button>LOAD MORE</button>
        <div class="other-links">
            <ul>
                <li>
                    <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="">
                    <h3>DIGITAL COMICS</h3>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="">
                    <h3>DC MERCHANDISE</h3>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="">
                    <h3>SUBSCRIPTION</h3>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="">
                    <h3>COMIC SHOP LOCATOR</h3>
                </li>
                <li>
                    <img src="{{ asset('images/buy-dc-power-visa.svg')}}" alt="">
                    <h3>DC POWER VISA</h3>
                </li>
            </ul>
        </div>
    </main>
    <footer>
        <div class="top-footer">
            <div class="dc-comics-shop">
                <h1>DC COMICS</h1>
                <ul>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>TV</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
                <h1>SHOP</h1>
                <ul>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>
            <div class="dc">
                <h1>DC</h1>
                <ul>
                    <li>Terms Of Use</li>
                    <li>Privacy Policy (new)</li>
                    <li>Ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscription</li>
                    <li>Talent Workshop</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="sites">
                <h1>SITES</h1>
                <ul>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC Universe</li>
                    <li>DC Power Visa</li>
                </ul>
            </div>
            <div class="cookies-settings">
                <p>All Sites Content TM and c 2020 DC Enterteinment, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#"></a>Cookies Settings</p>
            </div>
            <img src="{{ asset('images/dc-logo-bg.png') }}" alt="">
        </div>
        <div class="bottom-header">
            <button>SIGN-UP NOW!</button>
            <h4>FOLLOW US</h4>
            <ul>
                <li>FACEBOOK</li>
                <li>TWITTER</li>
                <li>YOUTUBE</li>
                <li>PINTEREST</li>
                <li>GEOGUESSER</li>
            </ul>
        </div>
    </footer>
</body>

</html>