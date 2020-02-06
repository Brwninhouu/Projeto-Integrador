<?php
//fazer a conexão com o banco de dados
include_once "conexao.php";
//pegar o ID
$idpersonagem = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
//montar a instrução para deletar o ID recebido
$sql = "delete from personagem where idpersonagem =".$idpersonagem;
//igual ao gravar
if(mysqli_query($con,$sql))
   $msg = "Produto excluído com sucesso!!";
    else
   $msg = "Não deu certo, culpa do lucas que copia!";
//fechar conexão
mysqli_close($con);
echo "<script> 
alert('".$msg."');
location.href='pag2adm.php';
</script>";

?>