@extends('master')

@section('title', 'City Trial')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="trial-container">
            <button id="vehicles" class="btn btn-accent-ghost visibility">-</button>
            <div class="pull-left">
                <div class="checkbox vehicles">
                    <label for="vehicles-0">
                        <input type="checkbox" id="vehicles-0">
                        Compact > Scooter
                    </label>
                </div>
                <div class="checkbox vehicles">
                    <label for="vehicles-1">
                        <input type="checkbox" id="vehicles-1">
                        Warp > Bike
                    </label>
                </div>
                <div class="checkbox vehicles">
                    <label for="vehicles-2">
                        <input type="checkbox" id="vehicles-2">
                        Bike > Swerve
                    </label>
                </div>
                <div class="checkbox vehicles">
                    <label for="vehicles-3">
                        <input type="checkbox" id="vehicles-3">
                        Swerve > Warp
                    </label>
                </div>
                <div class="checkbox vehicles">
                    <label for="vehicles-4">
                        <input type="checkbox" id="vehicles-4">
                        Slick > Rocket
                    </label>
                </div>
                <div class="checkbox vehicles">
                    <label for="vehicles-5">
                        <input type="checkbox" id="vehicles-5">
                        Rocket > Turbo
                    </label>
                </div>
                <div class="checkbox vehicles">
                    <label for="vehicles-6">
                        <input type="checkbox" id="vehicles-6">
                        Turbo > Formula
                    </label>
                </div>
                <div class="checkbox vehicles">
                    <label for="vehicles-7">
                        <input type="checkbox" id="vehicles-7">
                        Formula > Slick
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="trial-container">
            <button id="foods" class="btn btn-accent-ghost visibility">-</button>
            <div class="pull-left">
                <div class="checkbox foods">
                    <label for="foods-0">
                        <input type="checkbox" id="foods-0">
                        3 Sushi
                    </label>
                </div>
                <div class="checkbox foods">
                    <label for="foods-1">
                        <input type="checkbox" id="foods-1">
                        3 Hot Dog
                    </label>
                </div>
                <div class="checkbox foods">
                    <label for="foods-2">
                        <input type="checkbox" id="foods-2">
                        3 Energy Drink
                    </label>
                </div>
                <div class="checkbox foods">
                    <label for="foods-3"> 
                        <input type="checkbox" id="foods-3">
                        2 Tomato
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="trial-container">
            <button id="patches" class="btn btn-accent-ghost visibility">-</button>
            <div class="pull-left">
                <div class="checkbox patches">
                    <label for="patches-0">
                        <input type="checkbox" id="patches-0">
                        10 Boost
                    </label>
                </div>
                <div class="checkbox patches">
                    <label for="patches-1">
                        <input type="checkbox" id="patches-1">
                        10 Top Speed
                    </label>
                </div>
                <div class="checkbox patches">
                    <label for="patches-2">
                        <input type="checkbox" id="patches-2">
                        10 Turn
                    </label>
                </div>
                <div class="checkbox patches">
                    <label for="patches-3">
                        <input type="checkbox" id="patches-3">
                        10 Charge
                    </label>
                </div>
                <div class="checkbox patches">
                    <label for="patches-4">
                        <input type="checkbox" id="patches-4">
                        10 Glide
                    </label>
                </div>
                <div class="checkbox patches">
                    <label for="patches-5">
                        <input type="checkbox" id="patches-5">
                        10 Weight
                    </label>
                </div>
                <div class="checkbox patches">
                    <label for="patches-6">
                        <input type="checkbox" id="patches-6">
                        10 Defense
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="trial-container">
            <button id="stadiums" class="btn btn-accent-ghost visibility">-</button>
            <div class="pull-left">
                <div class="checkbox stadiums">
                    <label for="stadiums-0">
                        <input type="checkbox" id="stadiums-0">
                        See Air Glider
                    </label>
                </div>
                <div class="checkbox stadiums">
                    <label for="stadiums-1">
                        <input type="checkbox" id="stadiums-1">
                        See High Jump
                    </label>
                </div>
                <div class="checkbox stadiums">
                    <label for="stadiums-2">
                        <input type="checkbox" id="stadiums-2">
                        See Kirby Melee 1
                    </label>
                </div>
                <div class="checkbox stadiums">
                    <label for="stadiums-3">
                        <input type="checkbox" id="stadiums-3">
                        See King Dedede
                    </label>
                </div>
                <div class="checkbox stadiums">
                    <label for="stadiums-4">
                        <input type="checkbox" id="stadiums-4">
                        See 4 Single Races
                    </label>
                </div>
                <div class="checkbox stadiums">
                    <hr>
                </div>
                <div class="checkbox stadiums">
                    <label for="stadiums-5">
                        <input type="checkbox" id="stadiums-5">
                        See Drag Race 2
                    </label>
                </div>
                <div class="checkbox stadiums">
                    <label for="stadiums-6">
                        <input type="checkbox" id="stadiums-6">
                        See Drag Race 3
                    </label>
                </div>
                <div class="checkbox stadiums">
                    <label for="stadiums-7">
                        <input type="checkbox" id="stadiums-7">
                        See Destruction Derby 2
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="trial-container">
            <button id="kills" class="btn btn-accent-ghost visibility">-</button>
            <div class="pull-left">
                <div class="checkbox kills">
                    <label for="kills-0">
                        <input type="checkbox" id="kills-0">
                        10 Fireworks
                    </label>
                </div>
                <div class="checkbox kills">
                    <label for="kills-1">
                        <input type="checkbox" id="kills-1">
                        3 Golden Spikes
                    </label>
                </div>
                <div class="checkbox kills">
                    <label for="kills-2">
                        <input type="checkbox" id="kills-2">
                        3 Motion Bombs
                    </label>
                </div>
                <div class="checkbox kills">
                    <label for="kills-3">
                        <input type="checkbox" id="kills-3">
                        Hurt 3 CPUs
                    </label>
                </div>
                <div class="checkbox kills">
                    <label for="kills-4">
                        <input type="checkbox" id="kills-4">
                        Kill 5 CPUs
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="trial-container">
            <button id="misc" class="btn btn-accent-ghost visibility">-</button>
            <div class="pull-left">
                <div class="checkbox misc">
                    <label for="misc-0">
                        <input type="checkbox" id="misc-0">
                        Legendary Machines
                    </label>
                </div>
                <div class="checkbox misc">
                    <label for="misc-1">
                        <input type="checkbox" id="misc-1">
                        10 Items in 20 Seconds
                    </label>
                </div>
                <div class="checkbox misc">
                    <label for="misc-2">
                        <input type="checkbox" id="misc-2">
                        Hurt Rival in 10 Seconds
                    </label>
                </div>
                <div class="checkbox misc">
                    <label for="misc-3">
                        <input type="checkbox" id="misc-3">
                        Simultaneously Get Off Machines
                    </label>
                </div>
                <div class="checkbox misc">
                    <label for="misc-4">
                        <input type="checkbox" id="misc-4">
                        All End Off Machine
                    </label>
                </div>
                <div class="checkbox misc">
                    <label for="misc-5">
                        <input type="checkbox" id="misc-5">
                        All End On Rail
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="trial-container">
            <button id="single" class="btn btn-accent-ghost visibility">-</button>
            <div class="pull-left">
                <div class="checkbox single">
                    <label for="single-0">
                        <input type="checkbox" id="single-0">
                        See Fantasy Meadows
                    </label>
                </div>
                <div class="checkbox single">
                    <label for="single-1">
                        <input type="checkbox" id="single-1">
                        See Beanstalk Park
                    </label>
                </div>
                <div class="checkbox single">
                    <label for="single-2">
                        <input type="checkbox" id="single-2">
                        See Celestial Valley
                    </label>
                </div>
                <div class="checkbox single">
                    <label for="single-3">
                        <input type="checkbox" id="single-3">
                        See Sky Sands
                    </label>
                </div>
                <div class="checkbox single">
                    <label for="single-4">
                        <input type="checkbox" id="single-4">
                        See Frozen Hillside
                    </label>
                </div>
                <div class="checkbox single">
                    <label for="single-5">
                        <input type="checkbox" id="single-5">
                        See Magma Flows
                    </label>
                </div>
                <div class="checkbox single">
                    <label for="single-6">
                        <input type="checkbox" id="single-6">
                        See Machine Passage
                    </label>
                </div>
                <div class="checkbox single">
                    <label for="single-7">
                        <input type="checkbox" id="single-7">
                        See Checker Knights
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="trial-container">
            <button id="events" class="btn btn-accent-ghost visibility">-</button>
            <div class="pull-left">
                <div class="checkbox events">
                    <label for="events-0">
                        <input type="checkbox" id="events-0">
                        Tak
                    </label>
                </div>
                <div class="checkbox events">
                    <label for="events-1">
                        <input type="checkbox" id="events-1">
                        Restoration Area
                    </label>
                </div>
                <div class="checkbox events">
                    <label for="events-2">
                        <input type="checkbox" id="events-2">
                        Castle Chamber
                    </label>
                </div>
                <div class="checkbox events">
                    <label for="events-3">
                        <input type="checkbox" id="events-3">
                        Hit Dyna Blade
                    </label>
                </div>
                <div class="checkbox events">
                    <label for="events-4">
                        <input type="checkbox" id="events-4">
                        Trampled by Dyna Blade
                    </label>
                </div>
                <div class="checkbox events">
                    <label for="events-5">
                        <input type="checkbox" id="events-5">
                        Pillars&nbsp;&nbsp;&nbsp;
                        <input type="number" min="0" max="5" value="0">
                    </label>
                </div>
                <div class="checkbox events">
                    <label for="events-6">
                        <input type="checkbox" id="events-6">
                        Meteors&nbsp;&nbsp;&nbsp;
                        <input type="number" min="0" max="3" value="0">
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="trial-container">
            <button id="notes" class="btn btn-accent-ghost visibility">-</button>
            <div class="pull-left">
                <div class="checkbox notes">
                    <strong>Notes:</strong><br>
                    <em>DR1:</em> Formula 17, Warp 26<br>
                    <em>DR2:</em> Wagon 27, Winged 29, Anyone 20<br>
                    <em>DR3:</em> Swerve 28, Bike 31, Anyone 27<br>
                    <em>DR4:</em> 19 anyone, Rex 24, Turbo 33
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src='/js/app/kirby/city-trial.js'></script>
@endsection
