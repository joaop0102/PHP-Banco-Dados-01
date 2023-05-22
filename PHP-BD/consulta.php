<?php 
    define('MYSQL_HOST', 'localhost:3306');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB_NAME', 'bd_sistemas');

    try{
        $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

    }catch(PDOException $e){
        echo 'Erro ao conectar com o MySQL ' . $e->getMessage();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div  class="container ">
        <div  class="row">
            <div  class="col centralizar">
            <div id="tela_dados" class="card">
            <div class="logo_consultar"> <img class="img-fluid" src="consult1.png" alt=""> </div>
            <div class="text-center">

            <div class="textinho">
            <h3>Consulte seus dados</h3>
            </div>

        </div>
            <br>
            <div class="table-responsive">
            <table class="table table-secondary table-striped-columns">
            <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cep</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                <?php
    $sql = "SELECT * FROM bd_sistemas";
    $result = $PDO->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
    ?>
    <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['endereco']; ?></td>
        <td><?php echo $row['bairro']; ?></td>
        <td><?php echo $row['cep']; ?></td>
        <td><?php echo $row['cidade']; ?></td>
        <td><?php echo $row['estado']; ?></td>
    </tr>
    <?php
    }
    ?>
                    
                </tbody>
            </table>
            </div>
            
    

        </div>
            </div>
        </div>
    </div>
   
       

    
</body>
</html>
