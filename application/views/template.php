<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title></title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="<?php echo URL::base() ?>team">отбори</a></li>
			<li><a href="<?php echo URL::base() ?>player">играчи</a></li>
			<li><a href="<?php echo URL::base() ?>games">турнир</a></li>
			<li><a href="<?php echo URL::base() ?>games/show">мачове</a></li>
			<li><a href="<?php echo URL::base() ?>search">търсене</a></li>
		</ul>
	</nav>
	<?php echo $view; ?>
</body>
</html>