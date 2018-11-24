{{-- muestra todos los products --}}
@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Lista de etiquetas
            <a href="{{route('products.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Precio</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td width="10px">
                      <a href="{{route('products.show', $product->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                    </td>
                    <td width="10px">
                      <a href="{{route('products.edit', $product->id)}}" class="btn btn-sm btn-light">Editar</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{$products->render()}}
          </div>

        </div>
      </div>

    </div>
  </div>
@endsection
