@extends('welcome')
@section('content')
    <ul class="collection">
        @forelse ($data['results'] as $items)
            <li class="collection-item avatar">
                <img src="https://image.tmdb.org/t/p/original/{{ $items['poster_path'] }}" alt="Foto" class="circle"
                    width="20" height="30">
                <b class="title">{{ $items['original_title'] }}</b>
                <br>
                <p>
                    {{ $items['overview'] }}
                </p>

                <h6><b>Lançamento: </b>{{ date_format(date_create($items['release_date']), 'd/m/Y') }}</h6>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
        @empty
            <h1>Not found</h1>
        @endforelse
    </ul>
@stop
