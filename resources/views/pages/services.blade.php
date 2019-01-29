@extends('layouts.app')

@section('content')

<h1>{{$title}}</h1>

@if(count($services) > 0)
<ul class="list-group">
@foreach($services as $service)
<li class="list-group-item list-group-item-info">{{$service}}</li>
@endforeach
</ul>

@endif

@endsection
