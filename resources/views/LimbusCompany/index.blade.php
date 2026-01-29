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
            </tbody>
        </table>
        </div>
        <h6><i>*Identities being greyed out indicates them not being used in battle as an active unit OR for their support passive.</i></h6>

        <h2>Statistics</h2>
        <div class="stats">
            <div class="chart-container">
                <canvas id="keywordPieChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="topIdentitiesChart"></canvas>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('keywordPieChart').getContext('2d');

            const keywordColors = {
                'bleed': { bg: 'rgba(200, 30, 33)', border: 'rgba(109, 0, 0)' },
                'blunt': { bg: 'rgba(168, 85, 247, 0.8)', border: 'rgba(168, 85, 247, 1)' },
                'burn': { bg: 'rgba(236, 38, 74)', border: 'rgba(236, 174, 38)' },
                'charge': { bg: 'rgba(24, 233, 230)', border: 'rgba(0, 146, 208)' },
                'pierce': { bg: 'rgba(251, 191, 36, 0.8)', border: 'rgba(251, 191, 36, 1)' },
                'poise': { bg: 'rgba(202, 208, 210)', border: 'rgba(97, 165, 163)' },
                'rupture': { bg: 'rgba(24, 236, 196)', border: 'rgba(16, 163, 142)' },
                'sinking': { bg: 'rgba(27, 128, 236)', border: 'rgba(0, 148, 255)' },
                'slash': { bg: 'rgba(236, 72, 153, 0.8)', border: 'rgba(236, 72, 153, 1)' },
                'tremor': { bg: 'rgba(244, 212, 172)', border: 'rgba(255, 141, 0)' }
            };

            const keywords = [
                @foreach($keywordStats as $stat)
                    '{{ $stat->keyword }}',
                @endforeach
            ];

            const backgroundColors = keywords.map(keyword => keywordColors[keyword]?.bg || 'rgba(128, 128, 128, 0.8)');
            const borderColors = keywords.map(keyword => keywordColors[keyword]?.border || 'rgba(128, 128, 128, 1)');

            const keywordData = {
                labels: keywords,
                datasets: [{
                    label: 'Keyword Usage',
                    data: [
                        @foreach($keywordStats as $stat)
                            {{ $stat->count }},
                        @endforeach
                    ],
                    backgroundColor: backgroundColors,
                    borderColor: borderColors,
                    borderWidth: 2
                }]
            };

            const config = {
                type: 'pie',
                data: keywordData,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                font: {
                                    size: 14
                                },
                                padding: 15
                            }
                        },
                        title: {
                            display: true,
                            text: 'Most Used Keywords',
                            font: {
                                size: 16
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    let value = context.parsed || 0;
                                    let total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    let percentage = ((value / total) * 100).toFixed(1);
                                    return label + ': ' + value + ' (' + percentage + '%)';
                                }
                            }
                        }
                    }
                }
            };

            const keywordPieChart = new Chart(ctx, config);



            const ctx2 = document.getElementById('topIdentitiesChart').getContext('2d');

            const topIdentitiesData = {
                labels: [
                    @foreach($topIdentities as $identity => $count)
                        '{{ $identity }}',
                    @endforeach
                ],
                datasets: [{
                    label: 'Times Used',
                    data: [
                        @foreach($topIdentities as $identity => $count)
                            {{ $count }},
                        @endforeach
                    ],
                    backgroundColor: 'rgba(74, 144, 226, 0.8)',
                    borderColor: 'rgba(74, 144, 226, 1)',
                    borderWidth: 2
                }]
            };

            const topIdentitiesConfig = {
                type: 'bar',
                data: topIdentitiesData,
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        },
                        y: {
                            ticks: {
                                font: {
                                    size: 11
                                },
                                callback: function(value, index, values) {
                                    const label = this.getLabelForValue(value);
                                    const maxLength = 30;
                                    if (label.length > maxLength) {
                                        return label.substring(0, maxLength) + '...';
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        },
                        title: {
                            display: true,
                            text: 'Most Used Identities',
                            font: {
                                size: 16
                            }
                        },
                        tooltip: {
                            callbacks: {
                                title: function(context) {
                                    return context[0].label;
                                }
                            }
                        }
                    }
                }
            };

            const topIdentitiesChart = new Chart(ctx2, topIdentitiesConfig);
        </script>
    </body>
</html>
