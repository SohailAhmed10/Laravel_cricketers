@extends('layouts.default')

@section('content')
    
    <h1>Cricketers with most sixes in career</h1>

    @foreach ($cricketers as $cricketer)
      <li> {{ link_to("/cricketers/{$cricketer->name}", $cricketer->name) }} </li>
    @endforeach

@stop