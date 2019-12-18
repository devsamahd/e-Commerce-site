@extends('layouts.master')
@section('title')
samahd's store
@endsection

@section('content') 
@foreach($product->chunk(3) as $productchunk)
<div class="row">
	@foreach($productchunk as $product)
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="{{ $product->imagePath }}">
			<div class="caption">
				<h3>{{ $product->title }}</h3>
				<p class="product-description">{{ $product->description }}</p>
				<div class="pull-left price">
					${{ $product->price }}
				</div>
				<div align="right"><a href="{{ route('product.AddToCart', [ 'id'=> $product->id ]) }}" class="btn btn-primary" role="button">Add to cart</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach

</div>
@endforeach
<br><hr><br>


@endsection