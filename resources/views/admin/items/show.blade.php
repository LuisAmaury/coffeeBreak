{{-- Muestra un item --}}
{{-- muestra todos los items --}}
@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Ver Etiqueta
          </div>
          <div class="card-body">
            <p>  <strong>Nombre</strong>  {{$item->name }} </p>
            <p>  <strong>Slug</strong>  {{$item->slug }} </p>
            <p>  <strong>Tipo de Unidad</strong>  {{$item->unitType }} </p>
            <p>  <strong>Precio</strong>  {{$item->price }} </p>
            <p>  <strong>Cantidad</strong>  {{$item->stock }} </p>
          </div>

        </div>
      </div>

    </div>
  </div>
@endsection
