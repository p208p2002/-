<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Title</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
		  integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
		integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>


<?php
function get_server_cpu_usage(){

    $load = sys_getloadavg();
    return $load[0];

}

function get_server_memory_usage(){
 
	$free = shell_exec('free');
	$free = (string)trim($free);
	$free_arr = explode("\n", $free);
	$mem = explode(" ", $free_arr[1]);
	$mem = array_filter($mem);
	$mem = array_merge($mem);
	$memory_usage = $mem[2]/$mem[1]*100;
 
	return round($memory_usage);
}

function get_server_disk_usage(){
	$ds = (int)disk_total_space("/")/1024/1024;
	$df=(int)disk_free_space("/")/1024/1024;
	return round((1-$df/$ds)*100);
}



?>
CPU USAGE:<br>
<div class="progress">
	<div class="progress-bar" role="progressbar" style="width: <?php echo get_server_cpu_usage(); ?>%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo get_server_cpu_usage(); ?></div>
</div>
<br>

MEM USAGE:<br>
<div class="progress">
	<div class="progress-bar" role="progressbar" style="width: <?php echo get_server_memory_usage(); ?>%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo get_server_memory_usage(); ?></div>
</div>
<br>

DISK USAGE:<br>
<div class="progress">
	<div class="progress-bar" role="progressbar" style="width: <?php echo get_server_disk_usage(); ?>%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo get_server_disk_usage(); ?></div>
</div>
<br>


</html>

