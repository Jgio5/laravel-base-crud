@extends('layouts.app')

@section('title', 'Dettagli vestito')

@section('content')
    <div class="container">
        <h1>Dettaglio del singolo vestito:</h1>
        <p>Prezzo: {{ $vestito['price']}} euro.</p>
        <p>Stagione: {{ $vestito['season']}}.</p>
    </div>
@endsection