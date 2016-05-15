<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="homepage.css" type="text/css" rel="stylesheet">
</head>

<body>
<div id="Buitenste">
	<div id="Middelste">
		<div id="Binnenste">
        <img src="logo.png" style="width:350px;" style="height:100px;">
        	<h1>Inloggen</h1>
            <br><br>
    	      <table>
              	<form action="database.php" method="post">
                	<tr><td></td><td><p>Gebruikersnaam:</p><input class="tekstvak" type="text" name="gebruikersnaam" required /></td></tr>
                	<tr><td></td><td><p>Wachtwoord:</p><input class="tekstvak" type="password" name="wachtwoord" required /></td></tr><br><br>
                	<tr><td></td><td><input class="button" type="submit" name="send" value="Login"/></tr></td>
                </form>
               </table>
               <!--  toevoegen als logo gemaakt is <img src="Logo.png" style="width:100px;" style="height:100px;"/>    -->
    	</div>
	</div>
</div>
</body>
</html>