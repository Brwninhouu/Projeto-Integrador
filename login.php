<?php 
include_once 'conexao.php';

if(isset($_POST['email']) && isset($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from usuario WHERE email = '{$email}' AND senha = md5('{$senha}')";
    $rs = mysqli_query($con,$sql);
    $var = mysqli_num_rows($rs);

    if($var == 1){
while($quebrar = mysqli_fetch_array($rs)){
    $adm = $quebrar['adm'];

    
    session_start();

    if($adm == 1){
        header('location: pag1.php');
    }else{
        header('location: pag2.php');
    }
}
    }else{
         echo "O e-mail ou senha estão incorretos!";
}
}

?>