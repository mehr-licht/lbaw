<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<style>
		html,
		body {
			background-color: #fff;
			color: #636b6f;
			font-family: 'Nunito', sans-serif;
			font-weight: 100;
			height: 100vh;
			margin: 0;
		}

		.full-height {
			height: 100vh;
		}

		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}

		.position-ref {
			position: relative;
		}

		.code {
			border-right: 2px solid;
			font-size: 26px;
			padding: 0 15px 0 15px;
			text-align: center;
		}

		.message {
			font-size: 18px;
			text-align: center;
		}
	</style>
</head>
<title><?php echo $__env->yieldContent('title'); ?></title>

<body>
	<div class="flex-center position-ref full-height">
		<div class="code">
			<?php echo $__env->yieldContent('code'); ?> </div>

		<div class="message" style="padding: 10px;">
<?php echo $__env->yieldContent('description'); ?>
</div>
	</div>
</body>

</html>

<?php /**PATH /home/luis/git/A4S2/LBAW/attempt4/template-laravel/template-laravel/resources/views/layouts/error.blade.php ENDPATH**/ ?>