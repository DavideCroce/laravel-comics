@extends('layouts.main')

@section('content')
    <div class="single-comic">
        <div class="thumb-part">
            <div class="comic-thumb">
                <p class="type">COMIC BOOK</p>
                <p class="view">VIEW GALLERY</p>
            </div>
            <div class="comic-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <h1>{{ $comic['title'] }}</h1>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-9">
                                        <h6>U.S. Price <h6 style="color: white;">{{ $comic['price'] }}</h6>
                                        </h6>
                                        <h6 class="status">AVIABLE</h6>
                                    </div>
                                    <div class="col-3">
                                        <h6>Check Aviability <i class="fa-solid fa-caret-down"></i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <h5>ADVERTISEMENT</h5>
                            <img src="{{ asset('images/adv.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="container specs">
                    <div class="row">
                        <div class="col-6">
                            <h6>Talent</h6>
                            <hr>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-2">Art by:</div>
                                    <div class="col-8">{{ $comic['artists'] }}</div>
                                </div>
                            </div>
                            <hr>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-2">Written by:</div>
                                    <div class="col-8">{{ $comic['writers'] }}</div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-5">
                                <h6>Specs</h6>
                                <hr>
                                <div class="internal-container">
                                    <div class="col-3">Series:</div>
                                    <div class="col-3"><a href="#">{{ $comic['series'] }}</a></div>
                                </div>
                                <hr>
                                <div class="internal-container">
                                    <div class="col-3">U.S. Price:</div>
                                    <div class="col-3">{{ $comic['price'] }}</div>
                                </div>
                                <hr>
                                <div class="internal-container">
                                    <div class="col-3">On Sale Date:</div>
                                    <div class="col-3">{{ $comic['sale_date'] }}</div>
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
                                <div class="col-6">DIGITAL COMICS</div>
                                <div class="col-3"><img src="{{ asset('images/icon1.png') }}" alt=""></div>
                            </div>
                        </div>
                        <div class="col-3 links">
                            <div class="internal-container">
                                <div class="col-6">SHOP DC</div>
                                <div class="col-3"><img src="{{ asset('images/icon4.png') }}" alt=""></div>
                            </div>
                        </div>
                        <div class="col-3 links">
                            <div class="internal-container">
                                <div class="col-6">COMIC SHOP LOCATOR</div>
                                <div class="col-3"><img src="{{ asset('images/icon3.png') }}" alt=""></div>
                            </div>
                        </div>
                        <div class="col-3 links">
                            <div class="internal-container">
                                <div class="col-6">SUBSCRIPTIONS</div>
                                <div class="col-3"><img src="{{ asset('images/icon2.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
