<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행대장</title>

    <?php include "../script.php" ?>

</head>

<body>
		
	<style>
		/* 확인용 페이지 css */
		body { height: 100vh;  display: flex;  flex-direction: column;  align-items: center;  justify-content: center; padding: 20vh 5%;}
		.wrap { width: 100%; max-width: 800px; flex: 1; display: flex; flex-direction: column;  gap: 2rem;}
	</style>

    <div class="wrap">       
		<div class="badgebox">
			<span class="badge type1">NEW</span>
			<span class="badge type2">HOT</span>
			<span class="badge type3">BEST</span>
			<span class="badge type4">TOUR</span>
			<span class="badge type5">TICKET</span>
			<span class="badge type6">SALE</span>
			<span class="badge type7">EVENT</span>
			<span class="badge type8">EARLY</span>
		</div> 
		<div class="badgebox">
			<span class="badge type9">프로모션</span>
			<span class="badge type10">입장티켓</span>
			<span class="badge type11">당일투어</span>
			<span class="badge type12">호텔PKG</span>
			<span class="badge type13">액티비티</span>
			<span class="badge type14">바로사용</span>
			<span class="badge type15">내일부터</span>
			<span class="badge type16">단톡상품</span>
			<span class="badge type17">가족여행</span>
			<span class="badge type18">아이동반</span>
		</div>
    </div>


    <!-- JS -->
    <script src="../js/common.js"></script>


</body>

</html>
