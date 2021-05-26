@extends('layouts.main-layout')
@section('content')
    <div id="info">
    <p><b>Nome:</b> {{$ospite -> name}}</p>
    <p><b>Cognome:</b> {{$ospite -> lastname}}</p>
    <p><b>Data di nascit&agrave;:</b> {{$ospite -> date_of_birth}}</p>
    <p><b>Riconoscimento tramite:</b> {{$ospite -> document_type}}</p>
    <p><b>Numero documento:</b> {{$ospite -> document_number}}</p>
    <p><b>Data di registrazione:</b> {{$ospite -> created_at}}</p>
    </div>
@endsection