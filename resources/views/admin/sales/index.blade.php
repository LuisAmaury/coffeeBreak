{{-- muestra todos los sales --}}
@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Lista de etiquetas
            <a href="{{route('sales.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover table-responsive">
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Id Usuario</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sales as $sale)
                  <tr>
                    <td>{{$sale->id}}</td>
                    <td>{{$sale->user_id}}</td>
                    <td>{{$sale->total}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{$sales->render()}}
          </div>

        </div>
      </div>

    </div>
  </div>
@endsection
