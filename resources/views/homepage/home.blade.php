@extends('layout')

@section('content')

	<h2 class="title" style="margin-top: 25px">Content:</h2>
	<div class="menu-list">
		@foreach($content as $value)
			<a href="/homepage/{{$value->id}}"><li>{{$value->title}}</li></a>
		@endforeach
	</div>

	<div class="notification is-link" style="margin-top: 30px">
		<h4><a href="/homepage/create">Add new subject</a></h4>
	</div>
	<div class="notification is-link" style="margin-top: 30px">
		<h4><a href="/home">Main menu</a></h4>
	</div>
@endsection