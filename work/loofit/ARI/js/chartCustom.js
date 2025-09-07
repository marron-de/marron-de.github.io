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
                cutout: '72%',
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                }
            }
        });
    });
}


// 완성도 평가(E-INDEX)
initDoughnutChartsByClass('chart1_1', [16.667, 83.333], '#FFC8C3', '#FF4C4A', 1, 0.3);
initDoughnutChartsByClass('chart1_2', [33.334, 66.666], '#FFA87A', '#FF5500', 1, 0.3);
initDoughnutChartsByClass('chart1_3', [50, 50], '#FFF585', '#FCE80F', 1, 0.3);
initDoughnutChartsByClass('chart1_4', [66.666, 33.334], '#A7FAC2', '#35D154', 1, 0.35);
initDoughnutChartsByClass('chart1_5', [83.333, 16.667], '#9EA6FF', '#5F69FF', 1, 0.35);
initDoughnutChartsByClass('chart1_6', [100, 0], '#A895FF', '#773CE2', 1, 0.35);

// 역량평가
initDoughnutChartsByClass('chart2_1', [16.667, 83.333], '#FFC8C3', '#FF4C4A', 1, 0.3);
initDoughnutChartsByClass('chart2_2', [33.334, 66.666], '#FFA87A', '#FF5500', 1, 0.3);
initDoughnutChartsByClass('chart2_3', [50, 50], '#FFF585', '#FCE80F', 1, 0.3);
initDoughnutChartsByClass('chart2_4', [66.666, 33.334], '#A7FAC2', '#35D154', 1, 0.35);
initDoughnutChartsByClass('chart2_5', [83.333, 16.667], '#9EA6FF', '#5F69FF', 1, 0.35);
initDoughnutChartsByClass('chart2_6', [100, 0], '#A895FF', '#773CE2', 1, 0.35);

// 직무경험
initDoughnutChartsByClass('chart3_1', [100, 0], '#9EA6FF', '#5F69FF', 1, 0.35);
initDoughnutChartsByClass('chart3_2', [100, 0], '#FF8787', '#FF4B49', 1, 0.3);

// 항목적합도
initDoughnutChartsByClass('chart4_1', [100, 0], '#A895FF', '#773CE2', 1, 0.35);
initDoughnutChartsByClass('chart4_2', [100, 0], '#FF8787', '#FF4B49', 1, 0.3);



// 직무경험 평가
const chart5El = document.querySelector('.chart5');
let tooltipsShown = false;
if (chart5El) {
	const ctx5 = chart5El.getContext('2d');

	const gradient = ctx5.createLinearGradient(0, 0, 0, chart5El.height);
	gradient.addColorStop(0, '#7f2ed8');
	gradient.addColorStop(0.507, '#5f68ff');
	gradient.addColorStop(1, '#4ad6ff');

	const config5 = {
		type: 'bar',
		data: {
			labels: ['1번 항목', '2번 항목', '3번 항목', '4번 항목', '5번 항목', '6번 항목', '7번 항목', '8번 항목'],
			datasets: [{
				label: '직무경험 평가',
				data: [22.2, 30.2, 48.7, 66.8, 80.4, 94.1, 73.9, 44.1],
				backgroundColor: gradient,
				borderRadius: 12,
				barThickness: 64
			}]
		},
		options: {
			indexAxis: 'x',
			plugins: {
				legend: {
					display: false
				},
				tooltip: {
					enabled: false
				}
			},
			responsive: false,
			layout: {
				padding: {
					top: 0,
					left: -18,
					right: 0,
					bottom: 0,
				}
			},
			animation: {
				onComplete: function () {
					if (tooltipsShown) return; // 이미 표시했으면 실행 안함
					tooltipsShown = true;

					const wrapper = chart5El.parentElement;
					document.querySelectorAll('.chart_tooltip').forEach(d => d.remove());

					this.data.datasets[0].data.forEach((val, idx) => {
						const meta = this.getDatasetMeta(0);
						const bar = meta.data[idx];

						const tooltipDiv = document.createElement('div');
						tooltipDiv.className = 'chart_tooltip';
						tooltipDiv.textContent = val + '%';
						tooltipDiv.style.position = 'absolute';
						tooltipDiv.style.left = bar.x + 'px';
						tooltipDiv.style.top = (bar.y + 25) + 'px';
						tooltipDiv.style.transform = 'translateX(-50%)';
						tooltipDiv.style.opacity = 0;
						tooltipDiv.style.transition = 'all 0.4s ease-out';
						wrapper.appendChild(tooltipDiv);

						requestAnimationFrame(() => {
							tooltipDiv.style.opacity = 1;
							tooltipDiv.style.top = bar.y + 'px';
						});
					});
				}
			},
			scales: {
				x: {
					offset: true,
					ticks: {
						font: {
							family: 'Pretendard',
							weight: '600',
							size: 13,
						},
						color: '#000000'
					},
					grid: {
						display: false
					}
				},
				y: {
					min: 0,
					max: 100,
					ticks: {
						stepSize: 20,
						padding: 18,
						font: {
							family: 'Pretendard',
							weight: '400',
							size: 13,
							color: '#747983',
						},
						callback: function (value) {
							const labels = ['평가미달', '미흡', '보통', '양호', '우수', '최우수'];
							return labels[value / 20];
						}
					},
					border: {
						display: false,
					},
				},
			},
		},
	};

	new Chart(ctx5, config5);
}


