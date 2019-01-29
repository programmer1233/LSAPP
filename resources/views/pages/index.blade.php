@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
<h1>{{$title}}</h1>
<p>This is the Laravel Application from the 'Laravel from Scratch' Youtube Series</p>
<p><a class="btn btn-info btn-lg" href="{{ @url('/login')}}" role="button">Login</a> <a class="btn btn-warning btn-lg" href="{{ @url('/register')}}" role="button">Register</a></p>

</div>

@endsection
