{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('products', 'Productos') }}
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
$(document).ready(function(){
  var products = {!! json_encode($products->toArray()) !!};
  var cardNumber = '{!! auth()->user()->cardNumber !!} ';
  console.log(total.value);
});
saveSale.addEventListener('click', function(){
  var cardNumber = '{!! auth()->user()->cardNumber !!} ';

  console.log(total.value);
  var data = {
    'ctaorigen':  cardNumber,
    'ctadestino': '0000000000000010',
    'monto': 50,
    'detalle': 'venta de coffeeBreak'
  };
  console.log(data);
  $.ajax({
    url: "https://spbank.herokuapp.com/api/payment",
    method: "POST",
    data: data,
    // cache: false,
    // contentType: false,
    // processData: false,
    success: function(response){
      console.log(response);
      alert("Venta realizada con exito");

    },
    error: function(error){
      alert("Venta no exitosa");
    }
  });
});
</script>
@endsection
