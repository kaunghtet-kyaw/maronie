<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>「KAIGO」 は優しさや思いやりの別名 的なメッセージを</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/style.css">
    
</head>
<body>

	<!-- Header Section -->
	<?php include 'layout/header.php'; ?>

	<!-- Tochigi Banner Section -->
	<div class="container-fluid tochigi-banner-container px-5">
		<div class="row tochigi-banner-content px-4 pt-3">
			<div class="col-12 col-md-6 tochigi-left g-0">
				<h3 class="text-center">栃木ガイド</h3>
				<div class="tochigi-left-img "></div>
			</div>
			<div class="col-12 col-md-6 tochigi-right g-0">
				<img src="assets/images/flowers.png" alt="Flowers">
				<ul>
					<li>東京からわずか60分</li>
					<li>都市と自然が共存する「県」</li>
					<li>おしゃれなカフェ、観光スポット多数</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid mt-3 px-5 py-3 bg-white">
		<div class="row tochigi-cat-container p-3">
            <h5>Nature</h5>
			<div class="col-12 col-sm-6 col-md-3 ">
				<img src="assets/images/spring.png" alt="八幡山公園">
                <p>spring</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/summer.png" alt="華厳の滝">
                <p>summer</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/autumn.png" alt="男体山・中禅寺湖">
                <p>autumn</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/winter.png" alt="八幡山公園">
                <p>winter</p>
			</div>
		</div>
		<div class="row tochigi-cat-container p-3">
            <h5>View Point</h5>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/utunomiya.png" alt="宇都宮駅">
                <p>utunomiya station</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/nikkou.png" alt="東照宮陽明門">
                <p>nikkou</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/nasu.png" alt="八幡山公園">
                <p>nasu</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/ooya.png" alt="大谷地下空間">
                <p>ooya</p>
			</div>
		</div>
		<div class="row tochigi-cat-container px-3 py-3">
            <h5>Food</h5>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/gyouza.png" alt="宇都宮餃子">
                <p>utunomiya gyouza</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/tochiotome.png" alt="苺とちおとめ">
                <p>tochiotome</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/ryumon.png" alt="龍門カフェ">
                <p>ryumon cafe</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<img src="assets/images/sano.png" alt="佐野ラーメン">
                <p>sano ramen</p>
			</div>
		</div>

	</div>

	<?php include 'layout/footer.php'; ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>