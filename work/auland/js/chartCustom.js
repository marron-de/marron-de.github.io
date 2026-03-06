
// 방사형 차트
const radarChart = document.querySelectorAll('.radar_chart .graph');
radarChart.forEach((chartCanvas) => {
	const avgData = JSON.parse(chartCanvas.dataset.avg || '[]');
    const userData = JSON.parse(chartCanvas.dataset.user || '[]');	
	const radarCtx = chartCanvas.getContext('2d');

	new Chart(radarCtx, {
		type: 'radar',
		data: {
			labels: ['개인적인성', '환경적인성', '타인적인성'],
			datasets: [
				{
					label: '평균',
					data: avgData,
					backgroundColor: 'rgba(230, 31, 25, 0.2082)',
					borderColor: '#e61f19',
					borderWidth: 1,
					pointBackgroundColor: '#e61f19',
					pointRadius: 6,
					pointHoverRadius: 6
				},
				{
					label: '본인',
					data: userData,
					backgroundColor: 'rgba(50, 186, 255, 0.203)',
					borderColor: '#32baff',
					borderWidth: 1,
					pointBackgroundColor: '#32baff',
					pointRadius: 6,
					pointHoverRadius: 6
				}
			]
		},
		options: {
			responsive: false,
			maintainAspectRatio: false,
			plugins: {
				legend: {display: false},
				tooltip: { enabled: false }
			},
			layout: {
				padding: 0,
			},
			scales: {
				r: {
					startAngle: 0,
					min: 0,
					max: 100,
					ticks: {stepSize: 25,display: false	},
					grid: {color: '#d8dadd'},
					angleLines: {color: '#d8dadd'},
					pointLabels: { display: false },
				}
			},
		}
	});
});

