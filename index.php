<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOJA DOS PIRATAS!</title>
</head>
<body>
<section class="container-fluid">
<style>
body {

background-image:url(img/jax.jpg);

background-repeat: no-repeat;

background-position: center;
}


h1, h4,h3 {
	color: white;
    text-align:center;
}
p{
    font-style:italic;
    color: gray;
    text-align:center;
}
form {
  text-align:center;


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
    background:green;
        color:#ffffff;
        
}
input[type=submit]{
    background:#006699;
        color:#ffffff;
        
}
input[type=email]{   
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
input[type=button]{
    background:green;
        color:#ffffff;
}

</style>

<h1>Entrar</h1>
<p>Por favor, cadastre-se ou faça login!</p>

   <legend><h3>LOGIN</h3></legend>
    <form action="login.php" method="post">
    <h4> <label for="email">E-mail: </label><input id="email" type=email required="required" name="email" placeholder="Digite se email!"/></h4>
    <br><br>
    <h4>Senha: <input type="password" name="senha" placeholder="Digite a Senha"/></h4>
    <br><br>
   
<input type="submit" value="Entrar no Sistema"/><br><br>
<a href="cadastrousuario.php"> <input type="button" value="Cadastrar"><a>
</form>

</section>
</body>
</html>
