
<?php
//pegar o id que o consultar está mandando.
$idpersonagem = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "select * from personagem where idpersonagem =".$idpersonagem;
include_once "conexao.php";
$resultado = mysqli_query($con,$sql);
if(mysqli_num_rows($resultado)== 1){
$reg = mysqli_fetch_array($resultado);
}
?>

<h3>Atualizar produto</h3>
<form action="atualizar.php" method="post" enctype="multipart/form-data">
Nome do produto:
<input type="text" name="personagem" id="personagem" value="<?php echo $reg["personagem"]; ?>"><br><br>
Valor:
<input type="text" name="recompensa" id="recompensa" value="<?php echo $reg["recompensa"]; ?>"><br><br>
Descrição:
<input type="text" name="fruta" id="fruta" value="<?php echo $reg["fruta"]; ?>"><br><br>
Foto:
<input type="file" name="foto" required="required"/><br>

<input type="submit" value="Atualizar produto"/>
<input type="hidden" name="idpersonagem" value="<?php echo $reg["idpersonagem"]; ?>"/>
</form>

<body>
</body>
