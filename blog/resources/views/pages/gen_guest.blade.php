@extends('layouts.main-layout')
@section('content')
    <form method="POST" action="{{ route('store') }}" id="form">

        @csrf
        @method('POST')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3>Registrazione nuovo cliente</h3>
        <input type="text" name="name" placeholder="Inserisci il tuo nome...">
        <input type="text" name="lastname" placeholder="Inserisci il tuo cognonome...">
        <input type="date" name="date_of_birth" placeholder="Data di nascità...">
        <input type="text" name="document_type" placeholder="Riconoscimento tramite...">
        <input type="text" name="document_number" placeholder="Numero del documento...">
        <input type="submit">
    </form>
@endsection