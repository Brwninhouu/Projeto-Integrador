<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //pegar dados da tela
    $personagem = $_POST["personagem"];
    $recompensa = $_POST["recompensa"];
    $fruta = $_POST["fruta"];
    $foto = $_FILES["foto"]; //array
    /* explicando o vetor da foto:
    echo var_dump($foto);
    array(5) { 
        ["name"]=> string(12) "imagem2.jfif" 
        ["type"]=> string(10) "image/jpeg" 
        ["tmp_name"]=> string(24) "C:\xampp\tmp\phpE478.tmp" 
        ["error"]=> int(0) 
        ["size"]=> int(10530) }
        */

        //tratamento do arquivo
        //verificar a extensão do arquivo
        $ext = explode(".",$foto["name"]); // [nome][ext]
        $ext = array_reverse($ext); // [ext][nome]
        $ext = $ext[0]; 


        if($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif" && $ext != "jfif"){
          echo "<h1>Arquivo inválido, seu doente, ta parecendo o lucas que copia.</h1>";
        }elseif($foto["size"] > 1024 *800){
            echo "<h1>Tamanho igual o do lucão, vai dar não!</h1>";
        }else{
            
    
        //chamar conexão com o banco
        include_once "conexao.php";

        //criar nomes diferentes para as fotos, para não sobreescrever.
        $nomefoto = date("YmdHis").rand(00000,99999).".".$ext;

        //instrução pra gravar no banco
        $sql = "update personagem set personagem = '".$personagem."', recompensa = '".$recompensa."', fruta = '".$fruta."', foto = '".$nomefoto."'";

        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('Produto cadastrado!'); location= './pag1.php';
            </script>";
//mover o arquivo de foto para a pasta
move_uploaded_file($foto["tmp_name"],"upload/".$nomefoto);
        }else{
            echo "Deu não, pq o pc ta cansadão";
        }
mysqli_close($con);
        }
       
    ?>
</body>
</html>