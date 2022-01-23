@extends('layouts.app')

@section('content')
<h3>Créer nouveau poste</h3>
<form method="POST" action="{{route('restaurant.store')}}">
	@csrf
	<input type="text" name="name" class="border-gray-600 border-2">
	<textarea name="desc" cols="30" rows="10" class="border-gray-600 border-2">

		</textarea>
	<button type="submit" class="bg-green-500">Create</button>
</form>
@endsection