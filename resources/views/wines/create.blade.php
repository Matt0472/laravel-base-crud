@extends('wines.layouts.layout')

  @section('main-content')
      <h1 class="text-center">Inserisci un nuovo vino in cantina</h1>
  @if ($errors->any()) 
    <div class="alert alert-danger"> 
      <ul> 
        @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach
      </ul>
    </div> 
  @endif
  <div class="form-group container">
    <form action="{{(!empty($wine)) ? route('wines.update', $wine->id) : route('wines.store')}}" method="post">
      @csrf

      @if(!empty($wine))
        @method('PATCH')
        @else
        @method('POST')
      @endif
      <label for="title">Cantina</label>
      <input class="form-control" type="text" name="cantina" placeholder="Cantina" value="{{(!empty($wine)) ? $wine->cantina : ''}}">
      <label for="content">Etichetta</label>
      <input class="form-control" type="text" name="etichetta" placeholder="Etichetta" value="{{(!empty($wine)) ? $wine->etichetta : ''}}">
      <label for="content">Vitigno</label>
      <input class="form-control" type="text" name="vitigno" placeholder="Vitigno" value="{{(!empty($wine)) ? $wine->vitigno : ''}}">
      <label for="content">Annata</label>
      <input class="form-control" type="text" name="annata" placeholder="Annata" value="{{(!empty($wine)) ? $wine->annata : ''}}">
      <label for="content">Descrizione</label>
      <input class="form-control" type="text" name="descrizione" placeholder="Descrizione" value="{{(!empty($wine)) ? $wine->descrizione : ''}}">
      <label for="content">Prezzo</label>
      <input class="form-control mb-5" type="text" name="prezzo" placeholder="Prezzo" value="{{(!empty($wine)) ? $wine->prezzo : ''}}">

      @if(!empty($wine))
      <input type="hidden" name="id" value="{{$wine->id}}"> 
      @endif
      <input class="btn btn-primary" type="submit" value="Invia">
    </form>
  @endsection