// 선형 차트 (색상만 다름)
const lineChart1 = document.querySelectorAll('.line_chart1 .graph');
lineChart1.forEach((chartCanvas) => {
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

// 선형 차트 (색상만 다름)
const lineChart2 = document.querySelectorAll('.line_chart2 .graph');
lineChart2.forEach((chartCanvas) => {
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
					borderColor: '#32baff',
					borderWidth: 2.8,
					pointBackgroundColor: '#fff',
					pointRadius: 6,
					pointBorderWidth: 2.8,
					pointHoverBackgroundColor: '#fff',
					pointHoverBorderColor: '#32baff',
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
					color: '#32baff',
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
						return value <= 6 ? 'end' : (value <= 45 ? 'start' : 'end');
					},
					align: function(context) {
						const value = context.dataset.data[context.dataIndex];
						if (value >= 95) return 'bottom';
						return value <= 6 ? 'top' : (value <= 45 ? 'bottom' : 'top');
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
				barThickness: 16
			}]
		},
		options: {
			indexAxis: 'y',
			responsive: true,
			maintainAspectRatio: false,
			plugins: {
            	legend: { display: false },
				datalabels: {
					anchor: 'end',
					align: (context) => context.dataset.data[context.dataIndex] >= 60 ? 'left' : 'right',
					offset: (context) => context.dataset.data[context.dataIndex] >= 60 ? 5 : 5,
					color: (context) => context.dataset.data[context.dataIndex] >= 60 ? '#ffffff' : '#32baff',
					font: { family: 'Pretendard', weight: '700', size: 14 }
				}
			},
			layout: {
				 padding: { top:0, left:0, right: 0, bottom:-12, } 
			},
			scales: {
				x: {
					max: 65,
					beginAtZero: true,
					grid: {  display: true, drawTicks: false  },
					border: { 
						display: true, 
						color: '#d8dadd'
					},
					ticks: { 
						stepSize: 13,
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

// 가로 막대형 누적 차트 
const barChart2 = document.querySelectorAll('.bar_chart2 .graph');
barChart2.forEach((chartCanvas) => {
	const rawLabels = JSON.parse(chartCanvas.dataset.labels || '[]');
	const labels = rawLabels.map(label => label.split('\n'));
	const scores1 = JSON.parse(chartCanvas.dataset.scores || '[]');
	const scores2 = JSON.parse(chartCanvas.dataset.scores2 || '[]');
	const barCtx = chartCanvas.getContext('2d');

	new Chart(barCtx, {
		type: 'bar',
		plugins: [
			ChartDataLabels,
			{
				id: 'customYAxisLabels',
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
								const offset = (i - (label.length - 1) / 2) * 15;
								ctx.fillText(line, xPos - 10, yPos + offset);
							});
						} else {
							ctx.fillText(label, xPos - 10, yPos);
						}
					});
					ctx.restore();
				}
			},
			{
				id: 'hideOriginalTicks',
				afterUpdate: (chart) => {
					chart.scales.y.options.ticks.display = false;
				}
			}
		],
		data: {
			labels: labels,
			datasets: [
				{
					label: '선호도',
					data: scores1,
					backgroundColor: function(context) {
						const {ctx, scales: {x}} = context.chart;
						if (!x || context.parsed.x === undefined) return '#149DE3';
						
						const barStartX = x.getPixelForValue(0);
						const barEndX = x.getPixelForValue(context.parsed.x);
						
						if (!isFinite(barStartX) || !isFinite(barEndX)) return '#149DE3';

						const gradient = ctx.createLinearGradient(barStartX, 0, barEndX, 0);
						gradient.addColorStop(0, '#149DE3');
						gradient.addColorStop(1, '#53C5FF');
						return gradient;
					},
					borderSkipped: false,
					barThickness: 16
				},
				{
					label: '역량',
					data: scores2,backgroundColor: function(context) {
						const {ctx, scales: {x}} = context.chart;
						if (!x || context.parsed.x === undefined) return '#14BCAC';
						
						const v0 = context.parsed._custom ? context.parsed._custom.start : context.chart.data.datasets[0].data[context.dataIndex];
						const v1 = v0 + context.parsed.x;
						
						const x0 = x.getPixelForValue(v0);
						const x1 = x.getPixelForValue(v1);

						if (!isFinite(x0) || !isFinite(x1)) return '#14BCAC';
						
						const gradient = ctx.createLinearGradient(x0, 0, x1, 0);
						gradient.addColorStop(0, '#14BCAC');
						gradient.addColorStop(1, '#4BEEB9');
						
						return gradient;
					},
					borderRadius: { topLeft: 0, topRight: 8, bottomLeft: 0, bottomRight: 8 },
					borderSkipped: false,
					barThickness: 16
				}
			]
		},
		options: {
			indexAxis: 'y',
			responsive: true,
			maintainAspectRatio: false,
			plugins: {
				legend: { display: false, },
				datalabels: {
					anchor: 'center',
					align: 'center',
					color: '#ffffff',
					font: { family: 'Pretendard', weight: '700', size: 13 },
					formatter: (value) => value
				}
			},
			layout: {
				 padding: { top:0, left:0, right: 0, bottom:-12, } 
			},
			scales: {
				x: {
					max: 65,
					beginAtZero: true,
					stacked: true,
					grid: {  display: true, drawTicks: false },
					border: { 
						display: true, 
						color: '#d8dadd'
					},
					ticks: { 
						stepSize: 13,
						padding: 12,
						font: { family: 'Pretendard', weight: '400', size: 13 },
						color: '#7e7e7f',
					}
				},
				y: {
					stacked: true,
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
		}
	});
});

// 세로 막대형 누적 차트 
const barChart3 = document.querySelectorAll('.bar_chart3 .graph');
barChart3.forEach((chartCanvas) => {
    const rawLabels = JSON.parse(chartCanvas.dataset.labels || '[]');
    const labels = rawLabels.map(label => label.split('\n'));
    const scores1 = JSON.parse(chartCanvas.dataset.scores || '[]');
    const scores2 = JSON.parse(chartCanvas.dataset.scores2 || '[]');
    const barCtx = chartCanvas.getContext('2d');

    new Chart(barCtx, {
        type: 'bar',
        plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: [
                {
                    label: '선호도',
                    data: scores1,
					backgroundColor: function(context) {
                        const {ctx, chartArea, scales: {y}} = context.chart;
                        if (!chartArea) return '#1475AD';
                        const yTop = y.getPixelForValue(context.parsed.y);
                        const yBottom = y.getPixelForValue(0);
                        const gradient = ctx.createLinearGradient(0, yBottom, 0, yTop);
                        gradient.addColorStop(0, '#1475AD');
                        gradient.addColorStop(1, '#53C5FF');
                        return gradient;
                    },
                    barThickness: 36,
                    borderSkipped: false
                },
                {
                    label: '역량',
                    data: scores2,
                    backgroundColor: function(context) {
                        const {ctx, chartArea, scales: {y}} = context.chart;
                        if (!chartArea) return '#14BCAC';

                        const val = context.parsed.y;
                        const index = context.dataIndex;
                        const baseVal = scores1[index]; 
                        const totalVal = baseVal + val;

                        const yBottom = y.getPixelForValue(baseVal);
                        const yTop = y.getPixelForValue(totalVal);

                        const gradient = ctx.createLinearGradient(0, yBottom, 0, yTop);
                        gradient.addColorStop(0, '#14BCAC');
                        gradient.addColorStop(1, '#4BEEB9');
                        return gradient;
                    },
                    borderRadius: { topLeft: 8, topRight: 8, bottomLeft: 0, bottomRight: 0 },
                    barThickness: 36,
                    borderSkipped: false
                }
            ]
        },
        options: {
            indexAxis: 'x', 
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                datalabels: {
                    anchor: 'center',
                    align: 'center',
                    color: '#ffffff',
                    font: { family: 'Pretendard', weight: '700', size: 13 },
                    formatter: (value) => value
                }
            },
            layout: {
                padding: { top: 0, left: 0, right: 0, bottom: -8 }
            },
            scales: {
                x: {
                    stacked: true, 
					offset: true,
                    grid: { display: false },
                    border: { display: true, color: '#e5e8ec' },
                    ticks: {
                        padding: 8,
						autoSkip: false,
                        maxRotation: 0,
                        minRotation: 0,
                        color: '#7e7e7f',
						color: function(context) {
                            const idx = context.index + 1; 
                            if (idx <= 13) return '#32baff'; 
                            if (idx >= 14 && idx <= 17) return '#7E7E7F'; 
                            return '#17bfad'; 
                        },
						font: function(context) {
							const idx = context.index + 1;
                            const isBold = (idx <= 13 || idx >= 18);
                            return {
                                family: 'Pretendard',
								weight: isBold ? '700' : '400',
                                size: 13,
                            };
                        }
                    }
                },
                y: {
                    stacked: true,
                    beginAtZero: true,
                    max: 50, 
                    ticks: {
                        stepSize: 10,
                        padding: 8,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 13 },
                    },
                    grid: { display: true, color: '#e5e8ec', drawTicks: false},
                    border: { display: false }
                }
            }
        }
    });
});

