@extends('layout')



@section('content')
    
    <h2>Add a new photo</h2>

    {{ Form::open(['route' => 'photo.store', 'files' => true]) }}
        <div class="form-group">
        {{ Form::label('title', 'Title: ') }}
        {{ Form::text('title') }}
        </div>
        <div class="form-group">
        {{ Form::label('artist', 'Artist: ') }}
        {{ Form::text('artist') }}
        </div>
          <div class="form-group">
        {{ Form::label('file', 'Photo: ') }}
        {{ Form::file('file') }}
        </div>

         <div class="form-group">
        {{ Form::submit('Finish') }}
        </div>

    {{ Form::close() }}

@stop