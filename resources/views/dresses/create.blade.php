@extends('layouts.app')

@section('title', 'Inserimento nuovo vestito')

@section('content')
    <div class="container">
        <h1>Inserisci un nuovo vestito</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{route('vestiti.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" id="color" name="color">
            </div>

            <div class="form-group">
                <label for="size">Size:</label>
                <input type="text" class="form-control" id="size" name="size">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>

            <div class="form-group">
                <label for="season">Season:</label>
                <select name="season" id="season" class="form-control">
                    <option value="">-- Seleziona --</option>
                    <option value="estivo">Estivo</option>
                    <option value="primaverile">Primaverile</option>
                    <option value="autunnale">Autunnale</option>
                    <option value="invernale">Invernale</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Invio</button>
        </form>
    </div>
@endsection