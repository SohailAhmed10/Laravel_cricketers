@extends('layouts.default')

@section('content')

    <h1>{{ $cricketer->name }} </h1>
    <p>Number of Sixes in career: {{ $cricketer->number_of_sixes }}</p>
    <p>Number of Matches: {{ $cricketer->number_of_matches }}</p>
    <p>Age: {{ $cricketer->age }}</p>

@stop