<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Exercice XP</title>
</head>
<body>
     <form method="POST" action="vote.php">
  <div class="mb-3">
    <label for="name" class="form-label">Nom :</label>
    <input type="txt" class="form-control w-50" id="name" name="name" aria-describedby="Nom">
  </div>
  <div class="mb-3">
  	 <label for="age" class="form-label">Age :</label>
    <input type="txt" class="form-control w-50" id="age" name="age" aria-describedby="Age">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>