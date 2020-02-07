<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personagens</title>
</head>
<body>
<script type="text/javascript">
        function sair() {    
	alert('Você saiu do sistema!'); location= './index.php';
}
</script>

<style>

body {

    background-image:url(img/jax.jpg);

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
    background:purple;
        color:#ffffff;
        
}
form,fieldset{
  text-align:center;
  border: 0px solid;

}
button{
    border: 0;
  padding: 10px;
  width: 200px;
  height: 50px;
  display: inline;
  margin: 10px;
  cursor: pointer;
  border-radius: 4px;


}
.center{
    text-align:center;
    margin:auto;

}

</style>
<section class="container-fluid center" >
        <!--O formulário precisa ser habilitado a enviar arquivo (enctype="multipart/form-data"), 
        habilita o form a enviar arquivo-->
        <h1>Painel Administrador<br>
        <p>Cadastrar Produtos:</h1>
        <fieldset>
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
    </fieldset>

    <a href="indexadm.html"><button type="">Início</button><a>
        <a href="pag3.php"><button>Cadastrar Usuários</button><a>
        <a href="pag2adm.php"><button>Consultar Produtos</button><a>
        <button onclick="sair()">SAIR</button><a>

</section>
    
</body>
		
		</html>