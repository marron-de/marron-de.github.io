// 도넛 차트
function createGradient(ctx, colorStart, colorEnd, alphaStart = 1, alphaEnd = 1) {
	const height = ctx.canvas.height;
	const gradient = ctx.createLinearGradient(0, 0, 0, height);

	function hexToRgba(hex, alpha) {
		const r = parseInt(hex.slice(1, 3), 16);
		const g = parseInt(hex.slice(3, 5), 16);
		const b = parseInt(hex.slice(5, 7), 16);
		return `rgba(${r},${g},${b},${alpha})`;
	}

	gradient.addColorStop(0, hexToRgba(colorStart, alphaStart));
	gradient.addColorStop(1, hexToRgba(colorEnd, alphaEnd));

	return gradient;
}
function initDoughnutChartsByClass(className, dataValues, colorStart, colorEnd, alphaMain = 1, alphaSub = 0.3) {
    const elements = document.querySelectorAll(`.${className}`);
    elements.forEach(el => {
        const ctx = el.getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: dataValues,
                    backgroundColor: [
                        createGradient(ctx, colorStart, colorEnd, alphaMain, alphaMain),
                        createGradient(ctx, colorStart, colorEnd, alphaSub, alphaSub)
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: false,
                cutout: '70.7%',
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                }
            }
        });
    });
}
initDoughnutChartsByClass('doughnut_chart1 .graph', [30, 70], '#73CFFF', '#4596EE', 1, 0.2);


// 세로 막대형 차트
const barChart = document.querySelectorAll('.bar_chart .graph');
barChart.forEach((chartCanvas) => {
    const labels   = JSON.parse(chartCanvas.dataset.labels  || '[]');
    const scores   = JSON.parse(chartCanvas.dataset.scores  || '[]');
    const scores2  = JSON.parse(chartCanvas.dataset.scores2 || '[]');
    const tooltip1 = chartCanvas.dataset.best || null;
    const tooltip2 = chartCanvas.dataset.good || null;
    const barCtx   = chartCanvas.getContext('2d');

    let tooltipCreated = false;

    const tooltipTargets = [];
    if (tooltip1) {
        const idx = labels.indexOf(tooltip1);
        if (idx !== -1) tooltipTargets.push({ idx, label: tooltip1, type: 'best' }); 
    }
    if (tooltip2) {
        const idx = labels.indexOf(tooltip2);
        if (idx !== -1) tooltipTargets.push({ idx, label: tooltip2, type: 'good' });
    }

    const makeGradient = (ctx, y, val, colorStart, colorEnd) => {
        const yTop = y.getPixelForValue(val);
        const yBottom = y.getPixelForValue(0);
        const gradient = ctx.createLinearGradient(0, yTop, 0, yBottom);
        gradient.addColorStop(0, colorStart);
        gradient.addColorStop(1, colorEnd);
        return gradient;
    };

    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: labels,
			 datasets: [
                {
                    data: scores2,
                    backgroundColor: function(context) {
                        const { ctx, chartArea, scales: { y } } = context.chart;
                        if (!chartArea) return 'transparent';
                        return makeGradient(ctx, y, context.parsed.y, '#ff817c', '#e61f19');
                    },
                    barThickness: 24,
                    borderRadius: { topLeft: 8, topRight: 8, bottomLeft: 0, bottomRight: 0 },
                    borderSkipped: false,
                    order: 1
                },
                {
                    data: scores,
                    backgroundColor: function(context) {
                        const { ctx, chartArea, scales: { y } } = context.chart;
                        if (!chartArea) return 'transparent';
                        return makeGradient(ctx, y, context.parsed.y, '#74d0ff', '#4697ee');
                    },
                    barThickness: 24,
                    borderRadius: { topLeft: 8, topRight: 8, bottomLeft: 0, bottomRight: 0 },
                    borderSkipped: false,
                    order: 2
                }
            ]
        },
        options: {
			responsive: false,
			maintainAspectRatio: false,
			interaction: {mode: 'none', intersect: false},
			plugins: {                
				legend: { display: false },               
				tooltip: { enabled: false }            
			},
			layout: {                
				padding: { top: 0, left: 0, right: 0, bottom: -8 }
			},
						
			animation: {								
				onComplete: function () {	
					if (tooltipCreated) return;
					const wrapper = chartCanvas.parentElement;
					wrapper.querySelectorAll('.chart_tooltip').forEach(d => d.remove());

					if (!tooltipTargets.length) return;

					const canvasRect  = chartCanvas.getBoundingClientRect();
					const wrapperRect = wrapper.getBoundingClientRect();
					const offsetX = canvasRect.left - wrapperRect.left;
					const offsetY = canvasRect.top  - wrapperRect.top;

					tooltipTargets.forEach(({ idx, label, type }) => {    
						const meta0 = this.getDatasetMeta(0); 
						const meta1 = this.getDatasetMeta(1); 
						const bar0 = meta0.data[idx];
						const bar1 = meta1.data[idx];
						
						if (!bar0 || !bar1) return;
						
						const centerX = (bar0.x + bar1.x) / 2;
						const topY = Math.min(bar0.y, bar1.y); 

						const tooltipDiv = document.createElement('div');
						tooltipDiv.className = 'chart_tooltip';
						
						if (type === 'best') {
							tooltipDiv.textContent = "최우수";
						} else if (type === 'good') {
							tooltipDiv.textContent = "우수";
						} else {
							tooltipDiv.textContent = label;
						}
						
						tooltipDiv.style.cssText = `
							position: absolute;
							left: ${offsetX + centerX}px;
							top: ${offsetY + topY - 10}px;
							transform: translate(-50%, -100%);
							opacity: 0;
							transition: opacity 0.4s ease-out, top 0.4s ease-out;
							pointer-events: none;
							z-index: 100;
						`;
						
						wrapper.style.position = 'relative';
						wrapper.appendChild(tooltipDiv);

						requestAnimationFrame(() => {
							tooltipDiv.style.opacity = '1';
							tooltipDiv.style.top = `${offsetY + topY - 17}px`;
						});
					});
                    tooltipCreated = true;
                }
            },
            scales: {
                x: {
                    grid: { display: false },
                    border: { display: true, color: '#e5e8ec'},
                    ticks: {
                        padding: 8,
                        color: '#7e7e7f',
                        font: { family: 'Pretendard', weight: '400', size: 13 },
                    }
                },
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        stepSize: 20,
                        padding: 8,
                        color: '#7e7e7f',
                        font: { family: 'Pretendard', weight: '400', size: 13 },
                    },
                    grid: { color: '#e5e8ec', drawTicks: false },
                    border: { display: false }
                }
            }
        }
    });
});


