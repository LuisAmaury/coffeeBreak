{{-- lo comparte edit y create --}}
<div class="form-group">
  {{ Form::label('name', 'Nombre de la Etiqueta') }}
  {{ Form::text('name',null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
  {{ Form::label('slug', 'URL amigable') }}
  {{ Form::text('slug',null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
  {{ Form::label('unitType', 'Tipo de unidad') }}
  <label>
    {{ Form::radio('unitType', 'GR') }} Gramos
  </label>
  <label>
    {{ Form::radio('unitType', 'ML') }} Mililitros
  </label>
  <label>
    {{ Form::radio('unitType', 'REBANADA') }} Rebanada
  </label>
</div>
<div class="form-group">
  {{ Form::label('price', 'Precio') }}
  {{ Form::number('price',null, ['class' => 'form-control', 'id' => 'price']) }}
</div>
<div class="form-group">
  {{ Form::label('stock', 'Cantidad') }}
  {{ Form::number('stock',null, ['class' => 'form-control', 'id' => 'stock']) }}
</div>
<div class="form-group">
  {{ Form::label('category_id', 'Categoria') }}
  {{ Form::select('category_id', $categories, null,
    ['placeholder' => 'Elige una categoria...', 'id' => 'category_id', 'class' => 'custom-select']) }}
</div>
<div class="form-group">
  {{ Form::label('supplier_id', 'Proveedor') }}
  {{ Form::select('supplier_id', $suppliers, null,
    ['placeholder' => 'Elige un proveedor...', 'id' => 'supplier_id', 'class' => 'custom-select']) }}
</div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])}}
</div>

@section('scripts')
<script src="{{asset('vendor/stringToSlug/stringToSlug.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#name, #slug').stringToSlug({
      callback: function(text){
        $('#slug').val(text);
      }
    });
  });
</script>
@endsection
