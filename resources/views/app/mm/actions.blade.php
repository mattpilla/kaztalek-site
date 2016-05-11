@extends('master')

@section('title', 'Action Values')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <iframe class="google-doc pull-right" src="https://docs.google.com/spreadsheets/d/1y5Kpd05bi93WpYpVx-y8WEtP_uB-5CGsK2i3z0o0SUU/pubhtml?gid=0&amp;single=true&amp;widget=false&amp;headers=false&amp;chrome=false"></iframe>
    </div>
    <div class="col-sm-6 hidden-xs">
        <h2>Majora's Mask Action Values</h2>
        <p>
            This chart shows all possible "actions" that appear on the A or B buttons for <em>(U) 1.0</em>.<br>
            With <a href="https://www.youtube.com/watch?v=M4NRzsZ9G_0" target="_blank">Weird B</a>, the action on B corresponds directly to the item of the same value.<br>
            Values <strong>0x2a</strong> and beyond are all blank.
        </p>
    </div>
</div>
@endsection
