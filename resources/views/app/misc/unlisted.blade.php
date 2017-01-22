@extends('master')

@section('title', 'Unlisted')

@section('content')
<h1>Unlisted Videos</h1>
@foreach ($videos as $video)
<div class="unlisted-vid">
    <a href="{{ $video['url'] }}" target="_blank"><img src="{{ $video['img'] }}"/></a>
    <a href="{{ $video['url'] }}" target="_blank">{{ $video['title'] }}</a>
    <span>{{ $video['author'] }}</span>
</div>
@endforeach
@endsection
