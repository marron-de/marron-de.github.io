
// 세로 막대형 차트 (그룹형 멀티)
const bar_chart1 = document.querySelectorAll('.bar_chart1 .graph');
bar_chart1.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]');
    const barCtx = chartCanvas.getContext('2d');

	const rawScores = [];
	for (let i = 1; i <= labels.length; i++) {
		const scoreKey = `scores${i}`;
		if (chartCanvas.dataset[scoreKey]) {
			rawScores.push(JSON.parse(chartCanvas.dataset[scoreKey]));
		}
	}

	const colors = [
		{ start: '#282785', end: '#5353FF', label: '#5151fb' }, // 첫 번째 막대 
		{ start: '#1475AD', end: '#53C5FF', label: '#32baff' }, // 두 번째 막대 
		{ start: '#BC1914', end: '#FF6863', label: '#FF6863' }  // 세 번째 막대 
	];

	const datasets = [0, 1, 2].map(i => ({
		data: rawScores.map(score => score[i]), 
		backgroundColor: function(context) {
			const {ctx, chartArea, scales: {y}} = context.chart;
			if (!chartArea) return null;
			const val = context.parsed.y;
			const yTop = y.getPixelForValue(val);
			const yBottom = y.getPixelForValue(0);
			const gradient = ctx.createLinearGradient(0, yBottom, 0, yTop);
			gradient.addColorStop(0, colors[i].start);
			gradient.addColorStop(1, colors[i].end);
			return gradient;
		},
		barThickness: 36, 
		borderRadius: { topLeft: 8, topRight: 8, bottomLeft: 0, bottomRight: 0 },
		borderSkipped: false,
		datalabels: { color: colors[i].label }
	}));

    new Chart(barCtx, {
        type: 'bar',
        plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: datasets,
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    offset: 5,
                    color: function(context) {
                        const index = context.dataIndex;
                        return index === 0 ? '#5151fb' : index === 1 ? '#32baff' : '#e61f19';
                    },
                    font: { family: 'Pretendard', weight: '700', size: 15 },
                    formatter: (value) => value
                }
            },
            layout: {
                padding: { top: 0, left: -5, right: 0, bottom: -8 }
            },
            scales: {
                x: {
                    grid: { display: false },
                    border: { display: true, color: '#e5e8ec' },
                    ticks: {
                        padding: 8,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 13 },
                    }
                },
                y: {
                    beginAtZero: true,
					min: 0,
					max: 100,
                    ticks: {
                        stepSize: 20,
                        padding: 8,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 13 },
						callback: function(value) { return value + '%'; },
                    },
                    grid: { color: '#e5e8ec', drawTicks: false },
                    border: { display: false }
                }
            }
        }
    });
});

