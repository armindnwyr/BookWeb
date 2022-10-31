@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
<div class="col-md-4">
    <x-adminlte-small-box title="Loading" text="Loading data..." icon="fas fa-chart-bar"
    theme="info" url="#" url-text="More info" loading/>
</div>

<div class="col-md-4">
    <x-adminlte-small-box title="424" text="Views" icon="fas fa-eye text-dark"
    theme="teal" url="#" url-text="View details"/>
</div>

<div class="col-md-4">
    <x-adminlte-small-box title="0" text="Reputation" icon="fas fa-medal text-dark"
    theme="danger" url="#" url-text="Reputation history" id="sbUpdatable"/>
</div>

<div class="col-md-4">
    <x-adminlte-small-box title="Title" text="some text" icon="fas fa-star"/>
</div>


</div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
@stop