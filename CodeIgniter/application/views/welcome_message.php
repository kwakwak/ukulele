<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <script type="text/javascript" src="javascript/eventByDay.js"></script>
        <script type="text/javascript" src="javascript/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="javascript/jPagingNextDay.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">

	<style type="text/css">

	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
        <input type='hidden' id='lastStop' value="0" />  
 <a class="next_link" href="javascript:next();">Next</a>
        <div id='content'>


<?php foreach ($result as $item):?>

<p><?php echo $item->eventName;?></p>

<?php endforeach;?>


	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>