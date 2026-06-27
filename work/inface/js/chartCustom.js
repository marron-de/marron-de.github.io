
// 세로 막대형 차트1 
const barChart1 = document.querySelectorAll('.bar_chart1 .graph');
barChart1.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]');
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]');
    const maxVal = parseFloat(chartCanvas.dataset.max) || 6;
    const stepVal = parseFloat(chartCanvas.dataset.step) || 1;
    const barCtx = chartCanvas.getContext('2d');

	const showTooltip = chartCanvas.dataset.tooltip !== "false" && chartCanvas.dataset.tooltip !== "fasle";

    new Chart(barCtx, {
        type: 'bar',
		plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: [{
                data: scores,
				backgroundColor: function(context) {
					const index = context.dataIndex;
					const value = context.dataset.data[index];
					
					if (value >= 5) return '#4F71FF'; 
					if (value >= 4) return '#4F71FF';
					if (value >= 3) return '#01D5A6'; 
					if (value >= 2) return '#01D5A6'; 
					if (value >= 1) return '#FF5656'; 
					if (value >= 0) return '#FF5656'; 
					return '#E5E7EB';                 
				},
                barThickness: 56,
                borderRadius: { topLeft: 4, topRight: 4, bottomLeft: 0, bottomRight: 0 },
                borderSkipped: false
            }]
        },options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },		
                tooltip: { enabled: false },
                datalabels: {
                    display: showTooltip,
                    anchor: 'end',
                    align: 'top',
                    offset: 7,
                    backgroundColor: '#5C626A',
                    color: '#FFFFFF',
                    borderRadius: 4,
                    padding: { top: 3, bottom: 3, left: 12, right: 12 },
                    font: { family: 'Pretendard', weight: '700', size: 16 },
                    formatter: function(value, context) {
                        return context.chart.data.labels[context.dataIndex];
                    }
                }
            },
            layout: {
                padding: { top: 0, left: 0, right: 0, bottom: -8 }
            },
            scales: {
                x: {
                    grid: { display: false },
                    border: { display: false },
                    ticks: { display: false }
                },
                y: {
                    beginAtZero: true,
                    max: maxVal,
                    grid: { display: false }, 
                    border: { display: false }, 
                    ticks: { display: false } 
                }
            }
        }
    });
});


// 세로 막대형 차트2 
const barChart2 = document.querySelectorAll('.bar_chart2 .graph');
barChart2.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]');
    const scores = JSON.parse(chartCanvas.dataset.scores || '[]');
    const barCtx = chartCanvas.getContext('2d');
    const bgColors = chartCanvas.dataset.bg || '#4F71FF';
    const textColor = chartCanvas.dataset.text;
    
    const hasBad = chartCanvas.dataset.bad === "true";
    const hasGood = chartCanvas.dataset.good === "true";

    new Chart(barCtx, {
        type: 'bar',
        plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: [{
                data: scores,
                backgroundColor: [bgColors],
				categoryPercentage: 1.0,
                barPercentage: 1.0,
                borderRadius: { topLeft: 4, topRight: 4, bottomLeft: 0, bottomRight: 0 },
                borderSkipped: false
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            animation: {
                onComplete: function(animation) {
                    const chart = animation.chart;
                    const container = chart.canvas.parentNode;

                    if (chart.hasEmoji) return;
                    chart.hasEmoji = true;

                    const placeEmoji = (imgSrc) => {
                        const barMeta = chart.getDatasetMeta(0).data[0];
                        if (!barMeta) return;

                        const canvasRect = chart.canvas.getBoundingClientRect();
                        const containerRect = container.getBoundingClientRect();

                        const x = barMeta.x + (canvasRect.left - containerRect.left);
                        const y = barMeta.y + (canvasRect.top - containerRect.top);

                        const img = document.createElement('img');
                        img.src = imgSrc;
                        img.className = 'img chart_emoji';
                        img.style.position = 'absolute';
                        img.style.width = '32px';  
                        img.style.height = '32px';
                        img.style.left = `${x}px`;
                        img.style.top = `${y + 2}px`; 
                        img.style.transform = 'translate(-50%, -100%)';
                        img.style.opacity = '0';
                        img.style.transition = 'opacity 0.4s ease-out, top 0.4s ease-out';
                        img.style.pointerEvents = 'none';
                        img.style.zIndex = '10';

                        container.appendChild(img);

                        setTimeout(() => {
                            img.style.opacity = '1';
                            img.style.top = `${y - 8}px`; 
                        }, 50);
                    };

                    if (hasBad) placeEmoji('img/emoji_icon1.png');
                    if (hasGood) placeEmoji('img/emoji_icon5.png');
                }
            },
            plugins: {
                legend: { display: false },
                tooltip: { enabled: false },
                datalabels: {
					display: !!textColor,
                    anchor: 'end',
                    align: 'start',
                    offset: 8,
                    color: textColor,
                    font: { family: 'Pretendard', weight: '500', size: 14 },
                    formatter: (value) => value
                }
            },
            layout: {
                padding: { top: 0, left: -6, right: 0, bottom: -8 }
            },
            scales: {
                x: {
                    grid: { display: false },
                    border: { display: false },
                    ticks: { display: false }
                },
                y: {
                    beginAtZero: true,
                    max: 100,
                    grid: { display: false }, 
                    border: { display: false }, 
                    ticks: { display: false } 
                }
            }
        }
    });
});


