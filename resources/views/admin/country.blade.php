@extends('layouts.app')

@section('content')

<h1>Admin Dashboard</h1>
<br>
<div class="row" >
  <a style="margin-bottom:10px;" href="{{ action('CountryController@create') }}" class="btn btn-primary">Add Country</a>
  <br>
  <table class="table table-bordered">
    <thead class="thead-inverse">
      <tr>
        <th>Country</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($countries as $country)
      <tr>
        <td>{{$country->name}}</td>
        <td><a href="{{ action('CountryController@edit', $country->id) }}" class="btn btn-primary">Edit</a></td>
        <td>
          {!! Form::open(array('route' => array('admin.country.destroy', $country->id), 'method' => 'DELETE')) !!}
          {{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
          {!! Form::close() !!}
        </td>    
      </tr>
      @endforeach
    </tbody>
  </table>
</div>









@endsection
