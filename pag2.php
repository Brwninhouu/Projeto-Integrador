<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar</title>
</head>
<body>
<style>

body {

background: NavajoWhite;

background-repeat: no-repeat;

background-position: center;

}
h1 {
	color: Maroon;
}

td {
    font-weight: bold;
    font-size: 25px;
}
th{
    font-size: 25px;
    color: Maroon;
}
img{
    width:200px;
    height:200px;
}
</style>

<center><h1>Consultar produtos</h1>
<hr>
<?php
include_once "conexao.php";
$sql = "select * from personagem order by personagem ASC";
$res = mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0){
    ?>
    <body>
        <table width="100%" border="3">
            <tr>
                <th>Personagem</th>
                <th>Recompensa</th>
                <th>Fruta</th>
                <th>Foto</th>
            </tr>
         <?php
         while($linha = mysqli_fetch_array($res)){
             ?>
             <tr>
                 <td><center><?php echo $linha["personagem"];?></td>
                 <td><center><?php echo $linha["recompensa"];?></td>
                 <td><center><?php echo $linha["fruta"];?></td>
                 <td><center><img src="upload/<?php echo $linha["foto"]; ?>"></td>         
         <?php }
         ?>
         </table>
       
<?php
}else {
    echo "Nenhum Personagem Encontrado!!!!!!!!!!!!!!!!";
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>