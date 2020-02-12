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

	<label> What kind of feeling is that quotation? </label>

	<select id = "feelings">
	  	<?php while ($row = mysqli_fetch_array($result)):; ?>
	  	<option> <?php echo $row[1]; ?> </option>
	    <?php endwhile; ?>
	</select>

	<br><br>

	<label> Insert Quotations </label>

	<br><br>

	

	<button onclick = "window.location.href = 'index.html';"> Logout </button>

</body>
</html>