<?php include('config.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title> What is your emotion? </title>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" >
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">

</head>
<body>

	<label> How are you feeling right now? </label>

	<br><br>

	<select id = "feelings">
	  	<?php while ($row = mysqli_fetch_array($result)):; ?>
	  	<option> <?php echo $row[1]; ?> </option>
	    <?php endwhile; ?>
	</select>

</body>
</html>