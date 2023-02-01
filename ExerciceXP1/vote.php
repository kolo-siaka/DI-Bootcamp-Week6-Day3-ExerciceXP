<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	     <h1><strong>Decision de vote .<strong></h1>
       <?php 
           $nom = $_POST['name'];
           $age = $_POST['age'];
           if ($age < 18) {
           	echo "Monsieur ".$nom." vous n\'etre pas en mesure de voter .";
           }else {
           	echo "Monsieur ".$nom." vous pouvez voter";
           }
        ?>
</body>
</html>