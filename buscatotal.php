<?php 
include 'conexao.php';

$connect = mysqli_connect($host , $user , $passwd , $dbase);
                       
$sql = "SELECT * FROM `curriculos`";

$response = mysqli_query($connect, $sql);

                                          
  echo "<h1 style='color: white;'>Todos os Currículos</h1>";
  echo "
        <table class='table table-striped table-dark'>
          <thead>
            <tr>
              <th scope='col'>CPF</th>
              <th scope='col'>NOME</th>
              <th scope='col'>ÁREA DE INTERESSE</th>
              <th scope='col'>GERAR PDF</th>
            </tr>";
  while ($row_busca = mysqli_fetch_assoc($response)){                                           
            echo  
              "</thead>
                <tbody>
                  <tr>
                    <th name='indice'>".$row_busca['cpf']."</th>
                    <th>".$row_busca['nome']."</th>                              
                    <th>".$row_busca['area_interesse']."</th>
                    <th>
                      <form method='POST' action='gerapdf.php'>
                        <input type='hidden' name='cpf_t' value=".$row_busca['cpf'].">
                        <button class='btn btn-sm btn-success' type='submit'>Gerar</button>
                      </form>
                    </th>
                  </tr>";
                };
                echo "</tbody>  
                    </table>
                  ";
mysqli_close($connect);
?>