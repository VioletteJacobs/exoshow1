@extends('template.main')
@section('content')
    <h1>Bienvenue dans la recette du moelleux au CHOCOLAT</h1>
    <span>
        Voici tout les ingrédients nécessaires:  
    </span>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ingrédient</th>
            <th scope="col">poids</th>
            <th scope="col">delete</th>
            <th scope="col">Show</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($ingredients as $item)
            <tr>
              <th scope="row">1</th>
              <td>{{$item->nom}}</td>
              <td>{{$item->quantite}}</td>
              <td>
                  <form action="/destroy_ingredient/{{$item->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>
              <td>
                  <a class="btn btn-primary" href="/show_ingredient/{{$item->id}}">Show</a>
            </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    
@endsection