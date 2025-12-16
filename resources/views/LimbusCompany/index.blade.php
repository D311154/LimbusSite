<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </head>
    <body>

        <header>
            <h1>Wiry's Mirror Dungeon Tracker</h1>
            <a href="{{ route('LimbusCompany.create') }}">New Entry</a>
        </header>

        <p>this project is still a work in progress.</p>
        <p>the front end is being worked on... slowly but surely.</p>
        <p>see table below for mirror dungeon runs:</p>

        <div class="table-container">
        <table>
            <thead>
                <th>Floor</th>
                <th>Difficulty</th>
                <th>Adversity</th>
                <th>Keyword</th>
                <th>Yi Sang</th>
                <th>Faust</th>
                <th>Don Quixote</th>
                <th>Ryoshu</th>
                <th>Meursault</th>
                <th>Hong Lu</th>
                <th>Heathcliff</th>
                <th>Ishmael</th>
                <th>Rodion</th>
                <th>Sinclair</th>
                <th>Outis</th>
                <th>Gregor</th>
            </thead>
            <tbody>
                @foreach ($mirrorDungeons as $mirrorDungeon)
                    <tr>
                        <td>{{ $mirrorDungeon->floor }}</td>
                        <td>{{ $mirrorDungeon->difficulty }}</td>
                        <td>{{ $mirrorDungeon->adversity }}</td>
                        <td>{{ $mirrorDungeon->keyword }}</td>
                        <td><img src="{{ asset('images/YiSang/' . $mirrorDungeon->yiSang->Identity . '.png') }}" alt="{{ $mirrorDungeon->yiSang->Identity }}" title="{{ $mirrorDungeon->yiSang->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/Faust/' . $mirrorDungeon->faust->Identity . '.png') }}" alt="{{ $mirrorDungeon->faust->Identity }}" title="{{ $mirrorDungeon->faust->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/DonQuixote/' . $mirrorDungeon->donQuixote->Identity . '.png') }}" alt="{{ $mirrorDungeon->donQuixote->Identity }}" title="{{ $mirrorDungeon->donQuixote->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/Ryoshu/' . $mirrorDungeon->ryoshu->Identity . '.png') }}" alt="{{ $mirrorDungeon->ryoshu->Identity }}" title="{{ $mirrorDungeon->ryoshu->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/Meursault/' . $mirrorDungeon->meursault->Identity . '.png') }}" alt="{{ $mirrorDungeon->meursault->Identity }}" title="{{ $mirrorDungeon->meursault->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/HongLu/' . $mirrorDungeon->hongLu->Identity . '.png') }}" alt="{{ $mirrorDungeon->hongLu->Identity }}" title="{{ $mirrorDungeon->hongLu->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/Heathcliff/' . $mirrorDungeon->heathcliff->Identity . '.png') }}" alt="{{ $mirrorDungeon->heathcliff->Identity }}" title="{{ $mirrorDungeon->heathcliff->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/Ishmael/' . $mirrorDungeon->ishmael->Identity . '.png') }}" alt="{{ $mirrorDungeon->ishmael->Identity }}" title="{{ $mirrorDungeon->ishmael->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/Rodion/' . $mirrorDungeon->rodion->Identity . '.png') }}" alt="{{ $mirrorDungeon->rodion->Identity }}" title="{{ $mirrorDungeon->rodion->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/Sinclair/' . $mirrorDungeon->sinclair->Identity . '.png') }}" alt="{{ $mirrorDungeon->sinclair->Identity }}" title="{{ $mirrorDungeon->sinclair->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/Outis/' . $mirrorDungeon->outis->Identity . '.png') }}" alt="{{ $mirrorDungeon->outis->Identity }}" title="{{ $mirrorDungeon->outis->Identity }}" class="identity-img"></td>
                        <td><img src="{{ asset('images/Gregor/' . $mirrorDungeon->gregor->Identity . '.png') }}" alt="{{ $mirrorDungeon->gregor->Identity }}" title="{{ $mirrorDungeon->gregor->Identity }}" class="identity-img"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>

        <h2>Statistics</h2>
        <div class="stats">

        </div>
    </body>
</html>
