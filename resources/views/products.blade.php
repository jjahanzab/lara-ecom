@extends('master')
@section('content')

<style>
.slider-img {
	height: 400px !important;
	display: block;
	margin-left: auto;
	margin-right: auto;
}
.custom-product {
	height: 500px !important;
}
.trend-img {
	height: 100px !important;
}
</style>

<div class="custom-product">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	  	@foreach($products as $key => $product)
	      <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" class="{{$key==0?'active':''}}"></li>
	    @endforeach
	  </ol>

	  <div class="carousel-inner" role="listbox">
	  	@foreach($products as $key => $product)
		    <div class="item {{$key==0?'active':''}} text-center">
		      <img class="slider-img" src="{{ $product->gallery }}" alt="...">
		      <div class="carousel-caption">
		        <h3>{{ $product->name }}</h3>
			    <p>{{ $product->description }}</p>
		      </div>
		    </div>
	    @endforeach
	  </div>

	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<div class="container">
	<div class="row">
		@foreach($products as $key => $product)
			<div class="col-md-3 text-center">
				<img class="trend-img" src="{{ $product->gallery }}">
				<br>
				<a class="btn btn-link" href="{{ route('product', $product->id) }}">
			        {{ $product->name }}
				</a>
			</div>
		@endforeach
	</div>
</div>

@endsection