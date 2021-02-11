@extends('template.main')
@section('content')
<div class="container w-75">
    <div class="card w-100 text-center" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">{{$show->nom}}</h3>
          <p class="card-text">Il vous en faudra {{$show->quantite}} grammes</p>
          <a href="/" class="btn btn-success">Go Home</a>
        </div>
      </div>
</div>

@endsection