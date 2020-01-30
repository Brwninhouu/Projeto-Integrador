<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personagens</title>
</head>
<body>
<style>

body {

background-image: url("img/zoro.jpg");

background-repeat: no-repeat;

background-position: center;

}

h1 {
	color: Maroon;
}

a:link, a:visited {
	text-decoration: none
	}
a:hover {
	text-decoration: underline; 
	color: #f00
	}
a:active {
	text-decoration: none
	}
}
</style>
<br><br><br><br><br><br><br><br><br><br><br>
        <!--O formulário precisa ser habilitado a enviar arquivo (enctype="multipart/form-data"), 
        habilita o form a enviar arquivo-->
        <center><h1>Cadastrar personagens</h1>
        <fieldset style="width: 30%;">
		<b><form action="gravar.php" method="post" enctype="multipart/form-data">
        Nome do personagem:<br>
        <input type="text" name="personagem" required="required"/>
        <br><br>
        Recompensa:<br>
        <input type="text" name="recompensa" required="required"/>
        <br><br>
        Fruta:<br>
        <textarea name="fruta"></textarea>
        <br><br>
        Foto:<br>
        <input type="file" name="foto" required="required"/><br>
        <br>
        <input type="submit" value="Cadastrar"/>
        </form><br><br><br>
        <a href="pag2.php">CONSULTAR PERSONAGENS<a>
        </fieldset>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</body>
		
		</html>