<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" /><title>Vie</title>
    <link media="all" type="text/css" rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
</head>

<body>
	<form class="form-horizontal" role="form" method="post" action="string.php">
	<div class="form-group">
		<label for="string" class="col-sm-5 control-label">String json_decode</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="string" placeholder="mantis" value="<?php echo plugin_config_get('queue_name'); ?>">
		</div>
	</div>
				
	<div class="form-group">
		<div class="col-sm-offset-6 col-sm-8">
			<?php if(isset($info)) { ?>
			<p style="color:blue;"><?php echo $info; ?></p>
			<?php } ?>
			<input id="submit" name="submit" type="submit" value="submit" class="btn btn-primary">
		</div>
	</div>
	</form>
</body>
