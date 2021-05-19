@extends('layouts.app')

@section('title', 'Vestiti')

@section('content')

    <h1>Lista dei nostri vestiti</h1>
    
    <div class="container">

        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Color</th>
                <th>Size</th>
                <th>Description</th>
                <th>Detail</th>
                <th>Modification</th>
                <th>Delate</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($vestiti as $vestito)
                    <tr>
                      <th scope="row"> {{ $vestito['id']}}</th>
                      <td>{{ $vestito['name']}}</td>
                      <td>{{ $vestito['color']}}</td>
                      <td>{{ $vestito['size']}}</td>
                      <td>{{ $vestito['description']}}</td>
                      <td>
                          <a href="{{ route('vestiti.show', ['vestiti' => $vestito -> id]) }}" class="btn btn-det">Dettagli</a>
                      </td>
                      <td>
                        <a href="{{ route('vestiti.edit', ['vestiti' => $vestito -> id]) }}" class="btn btn-mod">Modifica</a>
                      </td>
                      <td>
                        <form action="{{ route('vestiti.destroy', ['vestiti' => $vestito -> id]) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-delete">Cancella</button>
                        </form>
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          <div class="button">
            <a href="{{ route('vestiti.create')}}" class="btn btn-create">Inserisci un nuovo vestito</a>
          </div>
    </div>
    
@endsection