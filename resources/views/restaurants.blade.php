@extends('layouts.app')

@section('content')
	@forelse ($restaurants as $restaurant)
		<h3><a href="{{route('restaurant.show', ['id' => $restaurant->id])}}">{{$restaurant->name}}</a></h3>
	@empty
		<h3>Pas de restaurant</h3>
	@endforelse($)
@endsection