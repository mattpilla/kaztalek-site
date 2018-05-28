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

#abc-table tr:first-child input {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-top-width: 1px;
}

#abc-table tr:last-child input {
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
                <td class="td-pad"><input value="https://kaztalek.com/abc/dk64" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/rby">Pokémon Red/Blue/Yellow</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/rby" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/sadx">Sonic Adventure (DX)</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/sadx" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/sa2b">Sonic Adventure 2 (Battle)</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/sa2b" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/shadow">Shadow the Hedgehog</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/shadow" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/smw">Super Mario World</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/smw" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/sm64">Super Mario 64</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/sm64" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/sm64ds">Super Mario 64 DS</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/sm64ds" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/sms">Super Mario Sunshine</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/sms" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/smg">Super Mario Galaxy</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/smg" disabled></td>
            </tr>
            <tr>
                <td><a target="_blank" href="/abc/smg2">Super Mario Galaxy 2</a></td>
                <td class="td-pad"><input value="https://kaztalek.com/abc/smg2" disabled></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
