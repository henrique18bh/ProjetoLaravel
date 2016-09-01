@extends('layout.master')
@section('title', 'Home')

@section('navbar')
	@parent
	<p>new navbar</p>
@endsection

@section('content')
	<p>this is Home Page</p>
	<p>System: <b>{{ $system }}</b></p>
@endsection