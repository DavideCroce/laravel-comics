@extends('layouts.main')


@section('content')
    <div class="current-series">
        <div class="card-section">
            @foreach ($comics as $comic)
                <a href="">
                    <div class="card">
                        <div class="thumb" style="background-image: url({{ $comic['thumb'] }})"></div>
                        <p>{{ $comic['series'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
        <!-- <div>CURRENT SERIES</div> -->
        <button>LOAD MORE</button>
    </div>
@endsection
