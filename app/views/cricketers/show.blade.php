@extends('layouts.default')

@section('content')

    <h1>{{ $cricketer->name }} </h1>
    <p>Number of Sixes in career: {{ $cricketer->number_of_sixes }}</p>
    <p>Age: {{ $cricketer->age }}</p>
    <p>Shirt Number: {{ $cricketer->shirt_number }}</p>

@stop