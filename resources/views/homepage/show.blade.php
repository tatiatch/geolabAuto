@extends('layout')

@section('content')
	<div style="margin-top: 50px">
		<h3 class="subtitle is-4" style="font-weight: bold">Title</h3> {{$content->title}}
	</div>
	<div style="margin-top: 15px">
		<h3 class="subtitle is-4" style="font-weight: bold">Photo</h3> 
		<?php $photo = "/pics/slider/". $content->photo;?>
		<img src={{$photo}} height="200" width="200">
	</div>
	<div style="margin-top: 15px">
		<h4 style="font-size: 1.25rem; font-weight: bold">Crated at</h4>
		<?php echo str_replace("-", ".", substr($content->created_at, 0, 10)); ?>
		<h4 style="font-size: 1.25rem; font-weight: bold">Updated at</h4>
		<?php echo str_replace("-", ".", substr($content->updated_at, 0, 10)); ?> 
	</div>
	<div class="notification" style="margin-top: 20px">
		<a href="/homepage/{{$content->id}}/edit"><h3>Edit</h3></a>
	</div>
	<div class="field" style="margin-top: 15px; margin-bottom: 15px;">
		<a href="/homepage" class="button is-link"><< back</a>
	</div>
@endsection