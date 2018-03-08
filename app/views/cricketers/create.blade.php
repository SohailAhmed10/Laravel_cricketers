@extends('layouts.default')

@section('content')

    <h1> Add the Player with the next most sixes </h1>
    
    {{ Form::open(['route'=>'cricketers.store']) }}

    <div>

      {{ Form::label('name', 'Player Name:') }}
      {{ Form::input('text', 'name') }}

    </div>

    <div>
      {{ Form::label('number_of_sixes', 'Number of Sixes:') }}
      {{ Form::input('number', 'number_of_sixes') }}
    </div>

    <div>
      {{ Form::label('age', 'Age:') }}
      {{ Form::input('number', 'age') }}
    </div>

    <div>
      {{ Form::label('shirt_number', 'Shirt Number:') }}
      {{ Form::input('number', 'shirt_number') }}
    </div>

    <div> {{ Form::submit('Add Player') }} </div>

    {{ Form::close() }}

@stop