@extends('layout')



@section('content')
    
    <h2>Add a new photo</h2>

    {{ Form::open(['route' => 'photo.store', 'files' => true]) }}
        <div class="form-group">
        {{ Form::label('title', 'Title: ') }}
        {{ Form::text('title') }}
        {{ $errors->first('title')}}
        </div>
        <div class="form-group">
        {{ Form::label('artist_id', 'Artist: ') }}
        {{ Form::text('artist_id') }}
        {{ $errors->first('artist_id')}}
        </div>
       <!--    <div class="form-group">
        {{ Form::label('file', 'Photo: ') }}
        {{ Form::file('file') }}
        </div> -->

         <div class="form-group">
        {{ Form::submit('Upload') }}
        </div>

    {{ Form::close() }}

@stop