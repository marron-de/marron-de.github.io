
// 01 고학년결과지
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
					borderWidth: 2,
					pointBackgroundColor: '#fff',
					pointRadius: 4.5,
					pointBorderWidth: 2,
					pointHoverBackgroundColor: '#fff',
					pointHoverBorderColor: '#bf1b21',
					pointHoverRadius: 4.5,
					pointHoverBorderWidth: 2,
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
						size: 12,
					},
					clip: false,
					offset: function(context) {
						const value = context.dataset.data[context.dataIndex];
						return value >= 95 ? 10 : 2;
					},
					anchor: function(context) {
						const value = context.dataset.data[context.dataIndex];
						if (value >= 95) return 'start';
						return value <= 5 ? 'end' : (value <= 47.25 ? 'start' : 'end');
					},
					align: function(context) {
						const value = context.dataset.data[context.dataIndex];
						if (value >= 95) return 'top';
						return value <= 5 ? 'top' : (value <= 47.25 ? 'bottom' : 'top');
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
						maxRotation: 90, 
						minRotation: 90,
						padding: 12,
						font: {
							family: 'Pretendard',
							weight: '400',
							size: 12,
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
							size: 12,
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
					borderWidth: 2,
					pointBackgroundColor: '#fff',
					pointRadius: 4.5,
					pointBorderWidth: 2,
					pointHoverBackgroundColor: '#fff',
					pointHoverBorderColor: '#32baff',
					pointHoverRadius: 4.5,
					pointHoverBorderWidth: 2,
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
						size: 12,
					},
					clip: false,
					offset: function(context) {
						const value = context.dataset.data[context.dataIndex];
						return value >= 95 ? 6 : 2;
					},
					anchor: function(context) {
						const value = context.dataset.data[context.dataIndex];
						if (value >= 95) return 'start';
						return value <= 6 ? 'end' : (value <= 47.25 ? 'start' : 'end');
					},
					align: function(context) {
						const value = context.dataset.data[context.dataIndex];
						if (value >= 95) return 'bottom';
						return value <= 6 ? 'top' : (value <= 47.25 ? 'bottom' : 'top');
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
						callback: function(value, index) {
                            const label = this.getLabelForValue(value);
                            if (label.indexOf('\n') !== -1) {
                                return label.split('\n'); 
                            }
                            return label;
                        },
						maxRotation: 0, 
                        minRotation: 0,
						autoSkip: false,
						padding: 12,
						font: {
							family: 'Pretendard',
							weight: '400',
							size: 12,
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
							size: 12,
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
					anchor: 'end',
					align: (context) => context.dataset.data[context.dataIndex] >= 60 ? 'left' : 'right',
					offset: (context) => context.dataset.data[context.dataIndex] >= 60 ? 5 : 5,
					color: (context) => context.dataset.data[context.dataIndex] >= 60 ? '#ffffff' : '#32baff',
					font: { family: 'Pretendard', weight: '700', size: 13 }
				}
			},
			layout: {
				 padding: { top:0, left:0, right: 0, bottom:-8, } 
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
						padding: 8,
						font: { family: 'Pretendard', weight: '400', size: 12 },
						color: '#7e7e7f',
					}
				},
				y: {
					grid: { display: false },
					afterFit: function(axis) {
						axis.width = axis.chart.width * 0.3;
					},
					border: { display: false },
					ticks: {
						crossAlign: 'far', 
						textAlign: 'right',
						align: 'center', 
						padding: 8,
						font: { family: 'Pretendard', weight: '400', size: 12 },
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
			responsive: false,
			maintainAspectRatio: false,
			plugins: {
				legend: { display: false, },
				datalabels: {
					anchor: 'center',
					align: 'center',
					color: '#ffffff',
					font: { family: 'Pretendard', weight: '700', size: 12 },
					formatter: (value) => value
				}
			},
			layout: {
				 padding: { top:0, left:0, right: 0, bottom:-8, } 
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
						padding: 8,
						font: { family: 'Pretendard', weight: '400', size: 12 },
						color: '#7e7e7f',
					}
				},
				y: {
					stacked: true,
					grid: { display: false },
					afterFit: function(axis) {
						axis.width = axis.chart.width * 0.3;
					},
					border: { display: false },
					ticks: {
						crossAlign: 'far', 
						textAlign: 'right',
						align: 'center', 
						padding: 8,
						font: { family: 'Pretendard', weight: '400', size: 12 },
						color: '#7e7e7f',
					}
				}
			},
		}
	});
});

