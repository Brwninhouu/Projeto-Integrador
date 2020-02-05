<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personagens</title>
</head>
<body>
<section class="container-fluid">
<style>

body {

background: black;

background-repeat: no-repeat;

background-position: center;

}

h1 {
	color: white;
}
p{
    color: white;
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
    input[type=number]{   
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #cccccc; 
    border:1px solid #000000;
    width:150px
}
input[type=text]{   
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #cccccc; 
    border:1px solid #000000;
    width:150px
}
textarea{
    border: 1px solid #000000;
    background:#cccccc;
    width:150px;
    height:100px;
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
}
button{
    background:#006699;
        color:#ffffff;
        
}
</style>

        <!--O formulário precisa ser habilitado a enviar arquivo (enctype="multipart/form-data"), 
        habilita o form a enviar arquivo-->
        <center><h1>Painel Administrador<br>
        <p>Cadastrar Produtos:</h1>
        <fieldset style="width: 30%;">
		<b><form action="gravar.php" method="post" enctype="multipart/form-data">
        <p>Nome do produto:<br>
        <input type="text" name="personagem" required="required"/>
        <br><br>
        <p>Valor:<br>
        <input type="number" class="form-control" name="recompensa">
        <br><br>
        <p>Descrição:<br>
        <textarea name="fruta"></textarea>
        <br><br>
        <p>Selecionar foto<br>
        <input type="file" name="foto" required="required"/><br>
        <br>
        <input type="submit" value="Cadastrar"/>
        </form><br><br><br>
        <a href="index.html"><button type="submit">Início</button><a><br><br>
        <a href="pag3.php"><button type="submit">Cadatrar Usuários</button><a><br><br>
        <a href="pag2.php"><button type="submit">Consultar Personagens</button><a>
        </fieldset>
</section>
		</body>
		
		</html>