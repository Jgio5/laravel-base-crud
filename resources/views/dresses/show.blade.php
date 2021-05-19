@extends('layouts.app')

@section('title', 'Dettagli vestito')

@section('content')

    <h1>Dettaglio del singolo vestito:</h1>
    
    <div class="container">
        <p>Prezzo: {{ $vestiti['price']}} euro.</p>
        <p>Stagione: {{ $vestiti['season']}}.</p>
    </div>
@endsection