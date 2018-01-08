@extends('layouts/app')
@section('content')
<!-- <form class="container">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">
    <small id="title" class="form-text text-muted">Title c'mon</small>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="description" class="form-control" id="description" aria-describedby="description" placeholder="Enter description">
    <small id="description" class="form-text text-muted">Description description description description........</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
<div class="container">

	<hr>
	<hr>

	<div class="row">
		<h1>Product Page</h1>
	</div>

	<form method="POST" action="{{route('product.store')}}">
		<!-- pasleptas input -->
		{{ csrf_field() }}
		<div class="form-group">

			<label for="product_title">Title</label>
			<input type="text"
				class="form-control"
				name="product_title">

		</div>


		<div class="form-group ">
			<label for="product_description">Description</label>
			<input type="text" class="form-control"
					name="product_description">
		</div>
		<div class="form-group ">
			<label for="product_title">Quantity</label>
			<input type="text"
					class="form-control"
					name="product_quantity">
		</div>

		<div class="form-group ">
			<label for="product_title">Price</label>
			<input type="text"
			class="form-control"
			name="product_price">
		</div>

		<div class="form-group ">
			<button type="submit" class="btn btn-default">Submit</button>
		</div>

	</form>
</div>
@endsection
