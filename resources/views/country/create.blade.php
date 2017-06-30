@extends('layouts.app')

@section('content')

{!! Form::open(array('action' => 'CountryController@store', 'method' => 'POST')) !!}
<div class="form-group col-sm-6 offset-6">
  {!! Form::label('Name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
  {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
</div>
{!! Form::close() !!}




@endsection
