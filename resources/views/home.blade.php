@extends('layout.app')

@section('title')
    DC Comics - Home
@endsection

@section('content')
    

    <!-- Parte centrale con le card de i fumetti -->
    <div class="central-page">
        <div class="container">
            @foreach ($comics as $comic)
            <div class="card">
                <img src="{{$comic['thumb']}}">
                <h5>{{$comic["title"]}}</h5>
                <p>{{$comic["price"]}}</p>
            </div>
            @endforeach
        </div>
        
        <div id="load-more">
            <button>
            LOAD MORE
            </button>
        </div>
    </div>

    

@endsection