<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="/css/bootstrap-theme.min.css" rel="stylesheet">
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<!-- mon theme -->
<link rel="stylesheet" href="MForm.css" />
<title>Light page 4</title>


</head>
<body>

<header>

<h1> Eclairage de la maison </h1>
<img src="images/Lampe.jpg" alt="" class="alignright"/>
<img src="images/Maison.jpg" alt="" class="alignleft"/>

</header>

<div id="main">
<nav>
<p class="aligncenter"><a href="Chambre.php" target=""> <input type="button" class="btn btn-primary" value="Chambres"> </a><a href="Exterieur.php" target=""> <input type="button" class="btn btn-primary" value="Exterieur"> </a><a href="Bureau.php" target=""><input type="button" class="btn btn-primary" value="Bureau"></a>
</p>
</nav>
<form  method="post">
  <table
 style="width: 50%; text-align: center; margin-left: auto; margin-right: auto;"
 border="0" cellpadding="3" cellspacing="10">
    <tbody>
      
      
  <tr>
    <td style="text-align: center;"><h2>Tout le Sallon</h2></td>
	<td style="text-align: center;"><button class="btn btn-lg btn-default" name="AllON">ON</button></td>
	<td style="text-align: center;"><button class="btn btn-lg btn-default" name="AllOFF">OFF</button></td>
  </tr>
  <tr>
    <td style="text-align: center;"><h2>Lampe Salle a Manger</h2></td>
	<td style="text-align: center;"><button class="btn btn-lg btn-default" name="SaM1">ON</button></td>
	<td style="text-align: center;"><button class="btn btn-lg btn-default" name="SaM0">OFF</button></td>
  </tr>
  <tr>
    <td style="text-align: center;"><h2>Lampe Salon</h2></td>
    <td style="text-align: center;"><button class="btn btn-lg btn-default" name="Salon1ON">ON</button></td>
    <td style="text-align: center;"><button class="btn btn-lg btn-default" name="Salon1OFF">OFF</button></td>
  </tr>
  <tr>
  	<td style="text-align: center;"><h2>Lampe Salon 2</h2></td>
    <td style="text-align: center;"><button class="btn btn-lg btn-default" name="Salon2ON">ON</button></td>
    <td style="text-align: center;"><button class="btn btn-lg btn-default" name="Salon2OFF">OFF</button></td>
  </tr>
  <tr>
  	<td style="text-align: center;"><h2>Le Bar</h2></td>
    <td style="text-align: center;"><button class="btn btn-lg btn-default" name="BarON">ON</button></td>
    <td style="text-align: center;"><button class="btn btn-lg btn-default" name="BarOFF">OFF</button></td>
  </tr>
  <tr>
  	<td style="text-align: center;"><h2>Lampe Entree</h2></td>
    <td style="text-align: center;"><button class="btn btn-lg btn-default" name="EntreeON">ON</button></td>
    <td style="text-align: center;"><button class="btn btn-lg btn-default" name="EntreeOFF">OFF</button></td>
  </tr>
</tbody>
  </table>
</form>
</div>
</body>
</html>
