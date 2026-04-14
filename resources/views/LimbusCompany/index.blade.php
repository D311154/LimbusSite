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
            <nav>
                @auth
                    @if(auth()->user()->id === 1)
                        <a href="{{ route('LimbusCompany.create') }}">New Entry</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </nav>
            <img src="{{ asset('images/AnotherAwesomeFuckingShark.png') }}" class="shark-image"></img>
            <img src="{{ asset('images/JermaCharge.gif') }}" class="jerma-gif"></img>
            <img src="{{ asset('images/awesome fuckin shark.png') }}" class="shark-image"></img>
        </header>

        <p>this project is still a work in progress.</p>
        <h2>5 Most recent runs:</h2>

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
                        <td><img src="{{ asset('images/YiSang/' . $mirrorDungeon->yiSang->Identity . '.png') }}" alt="{{ $mirrorDungeon->yiSang->Identity }}" title="{{ $mirrorDungeon->yiSang->Identity }}" class="identity-img {{ $mirrorDungeon->YiSangBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/Faust/' . $mirrorDungeon->faust->Identity . '.png') }}" alt="{{ $mirrorDungeon->faust->Identity }}" title="{{ $mirrorDungeon->faust->Identity }}" class="identity-img {{ $mirrorDungeon->FaustBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/DonQuixote/' . $mirrorDungeon->donQuixote->Identity . '.png') }}" alt="{{ $mirrorDungeon->donQuixote->Identity }}" title="{{ $mirrorDungeon->donQuixote->Identity }}" class="identity-img {{ $mirrorDungeon->DonQuixoteBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/Ryoshu/' . $mirrorDungeon->ryoshu->Identity . '.png') }}" alt="{{ $mirrorDungeon->ryoshu->Identity }}" title="{{ $mirrorDungeon->ryoshu->Identity }}" class="identity-img {{ $mirrorDungeon->RyoshuBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/Meursault/' . $mirrorDungeon->meursault->Identity . '.png') }}" alt="{{ $mirrorDungeon->meursault->Identity }}" title="{{ $mirrorDungeon->meursault->Identity }}" class="identity-img {{ $mirrorDungeon->MeursaultBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/HongLu/' . $mirrorDungeon->hongLu->Identity . '.png') }}" alt="{{ $mirrorDungeon->hongLu->Identity }}" title="{{ $mirrorDungeon->hongLu->Identity }}" class="identity-img {{ $mirrorDungeon->HongLuBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/Heathcliff/' . $mirrorDungeon->heathcliff->Identity . '.png') }}" alt="{{ $mirrorDungeon->heathcliff->Identity }}" title="{{ $mirrorDungeon->heathcliff->Identity }}" class="identity-img {{ $mirrorDungeon->HeathcliffBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/Ishmael/' . $mirrorDungeon->ishmael->Identity . '.png') }}" alt="{{ $mirrorDungeon->ishmael->Identity }}" title="{{ $mirrorDungeon->ishmael->Identity }}" class="identity-img {{ $mirrorDungeon->IshmaelBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/Rodion/' . $mirrorDungeon->rodion->Identity . '.png') }}" alt="{{ $mirrorDungeon->rodion->Identity }}" title="{{ $mirrorDungeon->rodion->Identity }}" class="identity-img {{ $mirrorDungeon->RodionBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/Sinclair/' . $mirrorDungeon->sinclair->Identity . '.png') }}" alt="{{ $mirrorDungeon->sinclair->Identity }}" title="{{ $mirrorDungeon->sinclair->Identity }}" class="identity-img {{ $mirrorDungeon->SinclairBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/Outis/' . $mirrorDungeon->outis->Identity . '.png') }}" alt="{{ $mirrorDungeon->outis->Identity }}" title="{{ $mirrorDungeon->outis->Identity }}" class="identity-img {{ $mirrorDungeon->OutisBenched ? 'benched' : '' }}"></td>
                        <td><img src="{{ asset('images/Gregor/' . $mirrorDungeon->gregor->Identity . '.png') }}" alt="{{ $mirrorDungeon->gregor->Identity }}" title="{{ $mirrorDungeon->gregor->Identity }}" class="identity-img {{ $mirrorDungeon->GregorBenched ? 'benched' : '' }}"></td>
                    </tr>
                @endforeach
                <!-- "wow wiry thats lowkey kinda ass" thanks i did not care about optimization at all when making it -->
            </tbody>
        </table>
        </div>
        <h6><i>*Identities being greyed out indicates them not being considered a "used ID" as they were not intended to be used for neither combat or their support passive.</i></h6>

        <h2>Statistics</h2>
        <div class="stats">
            <div class="chart-container">
                <canvas id="keywordPieChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="topIdentitiesChart"></canvas>
            </div>
            <div class="chart-container">
                <div class="most-neglected-container">
                    <h3>Most Neglected Sinner(s)</h3>
                    <div class="neglected-sinner-display">
                        @if(empty($mostNeglectedSinners))
                            <img src="{{ asset('images/ideal.png') }}"
                                 alt="Ideal"
                                 title="Ideal"
                                 class="lcb-sinner-img">
                            <p class="sinner-name">none of them :)</p>
                            <p class="bench-count">this is quite ideal...</p>
                        @else
                            @foreach($mostNeglectedSinners as $sinner)
                                <div class="neglected-sinner-item">
                                    <img src="{{ asset('images/' . str_replace(' ', '', $sinner) . '/LCB Sinner.png') }}"
                                         alt="{{ $sinner }}"
                                         title="{{ $sinner }}"
                                         class="lcb-sinner-img">
                                    <p class="sinner-name">{{ $sinner }}</p>
                                </div>
                            @endforeach
                            <p class="bench-count">went unused in {{ $mostNeglectedCount }} {{ $mostNeglectedCount == 1 ? 'run' : 'runs' }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <h2>Comments</h2>
        <div class="comments-section">
            @auth
                <div class="comment-form">
                    <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                        <textarea name="comment" placeholder="Write a comment..." required></textarea>
                        <button type="submit">Post Comment</button>
                    </form>
                </div>
            @endauth

            <div class="comments-display">
                @forelse($comments as $comment)
                    <div class="comment-wrapper">
                        <div class="comment">
                            <div class="comment-header">
                                <strong>{{ $comment->user->name }}</strong>
                                <span class="comment-date">{{ $comment->created_at->format('M j, Y \a\t g:i A') }}</span>
                            </div>
                            <div class="comment-body">
                                {{ $comment->comment }}
                            </div>
                        </div>
                        @auth
                            @if(auth()->user()->id === 1 || auth()->user()->id === $comment->user_id)
                                <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-comment-btn" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</button>
                                </form>
                            @endif
                        @endauth
                    </div>
                @empty
                    <p>No comments yet. Be the first to comment!</p>
                @endforelse
            </div>
        </div>

        <!-- i'd quite like to make it so that you can click through tabs of comments,
            but i don't know how to do that. and i'm not going to try knowing. i've
            done enough for this entire div -->

        @php
            $keywordLabels = $keywordStats->pluck('keyword')->values();
            $keywordCounts = $keywordStats->pluck('count')->values();
            $topIdentityLabels = array_keys($topIdentities);
            $topIdentityCounts = array_values($topIdentities);
        @endphp

        <div
            id="index-chart-data"
            data-keyword-labels='@json($keywordLabels)'
            data-keyword-counts='@json($keywordCounts)'
            data-top-identity-labels='@json($topIdentityLabels)'
            data-top-identity-counts='@json($topIdentityCounts)'
            hidden
        ></div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
        <script src="{{ asset('js/index-charts.js') }}?v={{ filemtime(public_path('js/index-charts.js')) }}" defer></script>
        <!-- this script sure was interesting to work with -->
    </body>
</html>
