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
  <h1 class="text-center">Inserisci un nuovo vino in cantina</h1>
  <div class="form-group container">
    <form action="{{route('wines.store')}}" method="post">
      @csrf

      @method('POST')
      <label for="title">Cantina</label>
      <input class="form-control" type="text" name="cantina" placeholder="Cantina">
      <label for="content">Etichetta</label>
      <input class="form-control" type="text" name="etichetta" placeholder="Etichetta">
      <label for="content">Vitigno</label>
      <input class="form-control" type="text" name="vitigno" placeholder="Vitigno">
      <label for="content">Annata</label>
      <input class="form-control" type="text" name="annata" placeholder="Annata">
      <label for="content">Descrizione</label>
      <input class="form-control" type="text" name="descrizione" placeholder="Descrizione">
      <label for="content">Prezzo</label>
      <input class="form-control mb-5" type="text" name="prezzo" placeholder="Prezzo">
      <input class="btn btn-primary" type="submit" value="Invia">
    </form>
  </div>
</body>
</html>