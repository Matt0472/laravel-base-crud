@extends('wines.layouts.layout')
  
    @section('main-content')
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
            <th scope="col"></th>
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
              <td><a class="btn btn-danger" href="">DELETE</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endsection
  