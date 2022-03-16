@extends('layouts.main')


@section('content')

<div class="current-series">
    <div class="card-section">
        @foreach($comics as $comic)
        <div class="card">
            <img src="{{ $comic['thumb'] }}" alt="">
            <p>{{ $comic['series'] }}</p>
        </div>
        @endforeach
    </div>
    <!-- <div>CURRENT SERIES</div> -->
    <button>LOAD MORE</button>
</div>

@endsection