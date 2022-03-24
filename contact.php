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

    <!-- Home Banner Section -->
	<div class="container-fluid contact-form-container px-5">
		<form id="contact-form" action="#" role="form">
			<div class=" row contact-form-jp mb-4">
				
				<div class="row">
					<h3 class="text-center rounded text-white mt-3">問い合わせフォーム</h3>
					<span class="text-end text-danger">* 必須</span>
					<div class="col-12 col-md-6 contact-form-left">
						<div class="form-group">
							<label for="form_name"><span class="required-sign">＊</span>お名前</label>
		                    <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Name is required.">
		                    <div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_email"><span class="required-sign">＊</span>メールアドレス</label>
		                    <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid Email is required.">
		                	<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_tel"><span class="required-sign">＊</span>電話番号</label>
		                    <input id="form_tel" type="text" name="tel" class="form-control" required="required" data-error="Valid Email is required.">
		                	<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="companyName">会社名</label>
		                    <input id="companyName" type="text" name="companyName" class="form-control">
						</div>
					</div>
					<div class="col-12 col-md-6 contact-form-right">
						<div class="form-group">
							<label for="message">メッセージ</label>
		                    <textarea id="message" class="form-control py-3" name="message"></textarea>
		                    <div class="help-block with-errors"></div>
						</div>	
						<div class="form-group mt-4">
							<label for="subject"><span class="required-sign">＊</span>お問合せ内容</label>
							<div class="checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="subject" />
									<label class="form-check-label" for="subject">協同組合について</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="subject" />
									<label class="form-check-label" for="subject">外国人技能実習生について</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="subject" />
									<label class="form-check-label" for="subject">連絡ご希望</label>
									<input class="form-check-input" type="checkbox" value="" id="subject" />
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="subject" />
									<label class="form-check-label" for="subject">その他</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 mt-3">
						<div class="form-group">
		                    	<input type="submit" class="btn btn-success btn-send rounded form-control" value="送信">
						</div>
					</div>
				</div>

			</div>
			<div class="row contact-form-en mb-3">
				<div class="row">
					<h3 class="text-center rounded text-white mt-3">Contact Form</h3>
					<span class="text-end text-danger">* Required entries</span>
					<div class="col-12 col-md-6 contact-form-left">
						<div class="form-group">
							<label for="form_name"><span class="required-sign">＊</span>Name</label>
		                    <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Name is required.">
		                    <div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_email"><span class="required-sign">＊</span>Email</label>
		                    <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid Email is required.">
		                    <div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_email"><span class="required-sign">＊</span>Tel</label>
		                    <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid Email is required.">
		                    <div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="companyName">Company Name</label>
		                    <input id="companyName" type="text" name="companyName" class="form-control">
						</div>
					</div>
					<div class="col-12 col-md-6 contact-form-right">	
						<div class="form-group">
							<label for="message">Message</label>
		                    <textarea id="message" class="form-control py-3" name="message"></textarea>
		                    <div class="help-block with-errors"></div>
						</div>
						<div class="form-group mt-4">
							<label for="subject"><span class="required-sign">＊</span>Subject</label>
							<div class="checkbox">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="subject" />
									<label class="form-check-label" for="subject">Co-operative society</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="subject" />
									<label class="form-check-label" for="subject">Foreign technical intern trainee</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="subject" />
									<label class="form-check-label" for="subject">Contact</label>
									<input class="form-check-input" type="checkbox" value="" id="subject" />
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="subject" />
									<label class="form-check-label" for="subject">Other</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 mt-3">
						<div class="form-group">
		                    <input type="submit" class="btn btn-success btn-send rounded form-control" value="Send">
						</div>
					</div>
				</div>
			</div>		
		</form>
	</div>

	<?php include 'layout/footer.php'; ?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>