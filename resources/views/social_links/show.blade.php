@extends('layout')

@section('content')
	<h3>{{$social_link->link}}</h3>
	<a href="/links/{{$social_link->id}}/edit">Edit</a>
@endsection