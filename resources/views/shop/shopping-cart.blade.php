@extends('layouts.master')
@section('title')
Your cart on samahd's store
@endsection

@section('content')
	@if(Session::has('cart'))
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
 						<li class="list-group-item">
 							<span class="badge badge-dark">{{ $product['qty'] }}</span>
 							<strong>{{ $product['item']['title'] }}</strong>
 							<span class="label label-success">${{ $product['price'] }}</span>
 							<div class="btn-group">
 								<span class="dropdown">
 								<button type="button" class="btn btn-primary btn-xs dropdown-toggle pull-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">
 									Action <span class="caret"></span>
 									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
 										<li><a href="#" class="dropdown-item">Reduce by 1</a></li>
 										<li><a href="#" class="dropdown-item">Remove all</a></li>
 									</ul>
 								</button>
 								</span>
 							</div>
 						</li>
					@endforeach
				</ul>
			</div>
		</div><br><hr>
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<strong>Total: ${{ $totalprice }}</strong>
			</div><br>
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
			</div>
	@else
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>No Items in  cart</h2>
			</div>
	@endif
@endsection 
