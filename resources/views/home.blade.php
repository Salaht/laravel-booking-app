@extends('layouts.app')

@section('content')

<div class="row">

  <div class="col-md-12">


    <h1 class="page-heading">Welkom {{ Auth::user()->name }} Kies een land om op vakantie te gaan!</h1>
    <img src="http://www.boekjereis.net/wp-content/uploads/2011/05/Vakantie-Boeken-1024x576.jpg
    " class="img-rounded" alt="Cinque Terre" width="700" height="300">
    <hr>
    {!! Form::open(['route' => 'vakantie.overview']) !!}
    <div class="form-group">
      {{ csrf_field() }}
      <div class="col-sm-12" style="padding:0px 0px 10px 0px;">
      
        <div class="col-sm-6" style="padding: 0px 5px 0px 5px;">
        {!! Form::label('country', 'Country') !!}
          {!! Form::select('country', $countries, null, ['class' => 'form-control']) !!}
       </div>
       <div class="col-sm-6" style="padding: 0px 5px 0px 5px;" >
       {!! Form::label('accommodation', 'Accommodation') !!}
         {!! Form::select('accommodation', $accommodations, null, ['class' => 'form-control']) !!}
       </div>
      </div>
      
    </div>
    

    <div class="form-group">
      {!! Form::submit('Boek Je Vakantie!', ['class' => 'btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
  </div>
</div>
<!-- /.row -->


@endsection
