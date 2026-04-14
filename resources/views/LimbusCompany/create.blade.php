<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mirror Dungeon Run</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}?v={{ filemtime(public_path('css/create.css')) }}">
</head>
<body>

@auth
    @if(auth()->user()->id === 1)
        <h1>Answer me, Jia Baoyu. What does the mirror dungeon need?</h1>

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
        <input type="number" name="adversity" min="0" max="60">
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

    @php
        $sinnerPickers = [
            ['key' => 'yi-sang', 'label' => 'Yi Sang', 'field' => 'YiSangId', 'folder' => 'YiSang', 'identities' => $yiSangIdentities],
            ['key' => 'faust', 'label' => 'Faust', 'field' => 'FaustId', 'folder' => 'Faust', 'identities' => $faustIdentities],
            ['key' => 'don-quixote', 'label' => 'Don Quixote', 'field' => 'DonQuixoteId', 'folder' => 'DonQuixote', 'identities' => $donQuixoteIdentities],
            ['key' => 'ryoshu', 'label' => 'Ryoshu', 'field' => 'RyoshuId', 'folder' => 'Ryoshu', 'identities' => $ryoshuIdentities],
            ['key' => 'meursault', 'label' => 'Meursault', 'field' => 'MeursaultId', 'folder' => 'Meursault', 'identities' => $meursaultIdentities],
            ['key' => 'hong-lu', 'label' => 'Hong Lu', 'field' => 'HongLuId', 'folder' => 'HongLu', 'identities' => $hongLuIdentities],
            ['key' => 'heathcliff', 'label' => 'Heathcliff', 'field' => 'HeathcliffId', 'folder' => 'Heathcliff', 'identities' => $heathcliffIdentities],
            ['key' => 'ishmael', 'label' => 'Ishmael', 'field' => 'IshmaelId', 'folder' => 'Ishmael', 'identities' => $ishmaelIdentities],
            ['key' => 'rodion', 'label' => 'Rodion', 'field' => 'RodionId', 'folder' => 'Rodion', 'identities' => $rodionIdentities],
            ['key' => 'sinclair', 'label' => 'Sinclair', 'field' => 'SinclairId', 'folder' => 'Sinclair', 'identities' => $sinclairIdentities],
            ['key' => 'outis', 'label' => 'Outis', 'field' => 'OutisId', 'folder' => 'Outis', 'identities' => $outisIdentities],
            ['key' => 'gregor', 'label' => 'Gregor', 'field' => 'GregorId', 'folder' => 'Gregor', 'identities' => $gregorIdentities],
        ];
    @endphp

    @foreach($sinnerPickers as $picker)
        <div class="form-row">
            <label>{{ $picker['label'] }} Id:</label>
            <select
                name="{{ $picker['field'] }}"
                id="{{ $picker['key'] }}-id-select"
                class="id-picker-select"
                autocomplete="off"
                data-modal-id="{{ $picker['key'] }}-modal"
            >
                <option value=""></option>
                @foreach($picker['identities'] as $identity)
                    <option value="{{ $identity->id }}">{{ $identity->Identity }}</option>
                @endforeach
            </select>
        </div>
    @endforeach
    <h5>what the mirror dungeon needs... is kindness.</h5>
    <h3>Unused sinners:</h3>

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
        <!-- I DONT LIKE HOW I DID THIS BUT IM TOO LAZY TO MAKE IT BETTER BECAUSE IT *WORKS* FUCKKKKKK -->
    </div>

    <input type="submit" value="Save">
</form>

@foreach($sinnerPickers as $picker)
    <div
        id="{{ $picker['key'] }}-modal"
        class="id-modal"
        aria-hidden="true"
        style="display: none;"
        data-select-id="{{ $picker['key'] }}-id-select"
    >
        <div class="id-modal-panel" role="dialog" aria-modal="true" aria-labelledby="{{ $picker['key'] }}-modal-title">
            <div class="id-modal-header">
                <h2 id="{{ $picker['key'] }}-modal-title">Select {{ $picker['label'] }} Identity</h2>
                <div class="id-modal-actions">
                    <button type="button" class="id-modal-clear">Clear selection</button>
                    <button type="button" class="id-modal-close" aria-label="Close">x</button>
                </div>
            </div>
            <div class="id-modal-grid">
                @foreach($picker['identities'] as $identity)
                    <button
                        type="button"
                        class="id-card"
                        data-id="{{ $identity->id }}"
                        title="{{ $identity->Identity }}"
                        aria-label="{{ $identity->Identity }}"
                    >
                        <img
                            src="{{ asset('images/' . $picker['folder'] . '/' . rawurlencode($identity->Identity . '.png')) }}"
                            alt="{{ $identity->Identity }}"
                            loading="lazy"
                        >
                    </button>
                @endforeach
            </div>
        </div>
    </div>
@endforeach

<script src="{{ asset('js/create-identity-picker.js') }}?v={{ filemtime(public_path('js/create-identity-picker.js')) }}" defer></script>

    @else
        <h1>Access Denied</h1>
        <p>You do not have permission to access this page.</p>
        <a href="{{ route('LimbusCompany.index') }}">Return to Home</a>
    @endif
@else
    <h1>Access Denied</h1>
    <p>You must be logged in and have sufficient permissions to access this page.</p>
    <a href="{{ route('login') }}">Login</a>
@endauth

</body>
</html>
