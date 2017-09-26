@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		<h1>Sign In</h1>

		<form action="/login" method="POST">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="email">Email Address:</label>
				<input type="email" id="email" name="email" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>
			
			@include('layouts.errors')

		</form>

	</div>

@endsection