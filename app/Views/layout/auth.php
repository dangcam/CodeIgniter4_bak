<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo isset($seo['title']) ? $seo['title'] : lang('default'); ?></title>
	<link rel="shortcut icon" href="public/images/icon.ico"/>
	<!-- Prevent the demo from appearing in search engines -->
	<meta name="robots" content="noindex">
	<!-- App CSS -->
	<link type="text/css" href="public/css/app.css" rel="stylesheet">
	<link type="text/css" href="public/css/app.rtl.css" rel="stylesheet">
	<!-- Simplebar -->
	<link type="text/css" href="public/vendor/simplebar.css" rel="stylesheet">
	<!-- script -->
	<script src="public/vendor/jquery.min.js"></script>
	<script src="public/vendor/jquery-ui.min.js"></script>
</head>

<body>
<div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
	<div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable" style="overflow-y: auto;" data-simplebar data-simplebar-force-enabled="true">
		<div class="container h-vh d-flex justify-content-center align-items-center flex-column">
			<div class="d-flex justify-content-center align-items-center mb-3">
				<h2 class="ml-2 text-bg mb-0"><strong><?php echo $seo['header_form']?></strong></h2>
			</div>
			<?php
			// load template
			$this->load->view($template, isset($data) ? $data : NULL);
			?>
		</div>
	</div>
</div>
</body>

</html>
