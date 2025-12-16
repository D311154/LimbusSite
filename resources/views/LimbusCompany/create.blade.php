<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mirror Dungeon Run</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>

<h1>You may add new mirror dungeon runs here.</h1>
<p>in the complete version of the site, this is NOT a seperate page, but rather a widget only certain users (me) can use.</p>

@if($errors->any())
    <div style="color: red; background: #ffeeee; padding: 10px; margin: 10px 0;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('LimbusCompany.store') }}" method="POST">
    @csrf

    <div class="form-row">
        <label>Floor:</label>
        <input type="number" name="floor" min="1" max="15">
    </div>

    <div class="form-row">
        <label>Difficulty:</label>
        <select name="difficulty">
            <option value=""></option>
            <option value="normal">normal</option>
            <option value="hard">hard</option>
        </select>
    </div>

    <div class="form-row">
        <label>Adversity:</label>
        <input type="number" name="adversity" min="0" max="50">
    </div>

    <div class="form-row">
        <label>Keyword:</label>
        <select name="keyword">
            <option value=""></option>
            <option value="keywordless">keywordless</option>
            <option value="bleed">bleed</option>
            <option value="blunt">blunt</option>
            <option value="burn">burn</option>
            <option value="charge">charge</option>
            <option value="pierce">pierce</option>
            <option value="poise">poise</option>
            <option value="rupture">rupture</option>
            <option value="sinking">sinking</option>
            <option value="slash">slash</option>
            <option value="tremor">tremor</option>
        </select>
    </div>

    <div class="form-row">
        <label>Yi Sang Id:</label>
        <select name="YiSangId">
            <option value=""></option>
            @foreach($yiSangIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Faust Id:</label>
        <select name="FaustId">
            <option value=""></option>
            @foreach($faustIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Don Quixote Id:</label>
        <select name="DonQuixoteId">
            <option value=""></option>
            @foreach($donQuixoteIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Ryoshu Id:</label>
        <select name="RyoshuId">
            <option value=""></option>
            @foreach($ryoshuIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Meursault Id:</label>
        <select name="MeursaultId">
            <option value=""></option>
            @foreach($meursaultIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Hong Lu Id:</label>
        <select name="HongLuId">
            <option value=""></option>
            @foreach($hongLuIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Heathcliff Id:</label>
        <select name="HeathcliffId">
            <option value=""></option>
            @foreach($heathcliffIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Ishmael Id:</label>
        <select name="IshmaelId">
            <option value=""></option>
            @foreach($ishmaelIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Rodion Id:</label>
        <select name="RodionId">
            <option value=""></option>
            @foreach($rodionIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Sinclair Id:</label>
        <select name="SinclairId">
            <option value=""></option>
            @foreach($sinclairIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Outis Id:</label>
        <select name="OutisId">
            <option value=""></option>
            @foreach($outisIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <label>Gregor Id:</label>
        <select name="GregorId">
            <option value=""></option>
            @foreach($gregorIdentities as $identity)
                <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
            @endforeach
        </select>
    </div>

    <input type="submit" value="Save">
</form>

</body>
</html>
