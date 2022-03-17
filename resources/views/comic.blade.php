@extends('layouts.main')

@section('content')
    <div class="single-comic">
        <div class="thumb-part">
            <div class="comic-thumb" style="background-image: url({{  }})">
                <p class="type">COMIC BOOK</p>
                <p class="view">VIEW GALLERY</p>
            </div>
            <div class="comic-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-4"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h6>Talent</h6>
                            <hr>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-2">Art by:</div>
                                    <div class="col-8">Artists</div>
                                </div>
                            </div>
                            <hr>
                            <div class="internal-container">
                                <div class="row">
                                    <div class="col-2">Written by:</div>
                                    <div class="col-8">Writers</div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-5">
                                <h6>Specs</h6>
                                <hr>
                                <div class="internal-container">
                                    <div class="col-3">Series:</div>
                                    <div class="col-3"></div>
                                </div>
                                <hr>
                                <div class="internal-container">
                                    <div class="col-3">U.S Price</div>
                                    <div class="col-3"></div>
                                </div>
                                <hr>
                                <div class="internal-container">
                                    <div class="col-3">On Sale Date:</div>
                                    <div class="col-3"></div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-4 links">
                            <div class="internal-container">
                                <div class="col-6">DIGITAL COMICS</div>
                                <div class="col-3">icon</div>
                            </div>
                        </div>
                        <div class="col-4 links">
                            <div class="internal-container">
                                <div class="col-6">DIGITAL COMICS</div>
                                <div class="col-3">icon</div>
                            </div>
                        </div>
                        <div class="col-4 links">
                            <div class="internal-container">
                                <div class="col-6">DIGITAL COMICS</div>
                                <div class="col-3">icon</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
