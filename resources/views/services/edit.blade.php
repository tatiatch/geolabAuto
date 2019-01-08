@extends('layout')

@section('content')
	<h1 class="title" style="margin-top: 30px">Edit Subject</h1>
	<form method="post" action="/services/{{$service->id}}" enctype="multipart/form-data">
		@method('PATCH')
		@csrf
		<div class="field" style="margin-top: 25px">
			<label class="label" for="title">Title</label>
			<div class="control">
				<input class="input" type="text" name="title" value="{{$service->title}}">
			</div>
		</div>
		<div class="field">
			<label class="label" for="photo">Photo</label>
			<div class="control">
				<?php $photo = "/pics/services/". $service->photo;?>
				<label class="label">Old icon</label>
				<img src="{{$photo}}" height="100" width="100">
				<label class="label">Choose new photo (optional)</label>
				<input type="file" name="photo">
			</div>
		</div>
		<div class="field" style="margin-top: 15px">
			<button type="submit" class="button is-link">Edit service</button>
		</div>
	</form>

	<form method="post" action="/services/{{$service->id}}">
		@method('DELETE')
		@csrf
		<div class="field" style="margin-top: 15px">
			<button type="submit" class="button is-link">Delete service</button>
		</div>
	</form>
	<div class="field" style="margin-top: 15px;">
		<a href="/services/{{$service->id}}" class="button is-link"><< back</a>
	</div>
	@include('errors')
@endsection