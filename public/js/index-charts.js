(() => {
    const chartDataElement = document.getElementById('index-chart-data');
    const keywordCanvas = document.getElementById('keywordPieChart');
    const topIdentitiesCanvas = document.getElementById('topIdentitiesChart');

    if (!chartDataElement || !keywordCanvas || !topIdentitiesCanvas || typeof Chart === 'undefined') {
        return;
    }

    const parseData = (value, fallback = []) => {
        try {
            return JSON.parse(value || '[]');
        } catch (error) {
            return fallback;
        }
    };

    const keywordLabels = parseData(chartDataElement.dataset.keywordLabels);
    const keywordCounts = parseData(chartDataElement.dataset.keywordCounts);
    const topIdentityLabels = parseData(chartDataElement.dataset.topIdentityLabels);
    const topIdentityCounts = parseData(chartDataElement.dataset.topIdentityCounts);

    Chart.defaults.color = 'white';

    const keywordColors = {
        bleed: { bg: 'rgba(200, 30, 33)', border: 'rgba(109, 0, 0)' },
        blunt: { bg: 'rgba(126, 78, 148)', border: 'rgba(236, 202, 162)' },
        burn: { bg: 'rgba(236, 38, 74)', border: 'rgba(236, 174, 38)' },
        charge: { bg: 'rgba(24, 233, 230)', border: 'rgba(0, 146, 208)' },
        pierce: { bg: 'rgba(178, 98, 46)', border: 'rgba(236, 202, 162)' },
        poise: { bg: 'rgba(202, 208, 210)', border: 'rgba(97, 165, 163)' },
        rupture: { bg: 'rgba(24, 236, 196)', border: 'rgba(16, 163, 142)' },
        sinking: { bg: 'rgba(27, 128, 236)', border: 'rgba(0, 148, 255)' },
        slash: { bg: 'rgba(24, 81, 134)', border: 'rgba(236, 202, 162)' },
        tremor: { bg: 'rgba(244, 212, 172)', border: 'rgba(255, 141, 0)' },
    };

    const backgroundColors = keywordLabels.map((keyword) => keywordColors[keyword]?.bg || 'rgba(128, 128, 128, 0.8)');
    const borderColors = keywordLabels.map((keyword) => keywordColors[keyword]?.border || 'rgba(128, 128, 128, 1)');

    new Chart(keywordCanvas.getContext('2d'), {
        type: 'pie',
        data: {
            labels: keywordLabels,
            datasets: [
                {
                    label: 'Keyword Usage',
                    data: keywordCounts,
                    backgroundColor: backgroundColors,
                    borderColor: borderColors,
                    borderWidth: 2,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        font: {
                            size: 14,
                        },
                        padding: 15,
                    },
                },
                title: {
                    display: true,
                    text: 'Most Used Keywords',
                    font: {
                        size: 16,
                    },
                },
                tooltip: {
                    callbacks: {
                        label(context) {
                            const label = context.label || '';
                            const value = context.parsed || 0;
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = total ? ((value / total) * 100).toFixed(1) : '0.0';
                            return label + ': ' + value + ' (' + percentage + '%)';
                        },
                    },
                },
            },
        },
    });

    new Chart(topIdentitiesCanvas.getContext('2d'), {
        type: 'bar',
        data: {
            labels: topIdentityLabels,
            datasets: [
                {
                    label: 'Times Used',
                    data: topIdentityCounts,
                    backgroundColor: 'rgba(74, 144, 226, 0.8)',
                    borderColor: 'rgba(74, 144, 226, 1)',
                    borderWidth: 2,
                },
            ],
        },
        options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: true,
            scales: {
                x: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                    },
                },
                y: {
                    ticks: {
                        font: {
                            size: 11,
                        },
                        callback(value) {
                            const label = this.getLabelForValue(value);
                            const maxLength = 30;
                            return label.length > maxLength ? label.substring(0, maxLength) + '...' : label;
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Most Used Identities',
                    font: {
                        size: 16,
                    },
                },
                tooltip: {
                    callbacks: {
                        title(context) {
                            return context[0].label;
                        },
                    },
                },
            },
        },
    });
})();
