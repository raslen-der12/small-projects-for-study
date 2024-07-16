<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>
<body>
<style>
*{
	margin:5px}
</style>
<form method="post" action="page2.php">
<div>
<label>liste des produits:</label> <select name="prod" >
<option value="clavier">clavier</option>
<option value="souris"> souris</option>
<option value="inprimante"> inprimante</option>
<option value="cle USB"> cle USB</option>
</select>
</div><div>
<label >liste des fournisseurs</label><select name="four" >
<option  value="Mr Smith">Mr Smith</option>
<option value="Mr Jean"> Mr Jean</option>
<option value="Mr Petret"> Mr Petret</option>
</select>
</div><div>
<label>quantite</label><input type="number" name="qt" required />
</div>
<input type="submit" value="Envoyer" />
</form>

</body>
</html>