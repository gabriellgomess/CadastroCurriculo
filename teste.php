<?php
 
include 'conexao.php';


$cpf = $_POST['cpf_t'];

$connect = mysqli_connect($host , $user , $passwd , $dbase);
                       
$sql = "SELECT * FROM `curriculos` WHERE `cpf` = '$cpf'";

$response = mysqli_query($connect, $sql);

   
    if ($response === FALSE) 
    {
    die(mysqli_error($db));
    }

    while ($row = mysqli_fetch_assoc($response)) {

        echo "
        <h1>".$row['nome']."</h1>
        <h1>".$row['cpf']."</h1>
        ";
    }



    mysqli_close($connect);

?>