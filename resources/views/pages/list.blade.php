@extends('welcome')
@section('content')
    <form action="/film/rent" method="POST">
        @csrf
        <ul class="collection">
            @forelse ($data['results'] as $key => $items)
                <li class="collection-item avatar" value="{{$key}}">
                    <img src="https://image.tmdb.org/t/p/original{{ $items['poster_path'] }}" alt="Foto" class="circle"
                        width="20" height="30">

                    <input
                        type="hidden"
                        id="imgPoster{{$key}}"
                        name="imgPoster{{$key}}"
                        value="https://image.tmdb.org/t/p/original{{ $items['poster_path'] }}">

                    <b class="title">{{ $items['original_title'] }}</b>
                    <input
                        type="hidden"
                        id="titleFilm{{$key}}"
                        name="titleFilm"
                        value="{{ $items['original_title'] }}"
                    <br>
                    <p>
                        {{ $items['overview'] }}
                    </p>

                    <h6><b>Lançamento: </b>{{ date_format(date_create($items['release_date']), 'd/m/Y') }}</h6>

                    <button
                        class="btn waves-effect waves-light"
                        type="submit"
                        id="btnRent{{$key}}"
                        name="btnRent"
                        value="{{json_encode([
                            'title' => $items['original_title'],
                            'img' => "https://image.tmdb.org/t/p/original".$items['poster_path'],
                        ])}}"
                    >Alugar</button>
                </li>
            @empty
                <h1>Not found</h1>
            @endforelse
        </ul>
    </form>
@stop
