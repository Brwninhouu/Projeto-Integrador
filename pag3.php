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

    background-image:url(img/jax.jpg);


background-repeat: no-repeat;

background-position: center;

}

h1,p {
	color: white;
text-align:center;
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
input[type=password]{   
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
} 
</style>

        <!--O formulário precisa ser habilitado a enviar arquivo (enctype="multipart/form-data"), 
        habilita o form a enviar arquivo-->
        <h1>Cadastrar usuários</h1>
      
		<b><form action="gravaradm.php" method="post" enctype="multipart/form-data">
       <p> E-mail:<br>
        <input type="text" name="email" required="required"/>
        <br><br>
       <p> Senha:<br>
        <input type="password" name="senha" required="required"/>
        <br><br>
        <p>Administrador?<br>
        <p>(1) Para sim.<br>
        <p>(2) Para não.<br><br>
        <input type="text" name="adm" required="required"/>
        <br><br>
        <input type="submit" value="Cadastrar"/>
        </form><br><br><br>
        <a href="indexadm.html"><button>PÁGINA INICIAL</button><a><br>
        <a href="pag2adm.php"><button>CONSULTAR PERSONAGENS</button><a><br>
        <button type="button" onclick="sair()">SAIR</button>
     

		</body>
		
		</html>