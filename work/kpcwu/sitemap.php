<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사이트맵</title>

    <link rel="shortcut icon" href="https://work.marronde.com/src/image/favicon.ico" />
	
    <!-- CSS -->
    <link rel="stylesheet" href="https://work.marronde.com/src/css/reset.min.css">

    <!-- Font -->
    <link href="https://work.marronde.com/font/Pretendard/Pretendard.css" rel="stylesheet">

</head>

<body>

    <style>
        .wrap { 
			--color-primary: #0063db; 
			--color-title: #1676eb; 
			--color-text: #21538f; 
			--color-bg: #eff2f7; 
			--color-border: #dddddd; 
			--color-black: #000000;
		}
        .sub_titbox { width: 100%; margin: 3.75rem 0; position: relative; text-align: center;}
        .sub_titbox .sub { font-size: 1rem; letter-spacing: 1.5px;   color: var(--color-primary); margin-bottom: 5px;}
        .sub_titbox .tit { font-size: 3rem; line-height: 1.3; letter-spacing: -1px; color: var(--color-black);  font-weight: 700;  }
        .sub_inner { width: 90%; max-width: 1200px; margin: auto; position: relative;}
        .sitemap_nav { width: 100%; border-top: 5px solid var(--color-primary);  border-bottom: 5px solid var(--color-primary);  padding: 3.125rem 0; margin-bottom: 5rem;}
        .sitemap_nav > li { width: 100%;  vertical-align: top;  display: inline-block;  padding: 0 2.5rem 2.5rem;  box-sizing: border-box;  border-bottom: 1px solid var(--color-border); margin-bottom: 2.5rem}
        .sitemap_nav > li:last-child {padding-bottom: 0px; margin-bottom: 0px; border-bottom: 0px;}
        .sitemap_nav > li > .tit { font-size: 1.75rem;  color: var(--color-title);   font-weight: 600; line-height: 1.3; margin-bottom: 0.625rem;}
        .site_sub_menu { width: 100%; display: flex; flex-wrap: wrap; gap: 1rem 1.25rem;}
        .site_sub_menu > li {  width: calc((100% - 1.25rem * 1)/2); display: flex;   flex-direction: column; gap: 0.625rem;}
        .site_sub_menu.wid3 > li {width: calc((100% - 1.25rem * 2)/3)}
        .site_sub_menu.wid4 > li {width: calc((100% - 1.25rem * 3)/4)}
        .site_sub_menu > li > a { position: relative; font-size: 1.25rem;   line-height: 1.3; color: var(--color-text); display: inline-flex; align-items: flex-start; }
        .site_sub_menu > li > a::before { content: ""; width: 0.313rem;  aspect-ratio: 1 / 1; background-color: var(--color-text); border-radius: 100%;    display: block; margin: 0.5em 0.625rem 0.5em 0;}
		.sub_site_sub_menu { width: 95%; margin-left: 5%; border-left: 1px solid var(--color-text); display: flex; flex-direction: column; gap: 0.625rem;}
        .sub_site_sub_menu > li { width: 100%; display: flex; align-items: center; flex-direction: column; align-items: flex-start;  gap: 0.625rem;}
        .sub_site_sub_menu > li > a { display: inline-flex; font-size: 1rem; color: var(--color-text); margin-left: 1rem; line-height: 1.3;}
        .sub_sub_site_sub_menu { width: 95%; margin-left: 5%; border-left: 1px solid var(--color-text); display: flex;   flex-direction: column; gap: 0.625rem;}
        .sub_sub_site_sub_menu > li { width: 100%; display: flex; align-items: center;}
        .sub_sub_site_sub_menu > li > a { display: inline-flex; font-size: 1rem; color: var(--color-text); margin-left: 1rem; line-height: 1.3;}


        /* Mobile */
		@media screen and (max-width: 1080px) {    
			.wrap {min-width: unset;}
		}

        @media screen and (max-width: 599px) {
            html {font-size: 10px !important;}  

            .sitemap_nav { border-top: 3px solid var(--color-primary);border-bottom: 3px solid var(--color-primary); padding: 3rem 0;}
            .sitemap_nav > li { padding: 0 0rem 2rem;}
            .site_sub_menu.wid3 > li { width: calc((100% - 1.25rem* 1) / 2);}
            .site_sub_menu.wid4 > li { width: calc((100% - 1.25rem* 1) / 2);}
        }
    </style>


    <div class="wrap">
        <div class="sub_inner">
            <div class="sub_titbox">
                <p class="sub">
                    Sitemap
                </p>
                <p class="tit">
                    사이트맵
                </p>
            </div>
            <ul class="sitemap_nav">

                <!------------ 01 메인 ----------->
                <li><a href="index.php" class="tit">01 메인</a></li>


                <!------------ 02 소개 ----------->
                <li>
                    <p class="tit">02 소개</p>
                    <ul class="site_sub_menu wid3">
						<li><a href="company/about.php">01 플랜트건설노조는</a></li>
						<li><a href="company/status.php">02 조직현황</a></li>
						<li><a href="company/member.php">03 임원소개</a></li>
						<li>
							<a href="company/history.php">04 걸어온 길</a>
							<ul class="sub_site_sub_menu">
								<li><a href="company/history.php">01 플랜트건설노조 역사</a></li>
								<li><a href="company/history_struggle.php">02 플랜트건설노조 투쟁 역사</a></li>
								<li><a href="company/history_bargain.php">03 플랜트건설노조 중앙교섭 추진경과</a></li>
							</ul>
						</li>
						<li><a href="company/location.php">05 오시는 길</a></li>
						<li>
							<a href="company/join_info.php">06 조합가입안내</a>
							<ul class="sub_site_sub_menu">
								<li><a href="company/join_info.php">01 가입안내</a></li>
								<li><a href="company/join_online.php">02 온라인조합원 가입</a></li>
							</ul>
						</li>
						<li><a href="company/rules.php">07 규약</a></li>
					</ul>
                </li>


                <!------------ 03 소식 ----------->
                <li>
                    <p class="tit">03 소식</p>
                    <ul class="site_sub_menu">
                        <li><a href="board/list_basic.php">01 성명&보도 (갤러리 게시판)</a></li>
                        <li><a href="board/list_gallery.php">02 알림 (일반 게시판)</a></li>
                    </ul>
                </li>


                <!------------ 04 지부소식 ----------->
                <li>
                    <p class="tit">04 지부소식</p>
                    <ul class="site_sub_menu">
                        <li><a href="board/list_basic2.php">01 포항 (일반 게시판)</a></li>
                    </ul>
                </li>


                <!------------ 05 자료 ----------->
                <li>
                    <p class="tit">05 자료</p>
                    <ul class="site_sub_menu">
                        <li><a href="board/list_webzine.php">01 선전자료 성명&보도 (웹진 게시판)</a></li>
                    </ul>
                </li>


                <!------------ 06 게시판(공통) ----------->
                <li>
                    <p class="tit">06 게시판(공통)</p>
                    <ul class="site_sub_menu">
                        <li><a href="board/view.php">01 상세 </a></li>
                        <li><a href="board/write.php">02 글쓰기</a></li>
                    </ul>
                </li>

                <!------------ 07 로그인 ----------->
                <li><a href="login/login.php" class="tit">07 로그인</a></li>

            </ul>
        </div>
    </div>


</body>

</html>