@extends('layout')

@section('content')
	<div style="margin-top: 50px">
		<h3 class="subtitle is-4" style="font-weight: bold">Title</h3> {{$service->title}}
	</div>
	<div style="margin-top: 15px">
		<h3 class="subtitle is-4" style="font-weight: bold">Photo</h3> 
		<?php $photo = "/pics/services/". $service->photo;?>
		<img src={{$photo}} height="200" width="200">
	</div>
	<div style="margin-top: 15px">
		<h4 style="font-size: 1.25rem; font-weight: bold">Crated at</h4> {{$service->created_at}}
		<h4 style="font-size: 1.25rem; font-weight: bold">Updated at</h4> {{$service->updated_at}}
	</div>
	<div class="notification" style="margin-top: 20px">
		<a href="/services/{{$service->id}}/edit"><h3>Edit</h3></a>
	</div>
	<div class="field" style="margin-top: 15px; margin-bottom: 30px">
		<a href="/services" class="button is-link"><< back</a>
	</div>
@endsection