// 항목적합성
initDoughnutChartsByClass('chart6_1', [100, 0], '#9ECCFF', '#54A2FF', 1, 0.35);
initDoughnutChartsByClass('chart6_2', [100, 0], '#FF8787', '#FF4B49', 1, 0.3);

// 내용적합성
initDoughnutChartsByClass('chart7_1', [100, 0], '#9EA6FF', '#5F69FF', 1, 0.35);
initDoughnutChartsByClass('chart7_2', [100, 0], '#FF8787', '#FF4B49', 1, 0.3);

// 표절검사
initDoughnutChartsByClass('chart8_1', [16.667, 83.333], '#FFC8C3', '#FF4C4A', 1, 0.3);
initDoughnutChartsByClass('chart8_2', [33.334, 66.666], '#FFA87A', '#FF5500', 1, 0.3);
initDoughnutChartsByClass('chart8_3', [50, 50], '#FFF585', '#FCE80F', 1, 0.3);
initDoughnutChartsByClass('chart8_4', [66.666, 33.334], '#A7FAC2', '#35D154', 1, 0.35);
initDoughnutChartsByClass('chart8_5', [83.333, 16.667], '#9EA6FF', '#5F69FF', 1, 0.35);
initDoughnutChartsByClass('chart8_6', [100, 0], '#FF8787', '#FF4B49', 1, 0.35);

// 직무적합도
initDoughnutChartsByClass('chart9_1', [16.667, 83.333], '#FFC8C3', '#FF4C4A', 1, 0.3);
initDoughnutChartsByClass('chart9_2', [33.334, 66.666], '#FFA87A', '#FF5500', 1, 0.3);
initDoughnutChartsByClass('chart9_3', [50, 50], '#FFF585', '#FCE80F', 1, 0.3);
initDoughnutChartsByClass('chart9_4', [66.666, 33.334], '#A7FAC2', '#35D154', 1, 0.35);
initDoughnutChartsByClass('chart9_5', [83.333, 16.667], '#9EA6FF', '#5F69FF', 1, 0.35);
initDoughnutChartsByClass('chart9_6', [100, 0], '#A895FF', '#773CE2', 1, 0.35);
initDoughnutChartsByClass('chart9_7', [100, 0], '#FF8787', '#FF4B49', 1, 0.35);


// 성향분석
const chart10El = document.querySelector('.chart10');
if (chart10El) {
	const ctx10 = chart10El.getContext('2d');
	new Chart(ctx10, {
		type: 'radar',
		data: {
			labels: ['개인성향', '조직역량', '개인역량'],
			datasets: [
				{
					label: '평균',
					data: [85, 50, 85],
					backgroundColor: 'rgba(48, 74, 255, 0.39)',
					borderColor: '#304AFF',
					borderWidth: 1,
					pointBackgroundColor: '#304AFF',
					pointRadius: 6,
					pointHoverRadius: 6
				},
				{
					label: '본인',
					data: [40, 85, 60],
					backgroundColor: 'rgba(118, 63, 227, 0.4)',
					borderColor: '#7F2ED8',
					borderWidth: 1,
					pointBackgroundColor: '#7F2ED8',
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
					ticks: {
						stepSize: 25,
						display: false
					},
					grid: {
						color: '#d8dadd'
					},
					angleLines: {
						color: '#d8dadd'
					},
					pointLabels: {
						padding: 12,
						color: '#000',
						font: {
							size: 16,
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
}