// 가로 막대형 차트3
const barChart3 = document.querySelectorAll('.bar_chart3 .graph');
barChart3.forEach((chartCanvas) => {
    const labels = JSON.parse(chartCanvas.dataset.labels || '[]');    
    const myScore = parseFloat(chartCanvas.dataset.my) || 0;
    const avgScore = parseFloat(chartCanvas.dataset.avg) || 0;    
    const barCtx = chartCanvas.getContext('2d');

	const showTooltip = chartCanvas.dataset.tooltip !== "false" && chartCanvas.dataset.tooltip !== "fasle";

    new Chart(barCtx, {
        type: 'bar',
        plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: [
                {
                    label: '평균',
                    data: [avgScore],
                    backgroundColor: '#01D5A6',
                   categoryPercentage: 1.0,
                    barPercentage: 0.88,
                    borderRadius: { topLeft: 0, topRight: 4, bottomLeft: 0, bottomRight: 4 },
                    borderSkipped: false,
                    datalabels: { display: false } 
                },
                {
                    label: '본인',
                    data: [myScore],
                    backgroundColor: '#4F71FF',
                    categoryPercentage: 1.0,
                    barPercentage: 0.88,
                    borderRadius: { topLeft: 0, topRight: 4, bottomLeft: 0, bottomRight: 4 },
                    borderSkipped: false,
                    datalabels: {
						display: function(context) {
                            return showTooltip && context.datasetIndex === 1;
                        },
                        anchor: 'end',
                        align: 'right',
                        offset: 8,
                        backgroundColor: '#5C626A',
                        color: '#FFFFFF',
                        borderRadius: 4,
                        padding: { top: 2, bottom: 2, left: 6, right: 6 },
                        font: { family: 'Pretendard', weight: '700', size: 12 },
                        formatter: function() {
                            return myScore >= avgScore ? '우수' : '부족';
                        }
                    }
                }
            ]
        },
        options: {
            indexAxis: 'y', 
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: { enabled: false }
            },
            layout: {
                padding: { top: -8, left: -8, right: 48, bottom: -8 }
            },
            scales: {
                x: {
                    beginAtZero: true,
                    max: 100, 
                    grid: { display: false },
                    border: { display: false },
                    ticks: { display: false }
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


// 방사형 차트1
const radarChart1 = document.querySelectorAll('.radar_chart1 .graph');
radarChart1.forEach((chartCanvas) => {
	const goodData = JSON.parse(chartCanvas.dataset.good || '[]');
    const badData = JSON.parse(chartCanvas.dataset.bad || '[]');	
	const radarCtx = chartCanvas.getContext('2d');

	new Chart(radarCtx, {
		type: 'radar',
		data: {
			labels: ['개인성향', '조직역량', '개인역량'],
			datasets: [
				{
					label: '우수 역량',
					data: goodData,
					backgroundColor: 'rgba(76, 113, 288, 0.3)',
					borderColor: '#4F71FF',
					borderWidth: 1,
					pointBackgroundColor: '#4F71FF',
					pointRadius: 6,
					pointHoverRadius: 6
				},
				{
					label: '부족 역량',
					data: badData,
					backgroundColor: 'rgba(119, 65, 288, 0.3)',
					borderColor: '#7741FF',
					borderWidth: 1,
					pointBackgroundColor: '#7741FF',
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


// 방사형 차트2
const radarChart2 = document.querySelectorAll('.radar_chart2 .graph');
radarChart2.forEach((chartCanvas) => {
    const mydData = JSON.parse(chartCanvas.dataset.my || '[]');
    const avg1Data = JSON.parse(chartCanvas.dataset.avg1 || '[]');  
    const avg2Data = JSON.parse(chartCanvas.dataset.avg2 || '[]');  
    const radarCtx = chartCanvas.getContext('2d');

    new Chart(radarCtx, {
        type: 'radar',
        data: {
            labels: ['계획', '문제해결', '인지지각', '멀티태스킹', '판단', '추론'],
            datasets: [
                {
                    label: '본인',
                    data: mydData,
                    backgroundColor: 'rgba(79, 113, 255, 0.3)',
                    borderColor: '#4F71FF',
                    borderWidth: 1,
                    pointBackgroundColor: '#4F71FF',
                    pointRadius: 7,
                    pointHoverRadius: 7,
                },
                {
                    label: '전체평균',
                    data: avg1Data,
                    backgroundColor: 'rgba(0, 171, 255, 0.3)',
                    borderColor: '#00ABFF',
                    borderWidth: 1,
                    pointBackgroundColor: '#00ABFF',
                    pointRadius: 7,
                    pointHoverRadius: 7,
                },
                {
                    label: 'avg2Data',
                    data: avg2Data, 
                    backgroundColor: 'rgba(1, 213, 166, 0.3)',
                    borderColor: '#01D5A6',
                    borderWidth: 1,
                    pointBackgroundColor: '#01D5A6',
                    pointRadius: 7,
                    pointHoverRadius: 7,
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
                    min: 0,
                    max: 100,
                    ticks: { stepSize: 25, display: false },
                    grid: { color: '#D9D9D9' },
                    angleLines: { color: '#D9D9D9' },
                    pointLabels: { 
						padding: 12,
                        color: '#00050B', 
                        font: {
                            family: 'Pretendard',
                            size: 16,
                            weight: '700'
                        }
                    }
                }
            }
        }
    });
});


// 방사형 차트3
const radarChart3 = document.querySelectorAll('.radar_chart3 .graph');
radarChart3.forEach((chartCanvas) => {
    const mydData = JSON.parse(chartCanvas.dataset.my || '[]');
    const avg1Data = JSON.parse(chartCanvas.dataset.avg1 || '[]');  
    const avg2Data = JSON.parse(chartCanvas.dataset.avg2 || '[]');  
    const radarCtx = chartCanvas.getContext('2d');

    new Chart(radarCtx, {
        type: 'radar',
        data: {
            labels: ['긍정단어', '복합단어', '중립단어', '부정단어'],
            datasets: [
                {
                    label: '본인',
                    data: mydData,
                    backgroundColor: 'rgba(79, 113, 255, 0.3)',
                    borderColor: '#4F71FF',
                    borderWidth: 1,
                    pointBackgroundColor: '#4F71FF',
                    pointRadius: 7,
                    pointHoverRadius: 7,
                },
                {
                    label: '전체평균',
                    data: avg1Data,
                    backgroundColor: 'rgba(0, 171, 255, 0.3)',
                    borderColor: '#00ABFF',
                    borderWidth: 1,
                    pointBackgroundColor: '#00ABFF',
                    pointRadius: 7,
                    pointHoverRadius: 7,
                },
                {
                    label: 'avg2Data',
                    data: avg2Data, 
                    backgroundColor: 'rgba(1, 213, 166, 0.3)',
                    borderColor: '#01D5A6',
                    borderWidth: 1,
                    pointBackgroundColor: '#01D5A6',
                    pointRadius: 7,
                    pointHoverRadius: 7,
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
                    min: 0,
                    max: 100,
                    ticks: { stepSize: 25, display: false },
                    grid: { color: '#D9D9D9' },
                    angleLines: { color: '#D9D9D9' },
                    pointLabels: { 
						padding: 12,
                        color: '#00050B', 
                        font: {
                            family: 'Pretendard',
                            size: 16,
                            weight: '700'
                        }
                    }
                }
            }
        }
    });
});


// 라인 차트1
const lineChart1 = document.querySelectorAll('.line_chart1 .graph');
lineChart1.forEach((chartCanvas) => {
    const lineCtx = chartCanvas.getContext('2d');
    const myData = JSON.parse(chartCanvas.getAttribute('data-my') || '[]');
    const avgData = JSON.parse(chartCanvas.getAttribute('data-avg') || '[]');

    const tailAvg = new Image();
    const tailMy = new Image();
    
    let loadedCount = 0;
    function initChart() {
        loadedCount++;
        if (loadedCount === 2) {
            renderLineChart();
        }
    }
    tailAvg.onload = initChart;
    tailMy.onload = initChart;
    
    tailAvg.src = 'img/tooltip_minitail.png'; 
    tailMy.src = 'img/tooltip_minitail3.png';  
    const paddingBufferX = 3;
    const paddingBufferY = 7;  

    function renderLineChart() {
        new Chart(lineCtx, {
            type: 'line',
            plugins: [
                ChartDataLabels,
                {
                    id: 'customLineTooltipTail',
                    afterDatasetsDraw: (chart) => {
                        const { ctx, scales: { x, y } } = chart;
                        if (myData.length > 0) {
                            [myData[0], myData[myData.length - 1]].forEach((pt) => {
                                const pX = x.getPixelForValue(pt.x);
                                const pY = y.getPixelForValue(pt.y);
                                ctx.drawImage(tailMy, pX - 8, pY - 22, 16, 8);
                            });
                        }

                        if (avgData.length > 0) {
                            const pX = x.getPixelForValue(avgData[0].x);
                            const pY = y.getPixelForValue(avgData[0].y);
                            ctx.drawImage(tailAvg, pX - 8, pY - 22, 16, 8);
                        }
                    }
                }
            ],
            data: {
                datasets: [
                    {
                        label: '내 위치',
                        data: myData,
                        borderColor: '#4F71FF',
                        borderWidth: 2,
                        backgroundColor: 'transparent',
                        segment: {
                            borderColor: ctx => ctx.p0.skip || ctx.p1.skip ? undefined : '#4F71FF',
                        },
                        pointBackgroundColor: '#728DFF',
                        pointBorderColor: '#AEBEFF',
                        pointBorderWidth: 3,
                        pointRadius: (context) => {
                            const idx = context.dataIndex;
                            return (idx === 0 || idx === context.dataset.data.length - 1) ? 6 : 0;
                        },
                        tension: 0 
                    },
                    {
                        label: '응시자 평균',
                        data: avgData,
                        borderColor: '#5C626A',
                        borderWidth: 2.4,
                        backgroundColor: 'transparent',
                        borderDash: [4.5, 5], 
                        backgroundColor: 'transparent',
                        pointBackgroundColor: '#5C626A',
                        pointBorderColor: '#9ca1aa',
                        pointBorderWidth: 3,
                        pointRadius: (context) => {
                            return context.dataIndex === 0 ? 5 : 0;
                        },
                        tension: 0
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: { duration: 0,},
                layout: {
                    padding: { top: 32, left: 0, right: 0, bottom: 10 }
                },
                scales: {
                    x: {
                        type: 'linear', 
                        min: 0 - paddingBufferX,
                        max: 100 + paddingBufferX,
                        display: false
                    },
                    y: {
                        min: 0 - paddingBufferY,
                        max: 100 + paddingBufferY,
                        display: false
                    }
                },
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false },
                    datalabels: {
                        clip: false,
                        align: 'top',
                        anchor: 'end',
                        offset: 14,
                        borderRadius: 4,
                        padding: { top: 4, bottom: 4, left: 6, right: 6 },
                        font: { family: 'Pretendard', weight: '700', size: 13 },
                        color: '#ffffff',
                        backgroundColor: (context) => {
                            return context.datasetIndex === 0 ? '#728DFF' : '#5C626A';
                        },
                        display: (context) => {
                            const idx = context.dataIndex;
                            const total = context.dataset.data.length;
                            if (context.datasetIndex === 0) {
                                return (idx === 0 || idx === total - 1);
                            }
                            return idx === 0;
                        },
                        formatter: (value, context) => {
                            return context.dataset.label;
                        }
                    }
                }
            }
        });
    }
});


// 도넛 차트1
const doughnutChart1 = document.querySelectorAll('.doughnut_chart1 .graph');
doughnutChart1.forEach((chartCanvas) => {
    const label = chartCanvas.dataset.label || '';
    const score = parseInt(chartCanvas.dataset.score || '0', 10);
    const rest = 100 - score;
    const ctx = chartCanvas.getContext('2d');

    new Chart(ctx, {
        type: 'doughnut',
        plugins: [{
            id: 'gradientPlugin',
           	afterDatasetsDraw(chart) {
				const { ctx, chartArea } = chart;
				if (!chartArea) return;

				const meta = chart.getDatasetMeta(0);
				if (!meta.data || !meta.data[0]) return;

				if (score > 50) {
					const gradient = ctx.createLinearGradient(chartArea.left, chartArea.bottom, chartArea.right, chartArea.top);
					gradient.addColorStop(0, '#7741FF');
					gradient.addColorStop(0.5, '#4F71FF');
					gradient.addColorStop(1, '#00ABFF');
					meta.data[0].options.backgroundColor = gradient;
				} else {
					const centerX = (chartArea.left + chartArea.right) / 2;
					const centerY = (chartArea.top + chartArea.bottom) / 2;
					const radius = (chartArea.right - chartArea.left) / 2;

					const startX = centerX;
					const startY = centerY - radius;

					const angle = (score / 100) * (2 * Math.PI) - (Math.PI / 2);
					const endX = centerX + radius * Math.cos(angle);
					const endY = centerY + radius * Math.sin(angle);

					const gradient = ctx.createLinearGradient(startX, startY, endX, endY);
					gradient.addColorStop(0, '#FF7878');
					gradient.addColorStop(1, '#4F71FF');
					meta.data[0].options.backgroundColor = gradient;
				}
			}
        }],
        data: {
            labels: [label, '남은지표'],
            datasets: [{
                data: [score, rest],
                backgroundColor: ['#4F71FF', '#E8E8E8'],
                borderWidth: 0,
                borderRadius: function(context) {
                    if (context.dataIndex === 0) {
                        return {
                            outerStart: 100,
                            innerStart: 100,
                            outerEnd: 100,
                            innerEnd: 100
                        };
                    }
                    return 0;
                }
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            cutout: '78%',
            rotation: 0,
            circumference: 360,
			hover: { mode: null },
            plugins: {
                legend: { display: false },
                tooltip: { enabled: false },
                datalabels: { display: false }
            }
        }
    });
});

// 도넛 차트2
const doughnutChart2 = document.querySelectorAll('.doughnut_chart2 .graph');
doughnutChart2.forEach((chartCanvas) => {
    const label = chartCanvas.dataset.label || '';
    const score = parseInt(chartCanvas.dataset.score || '0', 10);
    const rest = 100 - score;
    const ctx = chartCanvas.getContext('2d');

    new Chart(ctx, {
        type: 'doughnut',
        plugins: [{
            id: 'gradientPlugin',
           	afterDatasetsDraw(chart) {
				const { ctx, chartArea } = chart;
				if (!chartArea) return;

				const meta = chart.getDatasetMeta(0);
				if (!meta.data || !meta.data[0]) return;

				if (score > 50) {
					const gradient = ctx.createLinearGradient(chartArea.left, chartArea.bottom, chartArea.right, chartArea.top);
					gradient.addColorStop(0, '#009CE8');
					gradient.addColorStop(1, '#01D5A6');
					meta.data[0].options.backgroundColor = gradient;
				} else {
					const centerX = (chartArea.left + chartArea.right) / 2;
					const centerY = (chartArea.top + chartArea.bottom) / 2;
					const radius = (chartArea.right - chartArea.left) / 2;

					const startX = centerX;
					const startY = centerY - radius;

					const angle = (score / 100) * (2 * Math.PI) - (Math.PI / 2);
					const endX = centerX + radius * Math.cos(angle);
					const endY = centerY + radius * Math.sin(angle);

					const gradient = ctx.createLinearGradient(startX, startY, endX, endY);
					gradient.addColorStop(0, '#FF7878');
					gradient.addColorStop(1, '#4F71FF');
					meta.data[0].options.backgroundColor = gradient;
				}
			}
        }],
        data: {
            labels: [label, '남은지표'],
            datasets: [{
                data: [score, rest],
                backgroundColor: ['#4F71FF', '#E8E8E8'],
                borderWidth: 0,
                borderRadius: function(context) {
                    if (context.dataIndex === 0) {
                        return {
                            outerStart: 100,
                            innerStart: 100,
                            outerEnd: 100,
                            innerEnd: 100
                        };
                    }
                    return 0;
                }
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            cutout: '78%',
            rotation: 0,
            circumference: 360,
			hover: { mode: null },
            plugins: {
                legend: { display: false },
                tooltip: { enabled: false },
                datalabels: { display: false }
            }
        }
    });
});


// 버블 차트
const bubbleChart1 = document.querySelectorAll('.bubble_chart1 .graph');
bubbleChart1.forEach((chartCanvas) => {
    const bubbleCtx = chartCanvas.getContext('2d');

    const avgData = JSON.parse(chartCanvas.getAttribute('data-avg'));
    const myData = JSON.parse(chartCanvas.getAttribute('data-my'));

    const tailAvg = new Image();
    const tailMy = new Image();
    
    let loadedCount = 0;
    function initChart() {
        loadedCount++;
        if (loadedCount === 2) {
            renderBubbleChart();
        }
    }
    tailAvg.onload = initChart;
    tailMy.onload = initChart;
    
    tailAvg.src = 'img/tooltip_minitail2.png';
    tailMy.src = 'img/tooltip_minitail3.png';

    const paddingBuffer = 0.65; 
    const calculatedMin = 0 - paddingBuffer;
    const calculatedMax = 10 + paddingBuffer;

    function renderBubbleChart() {
        chartCanvas.style.width = '510px';
        chartCanvas.style.height = '280px';
        chartCanvas.width = 510;
        chartCanvas.height = 280;

        new Chart(bubbleCtx, {
            type: 'line',
            plugins: [
                ChartDataLabels,
                {
                    id: 'customTooltipTail',
                    afterDatasetsDraw: (chart) => {
                        const { ctx, scales: { x, y } } = chart;
                        
                        const avgX = x.getPixelForValue(avgData.x);
                        const avgY = y.getPixelForValue(avgData.y);
                        ctx.drawImage(tailAvg, avgX - 8, avgY - 24, 16, 8);

                        const myX = x.getPixelForValue(myData.x);
                        const myY = y.getPixelForValue(myData.y);
                        ctx.drawImage(tailMy, myX - 8, myY - 24, 16, 8);
                    }
                }
            ],
            data: {
                datasets: [
                    {
                        label: '동일직무 응시자 평균',
                        data: [avgData],
                        showLine: false,
                        borderColor: 'transparent',
                        backgroundColor: 'transparent',
                        pointBackgroundColor: '#9CA1AA', 
                        pointBorderColor: '#D9D9D9',
                        pointBorderWidth: 5,
                        pointRadius: 7, 
                        pointHoverRadius: 7
                    },
                    {
                        label: '내 위치',
                        data: [myData],
                        showLine: false,
                        borderColor: 'transparent',
                        backgroundColor: 'transparent',
                        pointBackgroundColor: '#728DFF', 
                        pointBorderColor: '#AEBEFF',
                        pointBorderWidth: 5,
                        pointRadius: 7, 
                        pointHoverRadius: 7
                    }
                ]
            },
            options: {
                responsive: false,
                maintainAspectRatio: true,
                aspectRatio: 510 / 280, 
                resizeDelay: 999999, 
                animation: { duration: 0},
                layout: {
                     padding: { top: 32, left: 32, right: 32, bottom: 32 }
                },
                scales: {
                    x: {
                        type: 'linear',
                        min: calculatedMin, 
                        max: calculatedMax, 
                        display: false 
                    },
                    y: {
                        type: 'linear',
                        min: calculatedMin, 
                        max: calculatedMax, 
                        display: false 
                    }
                },
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false },
                    datalabels: {
                        clip: false,
                        align: 'top',
                        anchor: 'end',
                        offset: 14,
                        borderRadius: 4,
                        padding: { top: 4, bottom: 4, left: 6, right: 6 },
                        font: { family: 'Pretendard', weight: '700', size: 13 },
                        color: '#ffffff',
                        backgroundColor: function(context) {
                            return context.datasetIndex === 1 ? '#728DFF' : '#9CA1AA';
                        },
                        formatter: (value, context) => {
                            return context.dataset.label;
                        }
                    }
                }
            }
        });
    }
});