@extends('layouts.app')


@section('content')

<h1>Posts</h1>

@if(count($posts) > 0)
@foreach($posts as $post)
<div class="well-sm">
<div class="alert alert-info">


<h3><a href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a></h3>
<p>{{$post->body}}</p>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

</div>
</div>
@endforeach

@else

<p>No Posts Found</p>

@endif

@endsection
