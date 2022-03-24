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
    
    <section id="wrapper">

        <!-- Home Banner Section -->

        <div class="container home-banner-container py-3">
            <div class="row home-banner-intro">
                <h1>介護分野に特化した</h1>
                <hr>
                <h3 class="mt-2">医療・介護事業者の方々をサポートする組合です</h3>
            </div>
            <div class="row home-banner-image pt-3">
                <div class="col-12 col-sm-6 col-md-4">
                    <img src="assets/images/girl.png" alt="A Girl Image">
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <img src="assets/images/family.png" alt="A Family Image">
                </div>
            </div>
            <div class="row home-banner-content pt-3">
                <div class="col-12 col-sm-5 col-md-4 speech-bubble">
                    <p>マロニエとは？</p>
                </div>
                <div class="col-12 col-sm-7 col-md-8 home-text">
                    <p>
                        介護の分野において長年の実績と経験を持つ医療機関、介護福祉施設、調剤薬局グループが中心となり、運営している協同組合です。
                    </p>
                </div>
            </div>
        </div>
        
    </section>
    <section class="bg-white">
            <!-- Home Body Section -->
            <div class="container home-body-container py-3">
                <div class="row home-content-image py-3">
                    <img src="assets/images/homebody.png" alt="Image">
                </div>
                <div class="row home-body-content py-3">		
                    <div class="col-12 col-sm-4 col-md-5 home-body-circle">
                        <img src="assets/images/myanmar.svg" alt="myanmar flag">
                        <a href="tochigi.php" target="_blank"><p>技能実習生ご案内</p>
                        <p class="click">Click</p></a>
                    </div>
                    <div class="col-12 col-sm-4 col-md-2 home-body-heart">
                        <img src="assets/images/friendship.png" alt="Japan & Myanmar">
                    </div>
                    <div class="col-12 col-sm-4 col-md-5 home-body-circle">
                        <img src="assets/images/japan.svg" alt="japan flag">
                        <a href="profile.php" target="_blank"><p>入会ご希望の方</p>
                        <p class="click">Click</p></a>
                    </div>
                </div>     
            </div>
    </section>

    <!-- Footer Section -->
	<?php include 'layout/footer.php'; ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>