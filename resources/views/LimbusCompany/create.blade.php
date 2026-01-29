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

    <h3>Benched sinners:</h3>

    <div class="benched-container">
        <div class="benched-item">
            <img src="{{ asset('images/YiSang/Yi_Sang_Icon.png') }}" alt="Yi Sang" class="sinner-icon">
            <input type="checkbox" name="YiSangBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/Faust/Faust_Icon.png') }}" alt="Faust" class="sinner-icon">
            <input type="checkbox" name="FaustBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/DonQuixote/Don_Quixote_Icon.png') }}" alt="Don Quixote" class="sinner-icon">
            <input type="checkbox" name="DonQuixoteBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/Ryoshu/Ryoshu_Icon.png') }}" alt="Ryoshu" class="sinner-icon">
            <input type="checkbox" name="RyoshuBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/Meursault/Meursault_Icon.png') }}" alt="Meursault" class="sinner-icon">
            <input type="checkbox" name="MeursaultBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/HongLu/Hong_Lu_Icon.png') }}" alt="Hong Lu" class="sinner-icon">
            <input type="checkbox" name="HongLuBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/Heathcliff/Heathcliff_Icon.png') }}" alt="Heathcliff" class="sinner-icon">
            <input type="checkbox" name="HeathcliffBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/Ishmael/Ishmael_Icon.png') }}" alt="Ishmael" class="sinner-icon">
            <input type="checkbox" name="IshmaelBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/Rodion/Rodion_Icon.png') }}" alt="Rodion" class="sinner-icon">
            <input type="checkbox" name="RodionBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/Sinclair/Sinclair_Icon.png') }}" alt="Sinclair" class="sinner-icon">
            <input type="checkbox" name="SinclairBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/Outis/Outis_Icon.png') }}" alt="Outis" class="sinner-icon">
            <input type="checkbox" name="OutisBenched" value="1">
        </div>
        <div class="benched-item">
            <img src="{{ asset('images/Gregor/Gregor_Icon.png') }}" alt="Gregor" class="sinner-icon">
            <input type="checkbox" name="GregorBenched" value="1">
        </div>
    </div>

    <input type="submit" value="Save">
</form>

</body>
</html>