// 가로 막대형 차트 
const barChart2 = document.querySelectorAll('.bar_chart2 .graph');
barChart2.forEach((chartCanvas) => {
    const rawLabels = JSON.parse(chartCanvas.dataset.labels || '[]');
    const labels = rawLabels.map(label => label.split('\n'));
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]');
    const barCtx = chartCanvas.getContext('2d');

    const isBlue = chartCanvas.classList.contains('blue');
    const isRed  = chartCanvas.classList.contains('red');
    const isGray = chartCanvas.classList.contains('gray');

    const colorMap = {
        blue: { start: '#4697EE', end: '#74D0FF', label: '#32baff' },
        red:  { start: '#E61F19', end: '#FF817C', label: '#e61f19' },
        gray: { start: '#9C9C9C', end: '#DEDEDE', label: '#7e7e7f' },
    };

    const theme = isRed ? colorMap.red : isGray ? colorMap.gray : colorMap.blue;

    new Chart(barCtx, {
        type: 'bar',
        plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: [{
                data: scores,
                 backgroundColor: function(context) {
                    const chart = context.chart;
                    const {ctx, chartArea, scales} = chart;
                    if (!chartArea) return null;
                    const x = scales.x;
                    const value = context.dataset.data[context.dataIndex];
                    const barEndX = x.getPixelForValue(value);
                    const barStartX = x.getPixelForValue(0);
                    const gradient = ctx.createLinearGradient(barStartX, 0, barEndX, 0);
                    gradient.addColorStop(0, theme.start);
                    gradient.addColorStop(1, theme.end);
                    return gradient;
                },
                borderRadius: { topLeft: 0, topRight: 8, bottomLeft: 0, bottomRight: 8 },
                borderSkipped: false,
                barThickness: 16
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                datalabels: {
                    display: !isGray,
                    anchor: 'end',
                    align: (context) => context.dataset.data[context.dataIndex] >= 60 ? 'left' : 'right',
                    offset: 5,
                    color: (context) => context.dataset.data[context.dataIndex] >= 60 ? '#ffffff' : theme.label,
                    font: { family: 'Pretendard', weight: '800', size: 14 }
                }
            },
            layout: {
                padding: { top: 0, left: -10, right: 0, bottom: -8 }
            },
            scales: {
                x: {
                    max: 50,
                    beginAtZero: true,
                    grid: { display: false},
                    border: { display: false },
                    ticks: { 
						display: false,
                        stepSize: 10,
					}
                },
                y: {
                    grid: { display: false },
                    border: { display: false },
                    ticks: { display: false }
                }
            }
        }
    });
});


// 방사형 차트
const radarChart = document.querySelectorAll('.radar_chart .graph');
radarChart.forEach((chartCanvas) => {
    const labels   = JSON.parse(chartCanvas.dataset.labels  || '[]');
	const totalData = JSON.parse(chartCanvas.dataset.total || '[]');
    const userData = JSON.parse(chartCanvas.dataset.user || '[]');	
	const radarCtx = chartCanvas.getContext('2d');

	new Chart(radarCtx, {
		type: 'radar',
		data: {
			labels: labels,
			datasets: [
				{
					label: '전체',
					data: userData,
					backgroundColor: 'rgba(50, 186, 255, 0.203)',
					borderColor: '#32baff',
					borderWidth: 1,
					pointBackgroundColor: '#32baff',
					pointRadius: 7,
					pointHoverRadius: 7
				},
				{
					label: '응시자',
					data: totalData,
					backgroundColor: 'rgba(230, 31, 25, 0.2082)',
					borderColor: '#e61f19',
					borderWidth: 1,
					pointBackgroundColor: '#e61f19',
					pointRadius: 7,
					pointHoverRadius: 7
				}
			]
		},
		options: {
			scales: {
				r: {
					min: 0,
					max: 100,
					ticks: { display: false},
					grid: { display: false},
					angleLines: {
						color: '#ddd'
					},
					pointLabels: {
						padding: 12,
						color: '#231916',
						font: {
							size: 14,
							weight: '800'
						}
					}
				}
			},
			plugins: {
				legend: {display: false},
				tooltip: { enabled: false }
			}
		}
	});
});