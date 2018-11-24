@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Editar Etiqueta
          </div>
          <div class="card-body">
            {!!  Form::model($sale, ['route' => ['sales.update', $sale->id],
              'method' => 'PUT']) !!}
              @include('admin.sales.partials.form')
            {!!Form::close()!!}
          </div>

        </div>
      </div>

    </div>
  </div>
@endsection
