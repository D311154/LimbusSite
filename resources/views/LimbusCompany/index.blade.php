<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>

        <header>
            <h1>Wiry's Mirror Dungeon Tracker</h1>
            <a href="{{ route('LimbusCompany.create') }}">New Entry</a>
        </header>

        <p>this project is still a work in progress.</p>
        <p>the front end is being worked on.</p>
        <p>see table below for mirror dungeon runs:</p>

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
                        <td>{{ $mirrorDungeon->YiSangId }}</td>
                        <td>{{ $mirrorDungeon->FaustId }}</td>
                        <td>{{ $mirrorDungeon->DonQuixoteId }}</td>
                        <td>{{ $mirrorDungeon->RyoshuId }}</td>
                        <td>{{ $mirrorDungeon->MeursaultId }}</td>
                        <td>{{ $mirrorDungeon->HongLuId }}</td>
                        <td>{{ $mirrorDungeon->HeathcliffId }}</td>
                        <td>{{ $mirrorDungeon->IshmaelId }}</td>
                        <td>{{ $mirrorDungeon->RodionId }}</td>
                        <td>{{ $mirrorDungeon->SinclairId }}</td>
                        <td>{{ $mirrorDungeon->OutisId }}</td>
                        <td>{{ $mirrorDungeon->GregorId }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>
