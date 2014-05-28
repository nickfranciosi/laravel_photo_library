@extends('layout')



@section('content')
    <h2>Photo Gallery</h2>
    <h6>{{ link_to_route('photo.create','Create new image')}}</h6>
    @foreach($photos as $photo)
        <h4>{{ $photo->title }}</h4>
        <img src="/img/{{$photo->file_name}}">
    @endforeach
@stop