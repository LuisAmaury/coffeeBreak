{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
  {{ Form::label('products', 'Articulos') }}
  <div>
    @foreach($products as $product)
      <label>
        {{ Form::checkbox('products[]', $product->id) }} {{ $product->name }}
      </label>
    @endforeach
  </div>
</div>
<div class="form-group">
  {{ Form::number('total',50.00, ['class' => 'form-control', 'id' => 'total', 'hidden'=>true]) }}
</div>

<div class="form-group">
  {{ Form::submit('Comprar', ['class' => 'btn btn-sm btn-primary', 'id' => 'saveSale'])}}
</div>

@section('scripts')
<script src="{{asset('vendor/stringToSlug/stringToSlug.min.js')}}"></script>
<script type="text/javascript">
saveSale.addEventListener('click', function(){
  var cardNumber = {{ auth()->user()->cardNumber }};
  console.log('Jola');
  console.log(cardNumber);
  console.log(total.value);
  var data = {
    'ctaorigen': '00000000000000015',
    'ctadestino': '0000000000000010',
    'monto': 50,
    'detalle': 'venta de coffeeBreak'
  };
  $.ajax({
    url: "https://spbank.herokuapp.com/api/payment",
    method: "POST",
    data: data,
    cache: false,
    contentType: false,
    processData: false,
    success: function(response){
      alert("Venta realizada con exito");
      console.log(response);
    },
    error: function(error){
      alert("Venta no exitosa");
    }
  });
});
</script>
@endsection
