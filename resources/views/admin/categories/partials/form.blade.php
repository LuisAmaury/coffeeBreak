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
    // var data = {
    //   'ctaorigen': '0000000000000000',
    //   'ctadestino': '0000000000000010',
    //   'monto': 200.00,
    //   'detalle': 'venta de coffeeBreak'
    // };
    // $.ajax({
    //   url: "https://spbank.herokuapp.com/api/payment",
    //   method: "POST",
    //   data: data,
    //   cache: false,
    //   contentType: false,
    //   processData: false,
    //   success: function(response){
    //     console.log("entre al success");
    //     console.log(response);
    //   },
    //   error: function(error){
    //     console.log("Entre al error");
    //   }
    // });
  });
</script>
@endsection
