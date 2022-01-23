@extends('layouts.app')

@section('content')
<h3>{{$restaurant->name}}</br>{{$restaurant->desc}}</h3>
<hr>
@forelse($restaurant->dishes as $dish)
<h3>{{$dish->name}}</h3>
@empty
<h3>NO DISHES</h3>
@endforelse

{{$restaurant->user}}
@endsection