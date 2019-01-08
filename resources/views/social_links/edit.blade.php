@extends('layout')

@section('content')
	<h1 class="title" style="margin-top: 30px">Edit Subject</h1>
	<form method="post" action="/links/{{$social_link->id}}" enctype="multipart/form-data">
		@method('PATCH')
		@csrf
		<div class="field" style="margin-top: 25px">
			<label class="label" for="link">Link:</label>
			<div class="control">
				<input class="input" type="text" name="link" value="{{$social_link->link}}">
			</div>
		</div>
		<div class="field">
			<label class="label" for="icon">Icon:</label>
			<div class="control">
				<?php $icon = "/pics/social_links/". $social_link->icon;?>
				<label class="label">Old icon</label>
				<img src="{{$icon}}" height="42" width="42">
				<label class="label">Choose new icon (optional)</label>
				<input type="file" name="icon">
			</div>
		</div>
		<div class="field" style="margin-top: 15px">
			<button type="submit" class="button is-link">Edit Link</button>
		</div>
	</form>
	<div class="field" style="margin-top: 15px">
			<a href="/links" class="button is-link"><< back</a>
	</div>
	@include('errors')
@endsection