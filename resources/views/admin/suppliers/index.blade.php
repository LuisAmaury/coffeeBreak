{{-- muestra todos los suppliers --}}
@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Lista de etiquetas
            <a href="{{route('suppliers.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover table-responsive">
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Direccion</th>
                  <th>Numero de Tarjeta</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($suppliers as $supplier)
                  <tr>
                    <td>{{$supplier->id}}</td>
                    <td>{{$supplier->name}}</td>
                    <td>{{$supplier->phone}}</td>
                    <td>{{$supplier->address}}</td>
                    <td>{{$supplier->cardNumber}}</td>
                    <td width="10px">
                      <a href="{{route('suppliers.show', $supplier->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                    </td>
                    <td width="10px">
                      <a href="{{route('suppliers.edit', $supplier->id)}}" class="btn btn-sm btn-light">Editar</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{$suppliers->render()}}
          </div>

        </div>
      </div>

    </div>
  </div>
@endsection
