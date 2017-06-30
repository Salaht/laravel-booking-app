@extends('layouts.app')

@section('content')

<div class="row">


  

<h1>{{$holidays->name}}</h1>

	<article>
		{{$holidays->description}}
	</article>
<h2>€ {{$holidays->decimal}}</h2>
<button type="button" class="btn btn-default">Reserveer nu heeyo!</button>
<hr>


  
</div>
<!-- /.row -->





@endsection
