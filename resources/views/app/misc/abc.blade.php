@extends('master')

@section('title', 'A Button Challenge')

@section('styles')
<style>
/* npm and gulp are way too fucking out of date here. i can't deal with this shit */
.readable-container {
    max-width: 900px;
    margin: auto;
}
hr {
    border-top: 1px solid #964fb3;
}
</style>
@endsection

@section('content')
<div class="readable-container">
    <h1>A Button Challenge Directory</h1>
    <small class="pull-right">
        Tweet or DM <a target="_blank" href="https://twitter.com/kaztalek">@Kaztalek</a> to give submissions or feedback
    </small>
    <hr>
    <a target="_blank" href="/abc/dk64">Donkey Kong 64</a><br>
    <a target="_blank" href="/abc/sadx">Sonic Adventure (DX)</a><br>
    <a target="_blank" href="/abc/sa2b">Sonic Adventure 2 (Battle)</a><br>
    <a target="_blank" href="/abc/sm64">Super Mario 64</a><br>
    <a target="_blank" href="/abc/sms">Super Mario Sunshine</a>
</div>
@endsection
