<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <input id="search" type="text" placeholder="SEARCH">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>

    </header>
    <div class="jumbotron">
        <div class="jb-image" style="background-image: url('{{ asset('images/jumbotron.jpg')}}')"></div>
    </div>
    <main>
        <div class="current-series">
            <div class="card-section">
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
                <div class="card">
                    <div class="thumb"></div>
                    <p>ACTION COMICS</p>
                </div>
            </div>
            <!-- <div>CURRENT SERIES</div> -->
            <button>LOAD MORE</button>
        </div>
        <div class="other-links">
            <ul>
                <li>
                    <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="">
                    <p>DIGITAL COMICS</p>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="">
                    <p>DC MERCHANDISE</p>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="">
                    <p>SUBSCRIPTION</p>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="">
                    <p>COMIC SHOP LOCATOR</p>
                </li>
                <li>
                    <img class="visa" src="{{ asset('images/buy-dc-power-visa.svg')}}" alt="">
                    <p>DC POWER VISA</p>
                </li>
            </ul>
        </div>
    </main>
    <footer>
        <div class="top-footer">
            <div class="container">
                <div class="footer-links">
                    <div class="lists">
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
                    </div>
                    <div class="cookies-settings">
                        <p>All Sites Content TM and c 2020 DC Enterteinment, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#">Cookies Settings</a></p>
                    </div>
                </div>
                <div class="dc-bg"></div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="dc-family">
                <button>SIGN-UP NOW!</button>
                <div class="socials">
                    <h4>FOLLOW US</h4>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                    <i class="fa-solid fa-location-dot"></i>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>