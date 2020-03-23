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
  <h1 class="text-center">Wines Cellar</h1>
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
</body>
</html>