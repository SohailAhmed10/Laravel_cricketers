@extends('layouts.default')

@section('content')
    
    <h1>Cricketers with most sixes in career</h1>

    @foreach ($cricketers as $cricketer)
      <li> {{ link_to("/cricketers/{$cricketer->name}", $cricketer->name) }} </li>
    @endforeach

    <p>{{ link_to_route('cricketers.create', 'Add the cricketer with next most sixes') }}</p>

@stop