<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personagens</title>
</head>
<body>
    <script>
        function sair() {    
	alert('Você saiu do sistema!'); location= './index.php';
}
</script>
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
        <center><h1>Cadastrar usuários</h1>
        <fieldset style="width: 30%;">
		<b><form action="gravaradm.php" method="post" enctype="multipart/form-data">
        E-mail:<br>
        <input type="text" name="email" required="required"/>
        <br><br>
        Senha:<br>
        <input type="password" name="senha" required="required"/>
        <br><br>
        Administrador?<br>
        (1) Para sim.<br>
        (2) Para não.<br>
        <input type="text" name="adm" required="required"/>
        <br><br>
        <input type="submit" value="Cadastrar"/>
        </form><br><br><br>
        <a href="indexadm.html">PÁGINA INICIAL<a><br>
        <a href="pag2adm.php">CONSULTAR PERSONAGENS<a><br>
        <button type="button" onclick="sair()">SAIR</button>
        </fieldset>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</body>
		
		</html>