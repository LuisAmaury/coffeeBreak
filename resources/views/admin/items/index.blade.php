{{-- muestra todos los items --}}
@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Lista de etiquetas
            <a href="{{route('items.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Nombre</th>
                  <th>Tipo de Unidad</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($items as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->unitType}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->stock}}</td>
                    <td width="10px">
                      <a href="{{route('items.show', $item->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                    </td>
                    <td width="10px">
                      <a href="{{route('items.edit', $item->id)}}" class="btn btn-sm btn-light">Editar</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{$items->render()}}
          </div>

        </div>
      </div>

    </div>
  </div>
@endsection
