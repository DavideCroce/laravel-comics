@extends('layouts.main')

@section('content')
    <div class="detail-p">
        <div class="detail-i">
            <div class="detail-c">
                <div class="comic" style="background-image: url({{ $comic['thumb'] }};)">
                    <p class="type">COMIC BOOK</p>
                    <p class="view">VIEW GALLERY</p>
                </div>
            </div>
        </div>
        <div class="comic-detail">
            <div class="container comic-description">
                <div class="row">
                    <div class="col-7">
                        <h1>{{ $comic['title'] }}</h1>
                        <div class="internal-container aviable">
                            <div class="row">
                                <div class="col-9">
                                    <div class="internal-container p-and-a">
                                        <div class="row">
                                            <div class="col-4">
                                                <h6>U.S. Price
                                                    <span style="color: white;">{{ $comic['price'] }}</span>
                                                </h6>
                                            </div>
                                            <div class="col-4">
                                                <h6 class="status">AVAILABLE</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 check">
                                    <h6>Check Aviability <i class="fa-solid fa-caret-down"></i></h6>
                                </div>
                            </div>
                        </div>
                        <p class="comic-desc">{{ $comic['description'] }}</p>
                    </div>
                    <div class="col-3 adv-sec">
                        <h5>ADVERTISEMENT</h5>
                        <img src="{{ asset('images/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="specs">
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <h6 class="t-and-s">Talent</h6>
                            <hr>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-2">Art by:</div>
                                    <div class="col-8"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-2">Written by:</div>
                                    <div class="col-8"></div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-5 specs-column">
                            <h6 class="t-and-s">Specs</h6>
                            <hr>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-4">Series:</div>
                                    <div class="col-8 series"><a href="#">{{ $comic['series'] }}</a></div>
                                </div>
                            </div>
                            <hr>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-4">U.S. Price:</div>
                                    <div class="col-8">{{ $comic['price'] }}</div>
                                </div>
                            </div>
                            <hr>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-4">On Sale Date:</div>
                                    <div class="col-8">{{ $comic['sale_date'] }}</div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-3 links">
                        <div class="internal-container">
                            <div class="row">
                                <div class="col-6">DIGITAL COMICS</div>
                                <div class="col-1"><img src="{{ asset('images/icon1.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 links">
                        <div class="internal-container">
                            <div class="row">
                                <div class="col-6">SHOP DC</div>
                                <div class="col-1"><img src="{{ asset('images/icon4.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 links">
                        <div class="internal-container">
                            <div class="row">
                                <div class="col-6">COMIC SHOP LOCATOR</div>
                                <div class="col-1"><img src="{{ asset('images/iscon3.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 links">
                        <div class="internal-container">
                            <div class="row">
                                <div class="col-6">SUBSCRIPTIONS</div>
                                <div class="col-1"><img src="{{ asset('images/icon2.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
