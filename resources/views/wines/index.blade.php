<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Wines Cellar</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Una Bott(a)e per la vita</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('wines.index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('wines.create')}}">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Delete</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <div class="container-fluid">
    <div class="wrapper">
      <h1 class="text-center">Wines Cellar</h1>
    </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Cantina</th>
      <th scope="col">Etichetta</th>
      <th scope="col">Annata</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Prezzo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($wines as $wine)
      <tr>
      <th scope="row">{{$wine->id}}</th>
        <td>{{$wine->cantina}}</td>
        <td>{{$wine->etichetta}}</td>
        <td>{{$wine->annata}}</td>
        <td>{{$wine->descrizione}}</td>
        <td>{{$wine->prezzo}},00€</td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</body>
</html>