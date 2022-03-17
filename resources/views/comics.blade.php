@extends('layouts.main')


@section('content')
    <div class="current-series">
        <div class="card-section">
            @foreach ($comics as $index => $comic)
                <div class="card">
                    <a href="{{ route('comic', ['id' => $index]) }}">
                        <div class="thumb" style="background-image: url({{ $comic['thumb'] }})"></div>
                    </a>
                    <p>{{ $comic['series'] }}</p>
                </div>
            @endforeach
        </div>
        <!-- <div>CURRENT SERIES</div> -->
        <button>LOAD MORE</button>
    </div>
@endsection
