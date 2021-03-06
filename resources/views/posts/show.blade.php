@extends('layouts.master')

@section('content')

	<p>{{ $post->title }}</p>
	<p>{{ $post->content }}</p>
	<p>{{ $post->url }}</p>
	<p>{{ $post->created_by }}</p>

	<form method="GET" action="{{ action('PostsController@edit', [$post->id])}}">

	<input type="submit" class="col-sm-3 btn btn-default" value="Update post">

	</form>

	<form method="POST" action="{{ action('PostsController@destroy', [$post->id]) }}">
	{!! csrf_field() !!}
	
	<input type="submit" class="col-sm-3 btn btn-default" value="Delete post">

	{{ method_field('DELETE') }}
	</form>

	@if(session()->has('successMessage'))
        <p>{{ session('successMessage') }}</p>
	@endif

	<form method="POST" action="{{ action('PostsController@vote') }}">
		{!! csrf_field() !!}
		<button type="submit" class="btn btn-success" value="1" name="vote">Up</button>
		<button type="submit" class="btn btn-success" value="0" name="vote">Down</button>
	</form>
@stop