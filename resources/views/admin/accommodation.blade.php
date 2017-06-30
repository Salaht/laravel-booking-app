@extends('layouts.app')

@section('content')

<h1>Accommodation Dashboard</h1>
<br>
<div class="row" >
  <a style="margin-bottom:10px;" href="{{ action('AccommodationController@create') }}" class="btn btn-primary">Add Country</a>
  <br>
  <table class="table table-bordered">
    <thead class="thead-inverse">
      <tr>
        <th>Country</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($accommodations as $accommodation)
      <tr>
        <td>{{$accommodation->name}}</td>
        <td><a href="{{ action('AccommodationController@edit', $accommodation->id) }}" class="btn btn-primary">Edit</a></td>
        <td>
          {!! Form::open(array('route' => array('admin.accommodation.destroy', $accommodation->id), 'method' => 'DELETE')) !!}
          {{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
          {!! Form::close() !!}
        </td>     
      </tr>
      @endforeach
    </tbody>
  </table>
</div>









@endsection
