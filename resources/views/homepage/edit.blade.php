@extends('layout')

@section('content')
	<h1 class="title" style="margin-top: 30px">Edit Subject</h1>
	<form method="post" action="/homepage/{{$content->id}}" enctype="multipart/form-data">
		@method('PATCH')
		@csrf
		<div class="field" style="margin-top: 25px">
			<label class="label" for="title">Title</label>
			<div class="control">
				<input class="input" type="text" name="title" value="{{$content->title}}">
			</div>
		</div>
		<div class="field">
			<label class="label" for="photo">Photo</label>
			<div class="control">
				<?php $photo = "/pics/slider/". $content->photo;?>
				<label class="label">Old photo</label>
				<img src="{{$photo}}" height="100" width="100">
				<label class="label">Choose new photo (optional)</label>
				<input type="file" name="photo">
			</div>
		</div>
		<div class="field">
			<label class="lable" for="date">Date</label>
			<div class="control">
				<input type="date" name="date" value="{{ DateTime::createFromFormat("Y-m-d H:i:s", $content->updated_at)->format("Y-m-d") }}">
		</div>
		<div class="field" style="margin-top: 15px">
			<button type="submit" class="button is-link">Edit subeject</button>
		</div>
	</form>

	<form method="post" action="/homepage/{{$content->id}}">
		@method('DELETE')
		@csrf
		<div class="field" style="margin-top: 15px">
			<button type="submit" class="button is-link">Delete subject</button>
		</div>
	</form>

	<div class="field" style="margin-top: 15px">
		<a href="/homepage/{{$content->id}}" class="button is-link"><< back</a>
	</div>
	@include('errors')
@endsection