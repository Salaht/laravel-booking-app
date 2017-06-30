@extends('layouts.app')
@section('content')

<h1>Admin Dashboard</h1>
<br>
<div class="row">
  <button type="button" class="btn btn-primary" id="create" data-toggle="modal" data-target="#createModal" data-whatever="">Add holiday</button>
</div>
<div class="row" style="margin-top:10px">
  <table id="holidays" class="table table-bordered">
    <thead class="thead-inverse">
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Country</th>
        <th>Accommodation</th>
        <th colspan="2"></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($holidays as $holiday)
      <tr id="holiday-{{$holiday->id}}">
        <td>{{$holiday->name}}</td>
        <td>{{$holiday->description}}</td>
        <td>{{$holiday->decimal}}</td>
        <td>{{$holiday->country->name}}</td>
        <td>{{$holiday->accommodation->name}}</td>
        <td class="edit"><button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" value="{{$holiday->id}}">Edit</button></td>
        <td class="delete"><button type="button" class="btn btn-primary" value="{{$holiday->id}}">Delete</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@include('partials.modal')
@include('partials.modaledit')
@endsection

@section('myjsfile')
<script src="/js/script.js" type="text/javascript"></script>
@endsection