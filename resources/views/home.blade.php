@extends('layout.master')
@section('title', 'Home')

@section('navbar')
	@parent
	<p>new navbar</p>
@endsection

@section('content')
	<p>this is Home Page</p>
	@if(2 === 1)
		<p>The values are equal</p>
	@elseif(2 > 1)
		<p>The value is greater</p>
	@endif

	@for($i=0; $i < 3; $i++)
		Count loop {{$i}}<br>
	@endfor

	@foreach($users as $user)
		<p>Name: {{ $user['Name'] }}</p>
	@endforeach

	@forelse($cars as $car)
		{{ $car['Name'] }}
	@empty
		<p>No registry</p>
	@endforelse

	<?<?php $i = 0 ?>

	@while($i <= 2)
		<p>This is While {{ $i++ }}</p>
	@endwhile
@endsection