{{-- muestra todos los sales --}}
@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Venta de Productos
          </div>
          <div class="card-body">
            {!!  Form::open(['route' => 'sales.store']) !!}
              @include('admin.sales.partials.form')
            {!!Form::close()!!}
          </div>

        </div>
      </div>

    </div>
  </div>
@endsection