// 세로 막대형 차트 
const barChart4 = document.querySelectorAll('.bar_chart4 .graph');
barChart4.forEach((chartCanvas) => {
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
                        gradient.addColorStop(0, '#FF6863');
                        gradient.addColorStop(1, '#BC1914');
                    }
                    return gradient;
                },
                barThickness: 42,
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

// 세로 막대형 차트 
// data-point="인덱스번호" 값에 해당하는 막대를 빨간색으로 표시
const barChart5 = document.querySelectorAll('.bar_chart5 .graph');
barChart5.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]');
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]');	
    const pointIndex = parseInt(chartCanvas.dataset.point);    
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
                    color: (context) => context.dataIndex === pointIndex ? '#e61f19' : '#32BAFF',
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

// 가로 막대형 누적 차트 (백분율)
// data-point="내 위치 값" 값을 기준으로 x축 위치에 깃발 표시
const barChart6 = document.querySelectorAll('.bar_chart6 .graph');
barChart6.forEach((chartCanvas) => {
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]');
    const pointValue = parseFloat(chartCanvas.dataset.point ); 
    const barCtx = chartCanvas.getContext('2d');
    const totalScore = scores.reduce((a, b) => a + b, 0);

    new Chart(barCtx, {
        type: 'bar',
        plugins: [ChartDataLabels, {
            id: 'customDecorator',
            afterDraw: (chart) => {
                const { ctx, chartArea: { left, right } } = chart;
                const meta0 = chart.getDatasetMeta(0);
                const firstBar = meta0.data[0];

                chart.data.datasets.forEach((dataset, i) => {
					const meta = chart.getDatasetMeta(i);
                    const model = meta.data[0];

                    if (!model) return; 

                    const dataValue = dataset.data[0];                    
					
                    if (dataValue > 0 && dataValue <= 5) {
                        const centerX = model.x - (model.width / 2);
                        const y = model.y - (model.height / 2);
                        
                        ctx.save();
                        ctx.beginPath();
                        ctx.strokeStyle = '#4a4a4a';
                        ctx.lineWidth = 1;
                        ctx.moveTo(centerX, y);
                        ctx.lineTo(centerX, y - 15);
                        ctx.stroke();
                        ctx.restore();
                    }
                });

                const chartWidth = right - left;
                const flagX = left + (chartWidth * (pointValue / totalScore));
                const flagTopY = firstBar.y - (firstBar.height / 2);

                ctx.save();
                ctx.strokeStyle = '#822cb0';
                ctx.fillStyle = '#dec0ff';
                ctx.lineWidth = 1;
                ctx.beginPath();
                ctx.moveTo(flagX, flagTopY);
                ctx.lineTo(flagX, flagTopY - 36);
                ctx.stroke();
                ctx.beginPath();
                ctx.rect(flagX, flagTopY - 36, 32, 24);
                ctx.fill();
                ctx.stroke();
                ctx.restore();
            }
        }],
        data: {
            labels: ['전체'],
            datasets: scores.map((score, index) => {
                const colors = ['#7E7E7F', '#75171B', '#e61f19', '#32baff'];
                return {
                    data: [score],
                    backgroundColor: colors[index % colors.length],
                    barThickness: 40,
                    borderSkipped: false
                };
            })
        },
        options: {
            indexAxis: 'y',
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                datalabels: {
                    display: (context) => context.dataset.data[0] > 0,
                    align: (context) => context.dataset.data[0] <= 5 ? 'top' : 'center',
                    offset: (context) => context.dataset.data[0] <= 5 ? 32 : 0,
                    color: (context) => context.dataset.data[0] <= 5 ? '#4a4a4a' : '#ffffff',
                    font: { family: 'Pretendard', weight: '800', size: 14 },
                    formatter: (value) => value + '%',
					textAlign: 'right'
                }
            },
            layout: {
                padding: { top: 0, left: 0, right: 14, bottom: 1 }
            },
            scales: {
                x: {
                    stacked: true,
                    beginAtZero: true,
                    max: totalScore,
                    grid: {
                        display: true,
                        color: '#e5e8ec',
                        drawTicks: false,
                        lineWidth: 1,
                        z: -1
                    },
                    ticks: { display: false },
                    border: { 
                        display: true,
                        color: '#e5e8ec'
                    }
                },
                y: {
                    stacked: true,
                    display: false
                }
            }
        }
    });
});