// 세로 막대형 차트 (단일)
const bar_chart2 = document.querySelectorAll('.bar_chart2 .graph');
bar_chart2.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]');
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]');
	const maxVal = parseFloat(chartCanvas.dataset.max);
    const stepVal = parseFloat(chartCanvas.dataset.step);
    const barCtx = chartCanvas.getContext('2d');

    new Chart(barCtx, {
        type: 'bar',
        plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: [{
                data: scores,
                backgroundColor: function(context) {
                    const {ctx, chartArea, scales: {y}} = context.chart;
                    if (!chartArea) return null;

                    const index = context.dataIndex;
                    const val = context.parsed.y;
                    const yTop = y.getPixelForValue(val);
                    const yBottom = y.getPixelForValue(0);
                    const gradient = ctx.createLinearGradient(0, yBottom, 0, yTop);

                    if (index === 0) { 
                        gradient.addColorStop(0, '#282785');
                        gradient.addColorStop(1, '#5353FF');
                    } else if (index === 1) { 
                        gradient.addColorStop(0, '#1475AD');
                        gradient.addColorStop(1, '#53C5FF');
                    } else { 
                        gradient.addColorStop(0, '#BC1914');
                        gradient.addColorStop(1, '#FF6863');
                    }
                    return gradient;
                },
                barThickness: 36,
                borderRadius: { topLeft: 8, topRight: 8, bottomLeft: 0, bottomRight: 0 },
                borderSkipped: false
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    offset: 5,
                    color: function(context) {
                        const index = context.dataIndex;
                        return index === 0 ? '#5151fb' : index === 1 ? '#32baff' : '#e61f19';
                    },
                    font: { family: 'Pretendard', weight: '700', size: 15 },
                    formatter: (value) => value
                }
            },
            layout: {
                padding: { top: 0, left: -5, right: 0, bottom: -8 }
            },
            scales: {
                x: {
                    grid: { display: false },
                    border: { display: true, color: '#e5e8ec' },
                    ticks: {
                        padding: 8,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 13 },
                    }
                },
                y: {
                    beginAtZero: true,
                    max: maxVal,
                    ticks: {
                        stepSize: stepVal,
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

// 세로 막대형 차트 (포인트)
// data-point="인덱스번호" 값에 해당하는 막대를 빨간색으로 표시
// data-blue="인덱스번호" 값에 해당하는 막대 값을 파란색으로 표시
// data-red="인덱스번호" 값에 해당하는 막대 값을 빨간색으로 표시
const barChart3 = document.querySelectorAll('.bar_chart3 .graph');
barChart3.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]');
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]');	
    const pointIndex = parseInt(chartCanvas.dataset.point);    
    const blueIndex = parseInt(chartCanvas.dataset.blue);    
    const redIndex = parseInt(chartCanvas.dataset.red);    
    const barCtx = chartCanvas.getContext('2d');
	
    new Chart(barCtx, {
        type: 'bar',
        plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: [{
                data: scores,
                backgroundColor: function(context) {
                    const {ctx, chartArea, scales: {y}} = context.chart;
                    if (!chartArea) return null;

                    const index = context.dataIndex;
                    const val = context.parsed.y;
                    const yTop = y.getPixelForValue(val);
                    const yBottom = y.getPixelForValue(0);
                    const gradient = ctx.createLinearGradient(0, yBottom, 0, yTop);

                    if (index === pointIndex) {
                        gradient.addColorStop(0, '#BC1914'); 
                        gradient.addColorStop(1, '#FF6863');
                    } else {
                        gradient.addColorStop(0, '#1475AD'); 
                        gradient.addColorStop(1, '#53C5FF'); 
                    }
                    return gradient;
                },
                barThickness: 80,
                borderRadius: { topLeft: 8, topRight: 8, bottomLeft: 0, bottomRight: 0 },
                borderSkipped: false
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    offset: 8,					
                    color: (context) => {
						const index = context.dataIndex;
						if (index === redIndex) return '#e61f19';  
						if (index === blueIndex) return '#32baff'; 
						return '#747983'; 
					},
                    font: { family: 'Pretendard', weight: '800', size: 14 },
                    formatter: (value) => value + '%'
                }
            },
            layout: {
                padding: { top: 0, left: -10, right: 0, bottom: -8 }
            },
            scales: {
                x: {
                    grid: { display: false },
                    border: { display: true, color: '#e5e8ec' },
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
                        padding: 10,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 13 },
                        callback: function(value) {
                            return value + '%';
                        }
                    },
                    grid: { color: '#e5e8ec', drawTicks: false },
                    border: { display: false }
                }
            }
        }
    });
});

