@extends('layout')

@section('content')
	<h1 class="title" style="margin-top: 30px">Create subject</h1>
	<form method="post" action="/homepage" enctype="multipart/form-data">
		@csrf
		<div class="field">
			<label class="label" for="title">Title</label>
			<div class="control">
				<input class="input" type="text" name="title" placeholder="Enter title...">
			</div>
		</div>
		<div class="field">
			<label class="label" for="photo">Photo</label>
			<div class="control">
				<input type="file" name="photo">
			</div>
		</div>
		<div class="field">
			<label class="lable" for="date">Date</label>
			<div class="control">
				<input type="date" name="date">
			</div>
		</div>
		<div class="field">
			<button type="submit" class="button is-link">Create new subject</button>
		</div>
	</form>
	<div class="field" style="margin-top: 15px">
		<a href="/homepage" class="button is-link"><< back</a>
	</div>
	@include('errors')
@endsection