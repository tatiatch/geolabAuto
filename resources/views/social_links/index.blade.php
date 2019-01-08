@extends('layout')

@section('content')
	<h2 class="title" style="margin-top: 25px">Social Links:</h2>
	@foreach($social_links as $link)
		<li>
			<span><a href="{{$link->link}}">{{$link->link}}</a></span> &nbsp;
			<img src="/pics/social_links/{{$link->icon}}" height="42" width="42"> &nbsp;
			<a href="/links/{{$link->id}}/edit" class="button is-link">edit</a>
		</li>
	@endforeach
	<div class="notification is-link" style="margin-top: 30px">
		<h4><a href="/home">Main menu</a></h4>
	</div>
@endsection