// 가로 막대형 누적 차트 ver2 
const barChart3 = document.querySelectorAll('.bar_chart3 .graph');
barChart3.forEach((chartCanvas) => {
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
                    
                    y.ticks.forEach((tick, index) => {
                        const label = y.getLabelForValue(tick.value);
                        const xPos = y.width; 
                        const yPos = y.getPixelForTick(index);
                        
                        const idx = index + 1;
                        let color = '#17bfad';
                        let weight = '700';
                        
                        if (idx <= 13) {
                            color = '#32baff';
                            weight = '700';
                        } else if (idx >= 14 && idx <= 17) {
                            color = '#7e7e7f';
                            weight = '400';
                        }

                        ctx.font = `${weight} 12px Pretendard`;
                        ctx.fillStyle = color;

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
                    data: scores2,
                    backgroundColor: function(context) {
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
                    max: 50,
                    beginAtZero: true,
                    stacked: true,
                    grid: { display: true, drawTicks: false },
                    border: { display: true, color: '#d8dadd' },
                    ticks: {
                        stepSize: 10,
                        padding: 8,
                        font: { family: 'Pretendard', weight: '400', size: 12 },
                        color: '#7e7e7f'
                    }
                },
				y: {
                    stacked: true,
                    grid: { display: false },
                    afterFit: function(axis) {
                        axis.width = axis.chart.width * 0.4;
                    },
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
                        gradient.addColorStop(0, '#BC1914');
                        gradient.addColorStop(1, '#FF6863');
                    }
                    return gradient;
                },
                barThickness: 30,
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
                    font: { family: 'Pretendard', weight: '700', size: 13 },
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
						font: { family: 'Pretendard', weight: '400', size: 12 },
                    }
                },
                y: {
                    beginAtZero: true,
                    max: maxVal,
                    ticks: {
                        stepSize: stepVal,
                        padding: 8,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 12 },
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
                barThickness: 30,
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
                    font: { family: 'Pretendard', weight: '800', size: 13 },
                    formatter: (value) => value + '%'
                }
            },
            layout: {
                padding: { top: 0, left: -10, right: 0, bottom: -4 }
            },
            scales: {
                x: {
                    grid: { display: false },
                    border: { display: true, color: '#e5e8ec' },
                    ticks: {
						callback: function(value, index) {
                            const label = this.getLabelForValue(value);
                            if (label.indexOf('\n') !== -1) {
                                return label.split('\n'); 
                            }
                            return label;
                        },
                        padding: 4,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 12 },
						maxRotation: 0, 
                        minRotation: 0,
						autoSkip: false,
                    }
                },
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        stepSize: 20,
                        padding: 10,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 12 },
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
                        ctx.lineTo(centerX, y - 10);
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
                ctx.lineTo(flagX, flagTopY - 32);
                ctx.stroke();
                ctx.beginPath();
                ctx.rect(flagX, flagTopY - 32, 16, 14);
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
                    offset: (context) => context.dataset.data[0] <= 5 ? 24 : 0,
                    color: (context) => context.dataset.data[0] <= 5 ? '#4a4a4a' : '#ffffff',
                    font: { family: 'Pretendard', weight: '800', size: 12 },
                    formatter: (value) => value + '%',
					textAlign: 'right'
                }
            },
            layout: {
                padding: { top: 0, left: -10, right: 10, bottom: 1 }
            },
            scales: {
                x: {
                    stacked: true,
                    beginAtZero: true,
					max : totalScore,
                    grid: {
                        display: true,
                        color: '#e5e8ec',
                        drawTicks: false,
                        lineWidth: 1,
                        z: -1
                    },
					ticks: { 
						display: false,
						stepSize: totalScore / 10,
						autoSkip: false
					},
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
                        ctx.font = 'bold 12px Pretendard';
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'middle';
                        ctx.fillStyle = bgColor;
                        ctx.beginPath();
                        ctx.roundRect(qx, qy, 24, 24, 4);
                        ctx.fill();
                        ctx.fillStyle = txtColor;
                        ctx.fillText(txt, qx + 12, qy + 12);
                    };

                    drawQuadrant(right - 34, top + 10, '1', '#ebf9ff', '#32baff');					
                    drawQuadrant(left + 10, top + 10, '2', '#f4f5f8', '#7e7e7f');					
                    drawQuadrant(left + 10, bottom - 34, '3', '#ebfcf8', '#17bfad');
                    drawQuadrant(right - 34, bottom - 34, '4', '#f4f5f8', '#7e7e7f'); 

                    ctx.restore();
                }
            }
        ],
        data: {
            datasets: [{
                data: [
                    { x: 24, y: 20, r: 10, label: '1' },
                    { x: 21, y: 21, r: 10, label: '2' },
                    { x: 19.5, y: 22.5, r: 10, label: '3' },
                    { x: 24, y: 18, r: 10, label: '4' },
                    { x: 22, y: 19, r: 10, label: '5' },
                    { x: 18, y: 21, r: 10, label: '6' },
                    { x: 19.5, y: 20, r: 10, label: '7' },
                    { x: 15.5, y: 22.5, r: 10, label: '8' },
                    { x: 21.5, y: 16, r: 10, label: '9' },
                    { x: 16.2, y: 18, r: 10, label: '10' },
                    { x: 14.5, y: 16, r: 10, label: '11' },
                    { x: 16.5, y: 16, r: 10, label: '12' },
                    { x: 16.5, y: 14, r: 10, label: '13' },
                    { x: 18, y: 11, r: 10, label: '14' },
                    { x: 12.5, y: 13.5, r: 10, label: '15' },
                    { x: 16, y: 9, r: 10, label: '16' },
                    { x: 10, y: 13, r: 10, label: '17' },
                    { x: 7.5, y: 6.5, r: 10, label: '18' },
                    { x: 5.6, y: 8, r: 10, label: '19' }
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
                borderWidth: 0,
				clip: false,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
			layout: {
				 padding: { top:-8, left:-8, right: 0, bottom:-8, } 
			},
            scales: {
                x: {
                    min: 0, 
					max: 25,
                    ticks: { 
						stepSize: 5, 
						padding: 8,
						color: '#7e7e7f', 
						font: { family: 'Pretendard', weight: '400', size: 12 },
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
						font: { family: 'Pretendard', weight: '400', size: 12 },
					},
                    grid: { display: true, color: '#e5e8ec', drawTicks: false },
                    border: { display: false }
                }
            },
            plugins: {
                legend: { display: false },
                datalabels: {
                    color: '#ffffff',
                    font: { family: 'Pretendard', weight: '700', size: 11 },
                    formatter: (value) => value.label
                },
                tooltip: { enabled: false }
            }
        }
    });
});

