<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/styleformulaire.css">
</head>
<body>

<form id="formulaire" action="envoyer.php" method="POST" >

	<div >
		<label for="email"> Destinataire :  </label>
		<input id="email" name="email" type="text" required/>
	</div>

	<div >
		<label for="objet"> Sujet :  </label>
		<input id="objet" name="sujet" type="text" required/>
	</div>

	<div > 
		<label  for="message">Message</label>
		<textarea  id="message" name="message" rows="3"></textarea>
	</div>

	<div class="form-group">
		<button  id="reset" name="reset" type="reset">Tout effacer</button>
		<button  id="submit"   type="submit" name="submit">Envoyer</button>
	</div>				

</form>	

</body>
</html>