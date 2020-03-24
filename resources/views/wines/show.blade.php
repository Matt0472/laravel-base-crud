@extends('wines.layouts.layout')
  @section('main-content')
  <h2 class="text-center text-warning">Nuovo vino Inserito:</h2>
    <div class="card">
      <ul>
        <li class="text-primary">ID: <span class="text-dark">{{$wine->id}}</span></li>
        <li class="text-primary">Etichetta: <span class="text-dark">{{$wine->etichetta}}</span></li>
        <li class="text-primary">Cantina: <span class="text-dark">{{$wine->cantina}}</span></li>
        <li class="text-primary">Annata: <span class="text-dark">{{$wine->annata}}</span></li>
        <li class="text-primary">Descrizione: <span class="text-dark">{{$wine->descrizione}}</span></li>
        <li class="text-primary">Prezzo: <span class="text-dark">{{$wine->prezzo}},00€</span></li>     
      </ul>
    </div>            
  @endsection