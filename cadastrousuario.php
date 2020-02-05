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

background: black;

background-repeat: no-repeat;

background-position: center;

}

h1 {
	color: white;
    text-align: center;
}


p{
    color: white
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
 
input[type=text]:hover, textarea:hover{ 
         background: #ffffff; border:1px solid #990000;
}
 
input[type=submit]{
        background:#006699;
        color:#ffffff;
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
form {
  text-align:center;
  border: 1px solid;

}
#form{
    width: 300px;
}

</style>
<br><br><br><br><br><br><br><br><br><br><br>
        <!--O formulário precisa ser habilitado a enviar arquivo (enctype="multipart/form-data"), 
        habilita o form a enviar arquivo-->
       
            
        
        <h1>Cadastrar usuários</h1>
        <fieldset>
<b><form action="gravarusuario.php" method="post" enctype="multipart/form-data">
        <p>E-mail:<br>
        <input type="text" name="email" required="required"/>
        <br><br>
        <p>Senha:<br>
        <input type="password" name="senha" required="required"/>
        <br><br>
        
        <input type="hidden" name="adm" required="required" value="0"/>
        <br><br>
        <input type="submit" value="Cadastrar"/>
        </form><br><br><br>
        <a href="index.php">  <button type="submit">Logar</button><a><br>
        </fieldset>
       
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</body>
		
		</html>