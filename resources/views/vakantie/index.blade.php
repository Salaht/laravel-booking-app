@extends('layouts.app')

@section('content')

	<h1>Vakantie in {{$country->name}}</h1>

	<hr/>

<div class="row">
@foreach($holidays as $holiday)
		<article>
			<h2>
				<a href="{{ url('/vakantie', $holiday->id) }}">{{$holiday->name}}</a>
			</h2>

			<div class="body">{{$holiday->description}}</div>
			<h2>€ {{$holiday->decimal}}</h2>
			<button type="button" class="btn btn-default" value="{{$holiday->id}}" id="create" data-toggle="modal" data-target="#reservationModal" data-whatever="">Reserveer nu</button>
		</article>
		<hr>
	@endforeach

</div>
<!-- /.row -->

@include('partials.reservation')


@endsection

@section('myjsfile')
  <script src="/js/script.js" type="text/javascript"></script>
@endsection