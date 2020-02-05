<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="footer-white.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>
<script>
        function sair() {    
	alert('Você saiu do sistema!'); location= './index.php';
}
</script>

<style>
    #fonte{color:white;}
    
    </style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">


<a class="navbar-brand" href="index.html">GEEK STORE</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color:rgb(99, 96, 96);">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.html" id="fonte">Página inicial <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">

        </li>
        <li class="nav-item ">
            <a class="nav-link" href="pag2.php" id="fonte">Produtos</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="#" id="fonte" onclick=sair()>SAIR</a>
        </li>
        <li class="nav-item ">
          
        </li>
        <li class="nav-item ">
     
        </li>
       
        </li>
    </ul>
   
</div>
</nav>
<body>
<section class="container-fluid">

<style>

body {

background:black;

background-repeat: no-repeat;

background-position: center;

}
h1 {
	color: white;
}

td, th {
  border: 1px solid orange;
}

img{
    width:100px;
    height:100px;
}
table {
    background:white;

    border-collapse: collapse;
}
p{
    font-style:italic;
    color: gray;
}
table{
   
text-align:center;
}
</style>


<p>Compras Somente em Nossa Loja Física!</p>
<hr>
<?php
include_once "conexao.php";
$sql = "select * from personagem order by personagem ASC";
$res = mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0){
    ?>
    <body>
       
    <table>
            <tr>
                <th>Produto</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Foto</th>
            </tr>

         <?php
         while($linha = mysqli_fetch_array($res)){
             ?>
             <tr>
                 <td><?php echo $linha["personagem"];?></td>
                 <td>R$: <?php echo $linha["recompensa"];?></td>
                 <td><?php echo $linha["fruta"];?></td>
                 <td><img src="upload/<?php echo $linha["foto"]; ?>"></td>         
         <?php }
         ?>
         </table>
       
<?php
}else {
    echo "Nenhum Personagem Encontrado!!!!!!!!!!!!!!!!";
}
?>

</section>
</body>

<footer id="myFooter">
    <div class="footer-copyright text-center py-3">@ 2019 Copyright:
        <a href="https://google.com/">Google.com</a>
    </div>

    <div class="footer-social">
        <a href="https://www.facebook.com/" class="social-icons">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/?hl=pt-br" class="social-icons">
            <i class="fa fa-instagram"></i>
        </a>
        <a href="https://www.youtube.com/?hl=pt&gl=BR" class="social-icons">
            <i class="fa fa-youtube"></i>
        </a>
        <a href="https://twitter.com/" class="social-icons">
            <i class="fa fa-twitter"></i>
        </a>
    </div>
</footer>

</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js " integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P " crossorigin="anonymous "></script>