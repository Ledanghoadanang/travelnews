@extends('layouts.frontend.master')
@section('index')
<h1>Here a form</h1>
  {!! Form::open(['url' => '/article', 'files'=>true]) !!}
    @include('partials.forms.article')
  {!! Form::close() !!}
@stop
