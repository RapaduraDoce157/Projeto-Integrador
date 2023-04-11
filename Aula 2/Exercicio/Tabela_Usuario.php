
<form action="" class="form-control mb-2">
<h1>Lista de usuarios</h1>


      <table id="TabelaDados" class="table table-striped" style="width:100%">
      <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Status</th>
                <th>Data</th>
            </tr>
        </thead>
      


   <?php
   include_once ('conexao.php');
   try {
    $sql = $conn->query('select * from Usuario');

    foreach($sql as $linha)
     {
        echo" <tr>
        <th>$linha[0]</th>
        <th>$linha[1]</th>
        <th>$linha[2]</th>
        <th>$linha[3]</th>
        <th>$linha[4]</th>
        </tr>";
     }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
?>
  </table>