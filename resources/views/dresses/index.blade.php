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
                            <a href="{{ route('vestiti.show', ['vestiti' => $vestito -> id]) }}" class="btn">Dettagli</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    
@endsection