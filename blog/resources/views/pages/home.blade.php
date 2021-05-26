@extends('layouts.main-layout')
@section('content')
    <div id="gen-guest">
        <a href="{{ route('gen_guest') }}">Crea ospite</a>
    </div>
    <ul>
        @foreach ($guests as $guest)
            <li>
                <a href="{{ route('info', $guest -> id) }}">
                    <div class="card">
                        <p><b>Nome: </b><span>{{ $guest -> name }}</span></p>
                        <p><b>Cognome: </b><span>{{ $guest -> lastname }}</span></p>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
@endsection