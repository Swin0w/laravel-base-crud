@extends('layouts.main-layout')
@section('content')
    <ul>
        @foreach ($guests as $guest)
            <li>
                <a href="">
                    <div class="card">
                        <p><b>Nome: </b><span>{{ $guest -> name }}</span></p>
                        <p><b>Cognome: </b><span>{{ $guest -> lastname }}</span></p>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
@endsection