// 산점도 차트 
const lineGuidePlugin = {
    id: 'lineGuide',
    afterDraw: (chart) => {
        const { ctx, scales: { x, y } } = chart;
        ctx.save();
        
        ctx.fillStyle = '#7e7e7f';
        ctx.font = '400 12px Pretendard';
        ctx.textAlign = 'right';
		
        ctx.fillText('990', x.left - 12, y.top + 8); 
        ctx.fillText('(토익)', x.left - 10, y.top + 24); 
        
        ctx.textAlign = 'left';
        ctx.fillText('(학점)', x.right - 18, y.bottom + 40);

        chart.data.datasets.forEach((dataset, i) => {
            const meta = chart.getDatasetMeta(i);
            meta.data.forEach((point) => {
                const { x: pixelX, y: pixelY } = point;
                const radius = 8;

                ctx.strokeStyle = dataset.borderColor;
                ctx.lineWidth = 1.5;
                ctx.setLineDash([4, 4]);
                ctx.beginPath();
                ctx.moveTo(pixelX, pixelY); ctx.lineTo(x.left, pixelY); ctx.stroke();
                ctx.beginPath();
                ctx.moveTo(pixelX, pixelY); ctx.lineTo(pixelX, y.bottom); ctx.stroke();
                ctx.setLineDash([]);

                const grad = ctx.createLinearGradient(pixelX, pixelY - radius, pixelX, pixelY + radius);
                if (i === 0) {
                    grad.addColorStop(0, '#ff6863');
                    grad.addColorStop(1, '#bc1914');
                } else {
                    grad.addColorStop(0, '#53c5ff');
                    grad.addColorStop(1, '#149de3');
                }

                ctx.beginPath();
                ctx.arc(pixelX, pixelY, radius, 0, Math.PI * 2);
                ctx.fillStyle = grad;
                ctx.fill();
                ctx.strokeStyle = '#ffffff';
                ctx.lineWidth = 1.5;
                ctx.stroke();
            });
        });
        ctx.restore();
    }
};
const scatter_chart = document.querySelectorAll('.scatter_chart .graph');
scatter_chart.forEach((chartCanvas) => {
    const scatterCtx = chartCanvas.getContext('2d');
    const p1 = JSON.parse(chartCanvas.dataset.point1 || '{"x":0, "y":0}');
    const p2 = JSON.parse(chartCanvas.dataset.point2 || '{"x":0, "y":0}');
    const xLabels = ['0', '3.0', '3.5', '4.0', '4.5'];
    
    const getXPixelPos = (val) => {
        if (val <= 0) return 0;
        if (val <= 3.0) return (val / 3.0); 
        if (val <= 4.5) return 1 + ((val - 3.0) / 0.5); 
        return 4;
    };

    new Chart(scatterCtx, {
        type: 'scatter',
        plugins: [lineGuidePlugin],
        data: {
            datasets: [
                { data: [{ x: getXPixelPos(p1.x), y: p1.y }], borderColor: '#bc1914', pointRadius: 0 },
                { data: [{ x: getXPixelPos(p2.x), y: p2.y }], borderColor: '#149de3', pointRadius: 0 }
            ]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            layout: { 
                padding: { top: 0, left: 0, right: 0, bottom: 6 } 
            },
            scales: {
                x: {
                    type: 'linear',
                    min: 0,
                    max: 4, 
                    grid: { display: true, color: '#d8dadd', drawTicks: false },
                    ticks: {
                        stepSize: 1,
                        padding: 12, 
                        color: '#747983',
                        font: { family: 'Pretendard', size: 13 },
                        callback: (val) => xLabels[Math.round(val)] || ''
                    }
                },
                y: {
					min: 600,
					max: 990,
					grid: {
						drawTicks: false,
						color: (ctx) => [700, 800, 900, 990].includes(ctx.tick.value) ? '#d8dadd' : 'transparent'
					},
					ticks: {
						stepSize: 10,
						padding: 12,
						color: '#747983',
						font: { family: 'Pretendard', size: 13 },
						autoSkip: false, 
						callback: (val) => [700, 800, 900].includes(val) ? val : ''
					},
					border: { display: false }
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
					pointRadius: 6,
					pointHoverRadius: 6
				},
				{
					label: '응시자',
					data: totalData,
					backgroundColor: 'rgba(230, 31, 25, 0.2082)',
					borderColor: '#e61f19',
					borderWidth: 1,
					pointBackgroundColor: '#e61f19',
					pointRadius: 6,
					pointHoverRadius: 6
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

// 선형 차트
const lineChart = document.querySelectorAll('.line_chart .graph');
lineChart.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]');
	const scores = JSON.parse(chartCanvas.dataset.scores || '[]');
	const lineCtx = chartCanvas.getContext('2d');

	new Chart(lineCtx, {
		type: 'line',
		plugins: [ChartDataLabels],
		data: {
			labels: labels,
			datasets: [
				{
					label: '데이터',
					data: scores,
					borderColor: '#bf1b21',
					borderWidth: 2.8,
					pointBackgroundColor: '#fff',
					pointRadius: 6,
					pointBorderWidth: 2.8,
					pointHoverBackgroundColor: '#fff',
					pointHoverBorderColor: '#bf1b21',
					pointHoverRadius: 8,
					pointHoverBorderWidth: 2.8,
					clip: false,
				},
			]
		},
		options: {
			plugins: {
				legend: { display: false,},
				tooltip: {enabled: true,},
				datalabels: {
					color: '#bf1b21',
					font: {
						family: 'Pretendard',
						weight: '700',
						size: 13,
					},
					clip: false,
					offset: function(context) {
						const value = context.dataset.data[context.dataIndex];
						return value >= 95 ? 6 : 2;
					},
					anchor: function(context) {
						const value = context.dataset.data[context.dataIndex];
						if (value >= 95) return 'start';
						return value <= 6 ? 'end' : (value <= 40 ? 'start' : 'end');
					},
					align: function(context) {
						const value = context.dataset.data[context.dataIndex];
						if (value >= 95) return 'bottom';
						return value <= 6 ? 'top' : (value <= 40 ? 'bottom' : 'top');
					},
					formatter: function(value) {
						return value;
					}
				},
			},
			layout: {
				padding: {top: 0, left: -12, right: 0, bottom: -12, }
			},
			scales: {
				x: {
					offset: true,
					ticks: {
						padding: 12,
						font: {
							family: 'Pretendard',
							weight: '400',
							size: 13,
							color: '#7e7e7f',
						},
					},
					grid: {display: false,},
				},
				y: {
					min: 0,
					max: 100,
					beginAtZero: true,
					ticks: {
						stepSize: 20,
						padding: 12,
						font: {
							family: 'Pretendard',
							weight: '400',
							size: 13,
							color: '#7e7e7f',
						},
					},
					border: {display: false,},
				},
			},
		},
	});
});

// 가로 막대형 차트 
const barChart = document.querySelectorAll('.bar_chart .graph');
barChart.forEach((chartCanvas) => {
	const rawLabels = JSON.parse(chartCanvas.dataset.labels || '[]');
    const labels = rawLabels.map(label => label.split('\n'));
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]');
    const barCtx = chartCanvas.getContext('2d');

    new Chart(barCtx, {
		type: 'bar',
		plugins: [
			ChartDataLabels,
			{
			beforeDraw: (chart) => {
				const {ctx, scales: {y}} = chart;
				ctx.save();
				ctx.textAlign = 'right';
				ctx.textBaseline = 'middle';
				ctx.font = '400 13px Pretendard';
				ctx.fillStyle = '#7e7e7f';

				y.ticks.forEach((tick, index) => {
					const label = y.getLabelForValue(tick.value);
					const xPos = y.width; 
					const yPos = y.getPixelForTick(index);
					
					if (Array.isArray(label)) {
						label.forEach((line, i) => {
							ctx.fillText(line, xPos - 10, yPos + (i - (label.length - 1) / 2) * 15);
						});
					} else {
						ctx.fillText(label, xPos - 10, yPos);
					}
				});
				ctx.restore();
			}
			}, {
				id: 'hideOriginalTicks',
				afterUpdate: (chart) => {
					chart.scales.y.options.ticks.display = false;
				}
			}
		],
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
					gradient.addColorStop(0, '#149de3');
					gradient.addColorStop(1, '#53c5ff');
					return gradient;
				},
				borderRadius: { topLeft: 0, topRight: 8, bottomLeft: 0, bottomRight: 8 },
				borderSkipped: false,
				barThickness: 15
			}]
		},
		options: {
			indexAxis: 'y',
			responsive: true,
			maintainAspectRatio: false,
			plugins: {
            	legend: { display: false },
				datalabels: {
					formatter: function(value) {
						return parseFloat(value).toFixed(2);
					},
					anchor: 'end',
					align: (context) => context.dataset.data[context.dataIndex] >= 90 ? 'left' : 'right',
					offset: (context) => context.dataset.data[context.dataIndex] >= 90 ? 5 : 5,
					color: (context) => context.dataset.data[context.dataIndex] >= 90 ? '#ffffff' : '#32baff',
					font: { family: 'Pretendard', weight: '700', size: 14 }
				}
			},
			layout: {
				 padding: { top:0, left:0, right: 0, bottom:-12, } 
			},
			scales: {
				x: {
					max: 100,
					beginAtZero: true,
					grid: {  display: true, drawTicks: false  },
					border: { 
						display: true, 
						color: '#d8dadd'
					},
					ticks: { 
						stepSize: 10,
						padding: 12,
						font: { family: 'Pretendard', weight: '400', size: 13 },
						color: '#7e7e7f',
					}
				},
				y: {
					grid: { display: false },
					afterFit: function(axis) {
						axis.width = axis.chart.width * 0.16;
					},
					border: { display: false },
					ticks: {
						crossAlign: 'far', 
						textAlign: 'right',
						align: 'center', 
						padding: 10,
						font: { family: 'Pretendard', weight: '400', size: 13 },
						color: '#7e7e7f',
					}
				}
			},
		},
	});
});