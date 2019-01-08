@extends('layout')

@section('content')
	<h2 class="title" style="margin-top: 25px">Subscribers:</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Subscribed at</th>
		</tr>
	@foreach($subscribers as $subscriber)
		<tr>
			<td>{{$subscriber->name}}</td>
			<td>{{$subscriber->email}}</td>
			<td>{{$subscriber->gender}}</td>
			<td>{{$subscriber->created_at}}</td>
		</tr>
	@endforeach
	</table>
	<div class="notification is-link" style="margin-top: 30px">
		<h4><a href="/home">Main menu</a></h4>
	</div>
@endsection