// 도넛 차트 (색상 순서만 다름)
function wrapText(ctx, text, x, y, maxWidth, lineHeight) {
    const chars = text.split('');
    let line = '';
    let testY = y;

    for (let n = 0; n < chars.length; n++) {
        let testLine = line + chars[n];
        let metrics = ctx.measureText(testLine);
        if (metrics.width > maxWidth && n > 0) {
            ctx.fillText(line, x, testY);
            line = chars[n];
            testY += lineHeight;
        } else {
            line = testLine;
        }
    }
    ctx.fillText(line, x, testY);
    return testY + lineHeight; 
}
const doughnutChart = document.querySelectorAll('.doughnut_chart .graph');
doughnutChart.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]').reverse();
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]').reverse();
    const ctx = chartCanvas.getContext('2d');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: scores,
                backgroundColor: ['#32baff', '#e61f19', '#bf1b21', '#75171b', '#430c0f'],
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
                padding: { top: 40, bottom: 30, left: 70, right: 70 }
            }
        },
        plugins: [{
            afterDraw: (chart) => {
                const { ctx } = chart;
                chart.data.datasets.forEach((dataset, i) => {
                    const meta = chart.getDatasetMeta(i);
                    const items = [];

                    meta.data.forEach((datapoint, index) => {
                        if (!scores[index] || scores[index] === 0) return;

                        const view = datapoint;
                        const midpoint_angle = view.startAngle + (view.endAngle - view.startAngle) / 2;
                        const cos = Math.cos(midpoint_angle);
                        const sin = Math.sin(midpoint_angle);
                        const d = view.outerRadius;

                        const startX = view.x + cos * d;
                        const startY = view.y + sin * d;

                        const diagLength = 16;
                        const midX = startX + cos * diagLength;
                        const midY = startY + sin * diagLength;
                        const isRight = cos >= 0;

                        items.push({
                            index, startX, startY, midX, midY,
                            endY: midY, 
                            isRight, cos, sin,
                            scoreText: `${scores[index]}%`,
                            labelText: labels[index] 
                        });
                    });
					
                    const minGap = 30; 
                    ['right', 'left'].forEach(side => {
                        const sideItems = items
                            .filter(it => it.isRight === (side === 'right'))
                            .sort((a, b) => a.endY - b.endY);

                        if (sideItems.length > 0) {
                            for (let move = 0; move < 10; move++) {
                                for (let j = 1; j < sideItems.length; j++) {
                                    const prev = sideItems[j - 1];
                                    const curr = sideItems[j];
                                    if (curr.endY - prev.endY < minGap) {
                                        const overlap = minGap - (curr.endY - prev.endY);
                                        curr.endY += overlap / 2;
                                        prev.endY -= overlap / 2;
                                    }
                                }
                            }
                        }
                    });

                    items.forEach(it => {
                        const { startX, startY, midX, isRight, scoreText, labelText, endY } = it;
                        const horizLength = 10;
                        const endX = isRight ? midX + horizLength : midX - horizLength;

                        // 점 그리기
                        ctx.beginPath();
                        ctx.arc(startX, startY, 2.5, 0, Math.PI * 2);
                        ctx.fillStyle = '#231916';
                        ctx.fill();

                        // 지시선 그리기
                        ctx.beginPath();
                        ctx.moveTo(startX, startY);
                        ctx.lineTo(midX, endY); 
                        ctx.lineTo(endX, endY);
                        ctx.strokeStyle = '#231916';
                        ctx.lineWidth = 1;
                        ctx.stroke();
						
                        ctx.textAlign = isRight ? 'left' : 'right';
                        const textX = isRight ? endX + 6 : endX - 6;
						
                        ctx.font = '800 12px Pretendard';
                        ctx.fillStyle = '#231916';
                        ctx.textBaseline = 'bottom';
                        ctx.fillText(scoreText, textX, endY - 2);

                        ctx.font = '400 10px Pretendard';
						ctx.letterSpacing = '-0.1em';
                        ctx.fillStyle = '#4a4a4a';
                        ctx.textBaseline = 'top';
                        
                        const maxWidth = 100; // 한 줄 최대 너비
                        const lineHeight = 15; // 줄 간격
						
                        const lines = labelText.split('\n');
                        let currentY = endY + 2;

                        lines.forEach(lineStr => {
                            const cleanLine = lineStr.trim();
                           currentY = wrapText(ctx, lineStr.trim(), textX, currentY, maxWidth, lineHeight);
                        });
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
                padding: { top: 40, bottom: 30, left: 70, right: 70 }
            }
        },
        plugins: [{
            afterDraw: (chart) => {
                const { ctx } = chart;
                chart.data.datasets.forEach((dataset, i) => {
                    const meta = chart.getDatasetMeta(i);
                    const items = [];

                    meta.data.forEach((datapoint, index) => {
                        if (!scores[index] || scores[index] === 0) return;

                        const view = datapoint;
                        const midpoint_angle = view.startAngle + (view.endAngle - view.startAngle) / 2;
                        const cos = Math.cos(midpoint_angle);
                        const sin = Math.sin(midpoint_angle);
                        const d = view.outerRadius;

                        const startX = view.x + cos * d;
                        const startY = view.y + sin * d;

                        const diagLength = 16;
                        const midX = startX + cos * diagLength;
                        const midY = startY + sin * diagLength;
                        const isRight = cos >= 0;

                        items.push({
                            index, startX, startY, midX, midY,
                            endY: midY, 
                            isRight, cos, sin,
                            scoreText: `${scores[index]}%`,
                            labelText: labels[index] 
                        });
                    });
					
                    const minGap = 30; 
                    ['right', 'left'].forEach(side => {
                        const sideItems = items
                            .filter(it => it.isRight === (side === 'right'))
                            .sort((a, b) => a.endY - b.endY);

                        if (sideItems.length > 0) {
                            for (let move = 0; move < 10; move++) {
                                for (let j = 1; j < sideItems.length; j++) {
                                    const prev = sideItems[j - 1];
                                    const curr = sideItems[j];
                                    if (curr.endY - prev.endY < minGap) {
                                        const overlap = minGap - (curr.endY - prev.endY);
                                        curr.endY += overlap / 2;
                                        prev.endY -= overlap / 2;
                                    }
                                }
                            }
                        }
                    });

                    items.forEach(it => {
                        const { startX, startY, midX, isRight, scoreText, labelText, endY } = it;
                        const horizLength = 10;
                        const endX = isRight ? midX + horizLength : midX - horizLength;

                        // 점 그리기
                        ctx.beginPath();
                        ctx.arc(startX, startY, 2.5, 0, Math.PI * 2);
                        ctx.fillStyle = '#231916';
                        ctx.fill();

                        // 지시선 그리기
                        ctx.beginPath();
                        ctx.moveTo(startX, startY);
                        ctx.lineTo(midX, endY); 
                        ctx.lineTo(endX, endY);
                        ctx.strokeStyle = '#231916';
                        ctx.lineWidth = 1;
                        ctx.stroke();
						
                        ctx.textAlign = isRight ? 'left' : 'right';
                        const textX = isRight ? endX + 6 : endX - 6;
						
                        ctx.font = '800 12px Pretendard';
                        ctx.fillStyle = '#231916';
                        ctx.textBaseline = 'bottom';
                        ctx.fillText(scoreText, textX, endY - 2);

                        ctx.font = '400 10px Pretendard';
						ctx.letterSpacing = '-0.1em';
                        ctx.fillStyle = '#4a4a4a';
                        ctx.textBaseline = 'top';
                        
                        const maxWidth = 100; // 한 줄 최대 너비
                        const lineHeight = 15; // 줄 간격
						
                        const lines = labelText.split('\n');
                        let currentY = endY + 2;

                        lines.forEach(lineStr => {
                            const cleanLine = lineStr.trim();
                           currentY = wrapText(ctx, lineStr.trim(), textX, currentY, maxWidth, lineHeight);
                        });
                    });
                });
            }
        }]
    });
});



// 02 저저학년결과지 & AUS결과지
// 세로 막대형 차트 (그룹형 멀티)
const bar2chart1 = document.querySelectorAll('.bar2_chart1 .graph');
bar2chart1.forEach((chartCanvas) => {
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
        { start: '#282785', end: '#5353FF', label: '#5151fb' },
        { start: '#1475AD', end: '#53C5FF', label: '#32baff' },
        { start: '#BC1914', end: '#FF6863', label: '#FF6863' }
    ];

    const datasets = [0, 1, 2].map(i => ({
        data: rawScores.map(score => score[i]), 
        backgroundColor: function(context) {
            const {ctx, chartArea, scales: {x}} = context.chart;
            if (!chartArea) return null;
            const val = context.parsed.x;
            const xLeft = x.getPixelForValue(0);
            const xRight = x.getPixelForValue(val);
			
            const gradient = ctx.createLinearGradient(xLeft, 0, xRight, 0);
            gradient.addColorStop(0, colors[i].start);
            gradient.addColorStop(1, colors[i].end);
            return gradient;
        },
        barThickness: 18, 
        borderRadius: { topLeft: 0, topRight: 8, bottomLeft: 0, bottomRight: 8 }, 
        borderSkipped: false
    }));

    new Chart(barCtx, {
        type: 'bar',
        plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: datasets,
        },
        options: {
            indexAxis: 'y', 
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                datalabels: {
                    anchor: 'end',
                    align: 'right',
                    offset: 5,
                    color: function(context) {
                        return colors[context.datasetIndex].label;
                    },
                    font: { family: 'Pretendard', weight: '800', size: 12 },
                }
            },
            layout: {
                padding: { top: 0, left: 0, right: 0, bottom: -8 }
            },
            scales: {
                x: {
                    max: 100,
                    beginAtZero: true,
                    grid: { display: true, drawTicks: false },
                    border: { display: true, color: '#d8dadd' },
                    ticks: {
                        stepSize: 20,
                        padding: 8,
                        color: '#7e7e7f',
                        font: { family: 'Pretendard', size: 12 },
                        callback: (value) => value + '%'
                    }
                },
                y: {
                    grid: { display: false },
                    ticks: {
						callback: function(value, index) {
                            const label = this.getLabelForValue(value);
                            if (label.indexOf('\n') !== -1) {
                                return label.split('\n'); 
                            }
                            return label;
                        },
                    afterFit: function(axis) {
                        axis.width = axis.chart.width * 0.8;
                    },
                        padding: 4,
                        color: '#7e7e7f',
                        font: { family: 'Pretendard', size: 12 }
                    }
                }
            }
        }
    });
});

