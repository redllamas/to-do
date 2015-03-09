@extends('app')

@section('content')

<h1>About</h1>

<h3>People I Like:</h3>
@if(count($people))
<ul>
	@foreach ($people as $person)
	<li>{{ $person }}</li>
	@endforeach
</ul>
@endif
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore facere esse at, voluptas quam veritatis sint cumque iure nostrum facilis porro impedit odit, numquam dolorum molestiae nobis laudantium veniam!</p>
@stop