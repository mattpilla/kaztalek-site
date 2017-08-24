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
#abc-table .td-pad {
    padding-left: 20px;
}

#abc-table .first-td > input {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-top-width: 1px;
}

#abc-table .last-td > input {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
}

#abc-table input {
    border-width: 1px;
    border-radius: 0;
    border-top-width: 0;
    width: 230px;
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
    <table id="abc-table">
        <tbody>
            <tr>
                <td><a target="_blank" href="/abc/dk64">Donkey Kong 64</a></td>
                <td class="td-pad first-td"><input value="https://kaztalek.com/abc/dk64"></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/sadx">Sonic Adventure (DX)</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/sadx"></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/sa2b">Sonic Adventure 2 (Battle)</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/sa2b"></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/sm64">Super Mario 64</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/sm64"></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/sms">Super Mario Sunshine</a></td>
                <td class="td-pad last-td"><input value="https://kaztalek.com/abc/sms"></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
