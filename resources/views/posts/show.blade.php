@extends('layouts.app')


@section('content')

<a href="{{ route('/') }}" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>
<div>
  {{$post->body}}
</div>
<br>
<small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
@if(!Auth::guest())
  @if(Auth::user()->id == $post->user_id)
<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
 {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
   {{Form::hidden('_method', 'DELETE')}}
   {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
 {!! Form::close() !!}
 @endif
@endif
@endsection