// 버블 차트
const bubbleChart = document.querySelectorAll('.bubble_Chart .graph');
bubbleChart.forEach((chartCanvas) => {
	const bubbleCtx = chartCanvas.getContext('2d');

    new Chart(bubbleCtx, {
        type: 'bubble',
        plugins: [
            ChartDataLabels,
            {
                id: 'quadrantLayout',
                beforeDraw: (chart) => {
                    const { ctx, chartArea: { top, bottom, left, right }, scales: { x, y } } = chart;
                    const centerX = x.getPixelForValue(12.5);
                    const centerY = y.getPixelForValue(12.5);

                    ctx.save();
					
                    // 중앙 십자선
                    ctx.strokeStyle = '#adb2bb';
                    ctx.lineWidth = 1;
                    ctx.beginPath();
                    ctx.moveTo(centerX, top);
                    ctx.lineTo(centerX, bottom);
                    ctx.moveTo(left, centerY);
                    ctx.lineTo(right, centerY);
                    ctx.stroke();

                    const drawQuadrant = (qx, qy, txt, bgColor, txtColor) => {
                        ctx.font = 'bold 18px Pretendard';
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'middle';
                        ctx.fillStyle = bgColor;
                        ctx.beginPath();
                        ctx.roundRect(qx, qy, 64, 64, 8);
                        ctx.fill();
                        ctx.fillStyle = txtColor;
                        ctx.fillText(txt, qx + 32, qy + 32);
                    };

                    drawQuadrant(right - 78, top + 18, '1', '#ebf9ff', '#32baff');					
                    drawQuadrant(left + 14, top + 18, '2', '#f4f5f8', '#7e7e7f');					
                    drawQuadrant(left + 14, bottom - 78, '3', '#ebfcf8', '#17bfad');
                    drawQuadrant(right - 78, bottom - 78, '4', '#f4f5f8', '#7e7e7f'); 

                    ctx.restore();
                }
            }
        ],
        data: {
            datasets: [{
                data: [
                    { x: 21, y: 20, r: 20, label: '1' },
                    { x: 20.5, y: 21, r: 20, label: '2' },
                    { x: 19.5, y: 22, r: 20, label: '3' },
                    { x: 21.5, y: 19.5, r: 20, label: '4' },
                    { x: 20.5, y: 19.3, r: 20, label: '5' },
                    { x: 19.8, y: 20.2, r: 20, label: '6' },
                    { x: 19, y: 21, r: 20, label: '7' },
                    { x: 16.5, y: 22.5, r: 20, label: '8' },
                    { x: 20.5, y: 16, r: 20, label: '9' },
                    { x: 15.5, y: 17, r: 20, label: '10' },
                    { x: 15.3, y: 14.2, r: 20, label: '11' },
                    { x: 14.5, y: 15, r: 20, label: '12' },
                    { x: 15.3, y: 13, r: 20, label: '13' },
                    { x: 15.3, y: 11.5, r: 20, label: '14' },
                    { x: 12.5, y: 13, r: 20, label: '15' },
                    { x: 14.5, y: 10.2, r: 20, label: '16' },
                    { x: 10.5, y: 13, r: 20, label: '17' },
                    { x: 7, y: 5.2, r: 20, label: '18' },
                    { x: 6, y: 6, r: 20, label: '19' }
                ],
                backgroundColor: function(context) {
                    const {ctx, chartArea, scales: {x, y}} = context.chart;
                    if (!chartArea) return null;
                    const raw = context.raw;
                    const centerX = x.getPixelForValue(raw.x);
                    const centerY = y.getPixelForValue(raw.y);
                    const radius = raw.r;

                    const gradient = ctx.createLinearGradient(centerX, centerY - radius, centerX, centerY + radius);

                    if (raw.label === '15') {
                        gradient.addColorStop(0, '#CACACA');
                        gradient.addColorStop(1, '#878787');
                    } else if (raw.x > 12.5 && raw.y > 12.5) {
                        gradient.addColorStop(0, '#53C5FF');
                        gradient.addColorStop(1, '#1475AD');
                    } else if (raw.x < 12.5 && raw.y < 12.5) {
                        gradient.addColorStop(0, '#4BEEB9');
                        gradient.addColorStop(1, '#14BCAC');
                    } else {
                        gradient.addColorStop(0, '#CACACA');
                        gradient.addColorStop(1, '#878787');
                    }
                    return gradient;
                },
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
			layout: {
				 padding: { top:0, left:-8, right: 0, bottom:-10, } 
			},
            scales: {
                x: {
                    min: 0, 
					max: 25,
                    ticks: { 
						stepSize: 5, 
						padding: 10,
						color: '#7e7e7f', 
						font: { family: 'Pretendard', weight: '400', size: 13 },
					},
					grid: {
						display: true,
						drawTicks: false,
						color: (context) => {
							if (!context.tick) return 'transparent';
							const val = context.tick.value;
							if (val === 0 || val === 25) {
								return 'transparent';
							}
							return '#e5e8ec';
						}
					},
                    border: { display: true, color: '#e5e8ec' },
                },
                y: {
                    min: 0, 
					max: 25,
                    ticks: { 
						stepSize: 5, 
						padding: 8,
						color: '#7e7e7f', 
						font: { family: 'Pretendard', weight: '400', size: 13 },
					},
                    grid: { display: true, color: '#e5e8ec', drawTicks: false },
                    border: { display: false }
                }
            },
            plugins: {
                legend: { display: false },
                datalabels: {
                    color: '#ffffff',
                    font: { family: 'Pretendard', weight: '700', size: 14 },
                    formatter: (value) => value.label
                },
                tooltip: { enabled: false }
            }
        }
    });
});

// 도넛 차트 (색상 순서만 다름)
const doughnutChart = document.querySelectorAll('.doughnut_chart .graph');
doughnutChart.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]').reverse();
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]').reverse();
   	const pointIdx = chartCanvas.dataset.point !== undefined ? parseInt(chartCanvas.dataset.point) : null;
    const isVer2 = chartCanvas.classList.contains('ver2'); 
    const ctx = chartCanvas.getContext('2d');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: scores,
                backgroundColor: ['#32baff', '#e61f19', '#bf1b21', '#75171b','#430c0f'],
                borderWidth: 0,
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            cutout: '35%',
            plugins: {
                legend: { display: false },
                datalabels: { display: false }
            },
            layout: {
                padding: { top: 40, bottom: 30, left: 160, right: 160 }
            }
        },
        plugins: [{
            afterDraw: (chart) => {
                const { ctx } = chart;
                chart.data.datasets.forEach((dataset, i) => {
                    chart.getDatasetMeta(i).data.forEach((datapoint, index) => {
                        if (!scores[index] || scores[index] === 0) return;

                        const isPoint = (pointIdx !== null && index === (labels.length - 1 - pointIdx));

                        const view = datapoint;
                        const midpoint_angle = view.startAngle + (view.endAngle - view.startAngle) / 2;
                        const cos = Math.cos(midpoint_angle);
                        const sin = Math.sin(midpoint_angle);
                        const d = view.outerRadius;

                        const startX = view.x + cos * d;
                        const startY = view.y + sin * d;
                        
                        const lineLength = 60; 
                        const endX = cos >= 0 ? startX + lineLength : startX - lineLength;
                        const endY = startY; 

                        ctx.beginPath();
                        ctx.moveTo(startX, startY);
                        ctx.lineTo(endX, endY);
                        ctx.strokeStyle = '#231916';
                        ctx.lineWidth = 1;
                        ctx.stroke();

                        const isRight = endX >= view.x;
                        ctx.textBaseline = 'middle';
                        
                        const scoreText = `${scores[index]}%`;
                        const labelText = ` (${labels[index]})`;

                        ctx.font = '800 16px Pretendard';
                        const scoreWidth = ctx.measureText(scoreText).width;
                        ctx.font = '400 14px Pretendard';
                        const labelWidth = ctx.measureText(labelText).width;
                        
                        let startTextX = isRight ? endX + 8 : endX - 8 - (scoreWidth + labelWidth);
                        ctx.textAlign = 'left'; 
                        
                        ctx.fillStyle = isPoint ? '#e61f19' : '#4a4a4a';
                        ctx.font = '800 16px Pretendard';
                        ctx.fillText(scoreText, startTextX, endY);
                        
                        ctx.fillStyle = (isVer2 && isPoint) ? '#e61f19' : '#4a4a4a';
                        ctx.font = (isVer2 && isPoint) ? '700 14px Pretendard' : '400 14px Pretendard';
                        ctx.fillText(labelText, startTextX + scoreWidth, endY);
                    });
                });
            }
        }]
    });
});

