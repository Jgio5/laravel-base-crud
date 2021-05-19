@extends('layouts.app')

@section('title', 'Inserimento nuovo vestito')

@section('content')
    <div class="container">
        <h1>Inserisci un nuovo vestito</h1>

        <form action="{{ route('vestiti.update', $vestiti->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$vestiti -> name}}">
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" id="color" name="color" value="{{$vestiti -> color}}">
            </div>

            <div class="form-group">
                <label for="size">Size:</label>
                <input type="text" class="form-control" id="size" name="size" value="{{$vestiti -> size}}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$vestiti -> description}}">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$vestiti -> price}}">
            </div>

            <div class="form-group">
                <label for="season">Season:</label>
                <select name="season" id="season" class="form-control">
                    <option value="">-- Seleziona --</option>
                    <option value="estivo" {{ $vestiti->season == "estivo" ? 'selected' : ''}}>Estivo</option>
                    <option value="primaverile" {{ $vestiti->season == "primaverile" ? 'selected' : ''}}>Primaverile</option>
                    <option value="autunnale" {{ $vestiti->season == "autunnale" ? 'selected' : ''}}>Autunnale</option>
                    <option value="invernale" {{ $vestiti->season == "invernale" ? 'selected' : ''}}>Invernale</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Invio</button>
        </form>
    </div>
@endsection