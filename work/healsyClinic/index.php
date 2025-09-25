<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Healsy Clinic</title>

	<?php include "script.php" ?>

	<!-- fullpage.js -->
	<link rel="stylesheet" href="css/fullpage.css">
	<script src="js/fullpage.js"></script>

</head>

<body>


	<div class="wrap main_wrap">

		<!-- header -->
		<header class="header white" id="header">
			<div class="inner h_inner">
				<div class="h_logo">
					<a href="index.php">
						<img src="img/logo_w.png" alt="" class="logo logo_w" />
						<img src="img/logo_b.png" alt="" class="logo logo_b" />
					</a>
				</div>
				<div class="h_navbox">
					<div class="h_side">
						<a href="" class="side_btn">Appointments</a>
					</div>
				</div>
				<button type="button" class="menu_open"></button>
			</div>
		</header>

		<?php include "navbox.php" ?>

		<!-- container -->
		<div id="fullpage" class="container">
			<section class="section main_section ms1" id="section0">
				<div class="inner full">
					<div class="txtbox move" data-aos="fade-left" data-aos-delay="1000">
						<p class="tit">Tailored Orthotic Solutions</p>
						<p class="tit2">for Everyday Wellness</p>
						<p class="desc">
							Step into a Healthier Life Personalised Foot Care, Right Where You Are
						</p>
					</div>
				</div>
			</section>

			<section class="section main_section ms2" id="section1">
				<div class="inner">
					
				</div>
			</section>

			<section class="section main_section ms3" id="section2">
				<div class="inner">
					
				</div>
			</section>

			<section class="section main_section ms4" id="section3">
				<div class="swiper ms4_swiper">
					<div class="swiper-wrapper">

						<div class="swiper-slide main_section">
							<div class="swiper ms4_swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">

									</div>
								</div>
								<div class="swiper-button-box swiper_btns">
									<div class="swiper-button-prev prev_btn"></div>
									<span class="button_bar"></span>
									<div class="swiper-button-next next_btn"></div>
								</div>
								<div class="swiper-scrollbar scrollbar"></div>
							</div>
						</div>

						<div class="swiper-slide main_section">
							<div class="swiper ms4_swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">

									</div>
								</div>
								<div class="swiper-button-box swiper_btns">
									<div class="swiper-button-prev prev_btn"></div>
									<span class="button_bar"></span>
									<div class="swiper-button-next next_btn"></div>
								</div>
								<div class="swiper-scrollbar scrollbar"></div>
							</div>
						</div>

						<div class="swiper-slide main_section">
							<div class="swiper ms4_swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="section main_section ms5" id="section4">
				<div class="inner">
					
				</div>
			</section>

			<section class="section fp-auto-height" id="section5">
				<?php include "footer.php" ?>
			</section>

		</div>

	</div>



	<!-- JS -->
	<script src="js/common.js"></script>
	
	<!-- fullpage.js -->
	<script>
		const myFullpage = new fullpage('#fullpage', {
			licenseKey: 'F6F9DF86-F3194384-A1EECDC5-77D3E6B1',

			onLeave: (origin, destination, direction) => {
				origin.item.querySelectorAll('.move').forEach(item => {
					item.classList.remove('aos-animate');
				});
			},

			afterLoad: function (origin, destination, direction) {
				destination.item.querySelectorAll('.move').forEach(item => {
					void item.offsetWidth;
					item.classList.add('aos-animate');
				});

				if ([0].includes(destination.index)) {
					$("#header").addClass("white");
				}

				if ([1, 2, 3, 4, 5].includes(destination.index)) {
					$("#header").removeClass("white");
				}
			},
		});

		$(document).on('click', '.top_btn', () => {
			fullpage_api.moveTo(1);
		});
	</script>

	<!-- mian.js -->
	<script>
		var mySwiper1 = new Swiper('.swiper-container.ms1', {
			effect: 'fade',
			speed: 500,
			allowTouchMove: false,
			mousewheel: true,
			pagination: {
				el: '.swiper-pagination.ms1_pag',
				clickable: false,
			},

			on: {
				slideChangeTransitionStart: function () {
					$('.m1 .move').removeClass('animated').removeClass("fadeInUp");
				},

				slideChangeTransitionEnd: function () {
					$('.m1 .move').addClass('animated').addClass("fadeInUp");
				},
			},
		})

		mySwiper1.on('slideChange', function () {
			if (mySwiper1.realIndex == 0 || mySwiper1.realIndex == 1) {
				fullpage_api.setAllowScrolling(false);
			}

			if (mySwiper1.realIndex == 2 && event.deltaY > 0) {
				setTimeout(function () {
					fullpage_api.setAllowScrolling(true);
				}, 500)
			}
		});

		var text = ["신제품개발·제품개선", "분쇄가공(분말·분태·과립)", "볶음·퍼핑·건조 가공", "살균·미생물 제어"]

		var mySwiper2 = new Swiper('.swiper-container.ms2', {
			effect: 'fade',
			speed: 500,
			allowTouchMove: false,
			mousewheel: true,
			pagination: {
				el: '.swiper-pagination.ms2_pag',
				clickable: false,
				renderBullet: function (index, className) {
					return '<span class="' + className + '"><span>' + (text[index]) + '</span></span>';
				},

			},
		})

		mySwiper2.on('slideChange', function () {
			if (mySwiper2.realIndex == 0) {
				fullpage_api.setAllowScrolling(false);
				if (event.deltaY < 0) {
					setTimeout(function () {
						fullpage_api.setAllowScrolling(true);
					}, 500)
				}
			}

			if (mySwiper2.realIndex == 1 || mySwiper2.realIndex == 2) {
				fullpage_api.setAllowScrolling(false);
			}

			if (mySwiper2.realIndex == 3 && event.deltaY > 0) {
				setTimeout(function () {
					fullpage_api.setAllowScrolling(true);
				}, 500)
			}
		});

		var mySwiper3 = new Swiper('.swiper-container.ms3', {
			slidesPerView: 1,
			speed: 500,

			direction: 'horizontal',
			loop: true,

			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},

			navigation: {
				nextEl: '.swiper-button-next.ms3_next',
				prevEl: '.swiper-button-prev.ms3_prev',
			},

			breakpoints: {
				900: {
					slidesPerView: 1.8,
				}
			}

		})
	</script>




</body>

</html>