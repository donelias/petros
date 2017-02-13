@extends('layouts.store.template')

@section('content')
    <style>
        body{
            margin-top: 70px;
        }
    </style>
<!-- works -->
<div class="container text-center">
  <div id="products">
    @foreach($products as $product)
      <div class="product white-panel">
        <h3>{{ $product->name }}</h3><hr>
        <div class="product-block">
          <img src="{{ $product->image }}" width="200">
        </div>
        <div class="product-info panel">
          <p>{{ $product->extract }}</p>
          <h3>
            <span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span>
          </h3>
          <h4>
            <a href="{{ route('cart-add', $product->slug) }}"><span class="label label-warning" >
                <i class="fa fa-shopping-cart"> Agregar </i></span></a>

            <a href="{{ route('product-detail', $product->slug) }}"><span class="label label-primary" ><i class="fa fa-chevron-circle-right"> Leer mas</i></span></a>
            </h4>
            
          
        </div>
      </div>
    @endforeach
  </div>
  <?php echo $products->render(); ?>
</div>
@stop



