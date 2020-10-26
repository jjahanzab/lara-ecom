@extends('master')
@section('content')

<style>
.detail-img {
	height: 300px !important;
	display: block;
	margin-left: auto;
	margin-right: auto;
}
</style>

<div class="container">
	@foreach($products as $product)
		<div class="row">
			<div class="col-md-4 text-center">
				<img class="detail-img" src="{{ $product->gallery }}">
				<br>
				<a class="btn btn-link" href="{{ url('/') }}">Go Back</a>
			</div>
			<div class="col-md-8">
				<h2>{{ $product->name }}</h2>
				<h3><i>(Rs-{{ $product->price }})</i></h3>
				<h4>{{ $product->category }}</h4>
				<p>{{ $product->description }}</p>
				<br><br>
				<button class="btn btn-primary">Add to Cart</button>
				<button class="btn btn-info">Buy Now</button>
			</div>
		</div>
	@endforeach
</div>

@endsection