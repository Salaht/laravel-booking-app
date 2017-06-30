@extends('layouts.app')

@section('content')

<h1>Admin Dashboard</h1>
<br>
<div class="row">
<a href="{{ url('admin/country') }}" class="btn btn-primary">Admin Country</a>
<a href="{{ url('admin/holiday') }}" class="btn btn-primary">Admin Holiday</a>
</div>

@endsection
