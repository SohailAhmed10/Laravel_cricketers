@extends('layouts.default')

@section('content')

    <h1> Add the Player with the next most sixes </h1>
    
    {{ Form::open(['route'=>'cricketers.store']) }}

    <div>

      {{ Form::label('name', 'Player Name:') }}
      {{ Form::input('text', 'name') }}
      {{ $errors->first('name') }}

    </div>

    <div>
      {{ Form::label('number_of_sixes', 'Number of Sixes:') }}
      {{ Form::input('number', 'number_of_sixes') }}
      {{ $errors->first('number_of_sixes') }}
    </div>

        <div>
      {{ Form::label('number_of_matches', 'Number of Matches:') }}
      {{ Form::input('number', 'number_of_matches') }}
      {{ $errors->first('number_of_matches') }}
    </div>

    <div>
      {{ Form::label('age', 'Age:') }}
      {{ Form::input('number', 'age') }}
      {{ $errors->first('age') }}
    </div>



    <div> {{ Form::submit('Add Player') }} </div>

    {{ Form::close() }}

@stop