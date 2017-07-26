@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="title">What are you looking for?</h1>

		<form action="/adverts/create" method="post">
			<p class="control">
				<label for="title">Title</label>
				<input type="text" name="title" placeholder="Title" value="{{ old('title') }}">
			</p>
			<p class="control">
				<label for="category">Category</label>
				<select name="category" value="{{ old('category') }}">
					<option value="">Categorie name</option>
					<option value="">Categorie name</option>
					<option value="">Categorie name</option>
				</select>
			</p>
			<p class="control">
				<label for=""></label>
			</p>
		</form>
	</div>

@endsection