// 도넛 차트 (색상 순서만 다름)
const doughnutChart2 = document.querySelectorAll('.doughnut_chart2 .graph');
doughnutChart2.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]').reverse();
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]').reverse();
   	const pointIdx = chartCanvas.dataset.point !== undefined ? parseInt(chartCanvas.dataset.point) : null;
    const isVer2 = chartCanvas.classList.contains('ver2'); 
    const ctx = chartCanvas.getContext('2d');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: scores,
                backgroundColor: ['#430c0f', '#32baff', '#e61f19', '#bf1b21', '#75171b',],
                borderWidth: 0,
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            cutout: '35%',
            plugins: {
                legend: { display: false },
                datalabels: { display: false }
            },
            layout: {
                padding: { top: 40, bottom: 30, left: 160, right: 160 }
            }
        },
        plugins: [{
            afterDraw: (chart) => {
                const { ctx } = chart;
                chart.data.datasets.forEach((dataset, i) => {
                    chart.getDatasetMeta(i).data.forEach((datapoint, index) => {
                        if (!scores[index] || scores[index] === 0) return;

                        const isPoint = (pointIdx !== null && index === (labels.length - 1 - pointIdx));

                        const view = datapoint;
                        const midpoint_angle = view.startAngle + (view.endAngle - view.startAngle) / 2;
                        const cos = Math.cos(midpoint_angle);
                        const sin = Math.sin(midpoint_angle);
                        const d = view.outerRadius;

                        const startX = view.x + cos * d;
                        const startY = view.y + sin * d;
                        
                        const lineLength = 60; 
                        const endX = cos >= 0 ? startX + lineLength : startX - lineLength;
                        const endY = startY; 

                        ctx.beginPath();
                        ctx.moveTo(startX, startY);
                        ctx.lineTo(endX, endY);
                        ctx.strokeStyle = '#231916';
                        ctx.lineWidth = 1;
                        ctx.stroke();

                        const isRight = endX >= view.x;
                        ctx.textBaseline = 'middle';
                        
                        const scoreText = `${scores[index]}%`;
                        const labelText = ` (${labels[index]})`;

                        ctx.font = '800 16px Pretendard';
                        const scoreWidth = ctx.measureText(scoreText).width;
                        ctx.font = '400 14px Pretendard';
                        const labelWidth = ctx.measureText(labelText).width;
                        
                        let startTextX = isRight ? endX + 8 : endX - 8 - (scoreWidth + labelWidth);
                        ctx.textAlign = 'left'; 
                        
                        ctx.fillStyle = isPoint ? '#e61f19' : '#4a4a4a';
                        ctx.font = '800 16px Pretendard';
                        ctx.fillText(scoreText, startTextX, endY);
                        
                        ctx.fillStyle = (isVer2 && isPoint) ? '#e61f19' : '#4a4a4a';
                        ctx.font = (isVer2 && isPoint) ? '700 14px Pretendard' : '400 14px Pretendard';
                        ctx.fillText(labelText, startTextX + scoreWidth, endY);
                    });
                });
            }
        }]
    });
});