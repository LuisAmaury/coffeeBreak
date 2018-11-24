{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('products', 'Productos') }}
	<div>
	@foreach($products as $product)
		<label>
			{{ Form::checkbox('products[]', $product->id) }} {{ $product->name }} $ {{ $product->price}}
		</label>
	@endforeach
	</div>
</div>

<div class="form-group">
  {{ Form::number('total',null, ['class' => 'form-control', 'id' => 'total', 'hidden'=>true]) }}
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
  $('input[name="products[]"]').change(function(){
        if ($(this).is(':checked')) {
          var productsCheck = [];
          var totalPrice = 0;
          $.each($("input[name='products[]']:checked"), function(){
                productsCheck.push($(this).val());
            });
          console.log(productsCheck);
          console.log(products);
          for(prod in productsCheck){
            let id = parseInt(productsCheck[prod]) - 1;
            totalPrice += products[id].price;
            // console.log(productsCheck[id]);

          }
          }
          total.value = totalPrice;
    });
});

saveSale.addEventListener('click', function(){
  var cardNumber = '{!! auth()->user()->cardNumber !!} ';
  var data = {
    'ctaorigen':  cardNumber,
    'ctadestino': '0000000000000010',
    'monto': parseFloat(total.value),
    'detalle': 'venta de coffeeBreak'
  };

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
