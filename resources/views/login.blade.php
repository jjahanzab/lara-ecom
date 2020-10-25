@extends('master')
@section('content')

<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form action="{{ url('/login') }}" method="POST">
			  @csrf
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="text-center">
				  <button type="submit" class="btn btn-light btn-block">Submit</button>
			  </div>
			</form>
		</div>
	</div>
</div>

@endsection