// 세로 막대형 차트 (단일)
const bar2chart2 = document.querySelectorAll('.bar2_chart2 .graph');
bar2chart2.forEach((chartCanvas) => {
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
                barThickness: 32,
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
                    font: { family: 'Pretendard', weight: '700', size: 13 },
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
						font: { family: 'Pretendard', weight: '400', size: 12 },
                    }
                },
                y: {
                    beginAtZero: true,
                    max: maxVal,
                    ticks: {
                        stepSize: stepVal,
                        padding: 8,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 12 },
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
const bar2Chart3 = document.querySelectorAll('.bar2_chart3 .graph');
bar2Chart3.forEach((chartCanvas) => {
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
                barThickness: 32,
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
                    font: { family: 'Pretendard', weight: '800', size: 13 },
                    formatter: (value) => value + '%'
                }
            },
            layout: {
                padding: { top: 0, left: -8, right: 0, bottom: -8 }
            },
            scales: {
                x: {
                    grid: { display: false },
                    border: { display: true, color: '#e5e8ec' },
                    ticks: {
                        padding: 8,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 12 },
                    }
                },
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        stepSize: 20,
                        padding: 8,
                        color: '#7e7e7f',
						font: { family: 'Pretendard', weight: '400', size: 12 },
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

// 가로 막대형 차트 
const bar2Chart4 = document.querySelectorAll('.bar2_chart4 .graph');
bar2Chart4.forEach((chartCanvas) => {
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
					font: { family: 'Pretendard', weight: '700', size: 13 }
				}
			},
			layout: {
				 padding: { top:0, left:0, right: 0, bottom:-8, } 
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
						stepSize: 20,
						padding: 8,
						font: { family: 'Pretendard', weight: '400', size: 12 },
						color: '#7e7e7f',
					}
				},
				y: {
					grid: { display: false },
					afterFit: function(axis) {
						axis.width = axis.chart.width * 0.28;
					},
					border: { display: false },
					ticks: {
						crossAlign: 'far', 
						textAlign: 'right',
						align: 'center', 
						padding: 8,
						font: { family: 'Pretendard', weight: '400', size: 12 },
						color: '#7e7e7f',
					}
				}
			},
		},
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
const scatter2Chart = document.querySelectorAll('.scatter2_chart .graph');
scatter2Chart.forEach((chartCanvas) => {
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
                        font: { family: 'Pretendard', size: 12 },
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
						font: { family: 'Pretendard', size: 12 },
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
const radar2Chart = document.querySelectorAll('.radar2_chart .graph');
radar2Chart.forEach((chartCanvas) => {
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
					pointRadius: 4,
					pointHoverRadius: 4
				},
				{
					label: '응시자',
					data: totalData,
					backgroundColor: 'rgba(230, 31, 25, 0.2082)',
					borderColor: '#e61f19',
					borderWidth: 1,
					pointBackgroundColor: '#e61f19',
					pointRadius: 4,
					pointHoverRadius: 4
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
						callback: function(label) {
							if (label.indexOf('\n') !== -1) {
								return label.split('\n');
							}
							return label;
						},
						textAlign: 'center',
						padding: 10,
						color: '#231916',
						font: { family: 'Pretendard', weight: '800', size: 13 },
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
const line2Chart = document.querySelectorAll('.line2_chart .graph');
line2Chart.forEach((chartCanvas) => {
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