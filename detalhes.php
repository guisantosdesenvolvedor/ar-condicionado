<?php 
    include 'conn/conecta.php';
    $id = $_GET['id'];
    $lista = $conn->query("select * from produtos where id like '%$id%';");
    $row =  $lista->fetch_assoc();
    $num_linhas = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <!-- Link do css e reset -->
    <link rel="stylesheet" type="text/css" href="CSS/reset.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="./images/logo-shorticon.png" type="image/png">
    <!-- Link do Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Detalhes</title>
</head>
<body>
<nav id="navbar">
        <div id="navbar-container">
                 <h1>AR CONDICIONADO</h1>
            <ul id="navbar-items">
                <li><a href="index.php#home">HOME</a></li>
                <li><a href="index.php#empresa">EMPRESA</a></li>
                <li><a href="index.php#servicos">SERVIÇOS</a></li>
                <li><a href="index.php#portifolio">PORTIFÓLIO</a></li>
                <li><a href="index.php#contato">CONTATO</a></li>
            </ul>
        </div>
</nav>  
  <div id="container-detalhes">
        <h2>
            <?php echo $row['nome']; ?>
        </h2>             
        <div id="container-main">
            <img src="img/<?php echo $row['imagem']; ?>" alt="">
            <div>
                <p>
                    <h2><?php echo $row['descricao']; ?></h2> 
                    <br> <br>
                    <?php echo $row['resumo']; ?> <br><br>  
                </p>
                <div class="button-valor">
                    <?php
                            $desc = 0.2;
                            $c_total = $row['custo_total'];
                            $preco_com_desconto = $c_total * (1 - $desc);
                    ?>
                    <p id="preco">
                        <h2>
                            VALOR: R$
                            <?php echo number_format($preco_com_desconto, 3, '.', ',');?>
                            <span class="preco-original">
                                <strike>R$<?php echo number_format($c_total, 3, '.', ','); ?></strike>
                            </span>
                        </h2>
                    </p>
                </div>
                </div>
            </div>
        </div>

</body>
</html>
