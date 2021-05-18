@extends('layouts.app')

@section('title', 'Inserimento nuovo vestito')

@section('content')
    <div class="container">
        <h1>Inserisci un nuovo vestito</h1>

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
                <input type="text" class="form-control" id="season" name="season">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection