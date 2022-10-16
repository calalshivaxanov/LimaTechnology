<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/cs/comingsoon_02/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Nov 2021 22:59:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title><?=setting('maintenance_mode_title')?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<link rel="icon" type="image/png" href="<?=public_url('maintenance_mode/images/icons/favicon.ico')?>" />

<link rel="stylesheet" type="text/css" href="<?=public_url('maintenance_mode/vendor/bootstrap/css/bootstrap.min.css')?>">

<link rel="stylesheet" type="text/css" href="<?=public_url('maintenance_mode/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">

<link rel="stylesheet" type="text/css" href="<?=public_url('maintenance_mode/vendor/animate/animate.css')?>">

<link rel="stylesheet" type="text/css" href="<?=public_url('maintenance_mode/vendor/select2/select2.min.css')?>">

<link rel="stylesheet" type="text/css" href="<?=public_url('maintenance_mode/css/util.css')?>">
<link rel="stylesheet" type="text/css" href="<?=public_url('maintenance_mode/css/main.css')?>">

<meta name="robots" content="noindex, follow">
</head>
<body>

<div class="simpleslide100">
<div class="simpleslide100-item bg-img1" style="background-image: url(<?=public_url('maintenance_mode/images/m2.jpg')?>;"></div>
<div class="simpleslide100-item bg-img1" style="background-image: url('<?=public_url('maintenance_mode/images/maintence.png')?>;"></div>
<div class="simpleslide100-item bg-img1" style="background-image: url('<?=public_url('maintenance_mode/images/m5.jpg')?>;"></div>
</div>
<div class="size1 overlay1">

<div class="size1 flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
<h3 class="l1-txt1 txt-center p-b-25">
    <?=setting('maintenance_mode_esas')?>
</h3>
<p class="m2-txt1 txt-center p-b-48">
    <?=setting('maintenance_mode_description')?>
</p>
<div class="flex-w flex-c-m cd100 p-b-33">
<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
<span class="l2-txt1 p-b-9 days">35</span>
<span class="s2-txt1">Days</span>
</div>
<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
<span class="l2-txt1 p-b-9 hours">17</span>
<span class="s2-txt1">Hours</span>
</div>
<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
<span class="l2-txt1 p-b-9 minutes">50</span>
<span class="s2-txt1">Minutes</span>
</div>
<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
<span class="l2-txt1 p-b-9 seconds">39</span>
<span class="s2-txt1">Seconds</span>
</div>
</div>

</div>
</div>

<script src="<?=public_url('maintenance_mode/vendor/jquery/jquery-3.2.1.min.js')?>"></script>

<script src="<?=public_url('maintenance_mode/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?=public_url('maintenance_mode/vendor/bootstrap/js/bootstrap.min.js')?>"></script>

<script src="<?=public_url('maintenance_mode/vendor/select2/select2.min.js')?>"></script>

<script src="<?=public_url('maintenance_mode/vendor/countdowntime/moment.min.js')?>"></script>
<script src="<?=public_url('maintenance_mode/vendor/countdowntime/moment-timezone.min.js')?>"></script>
<script src="<?=public_url('maintenance_mode/vendor/countdowntime/moment-timezone-with-data.min.js')?>"></script>
<script src="<?=public_url('maintenance_mode/vendor/countdowntime/countdowntime.js')?>"></script>
<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 13,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>

<script src="<?=public_url('maintenance_mode/vendor/tilt/tilt.jquery.min.js')?>"></script>
<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<script src="<?=public_url('maintenance_mode/js/main.js')?>"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6aec17d61816dfef","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/cs/comingsoon_02/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Nov 2021 23:00:04 GMT -->
</html>