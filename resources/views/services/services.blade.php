@extends('layout')

@section('content')
	<h2 class="title" style="margin-top: 25px">Services:</h2>
	<div class="menu-list">
	@foreach($services as $service)
		<a href="/services/{{$service->id}}"><li>{{$service->title}}</li></a>
	@endforeach
	</div>

	<div class="notification is-link" style="margin-top: 30px">
		<h4><a href="/services/create">Add new service</a></h4>
	</div>
	<div class="notification is-link" style="margin-top: 30px">
		<h4><a href="/home">Main menu</a></h4>
	</div>
@endsection