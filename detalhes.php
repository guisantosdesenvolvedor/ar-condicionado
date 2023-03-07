<?php 
    include 'conn/conecta.php';
    $id = $_GET['id'];
    $lista = $conn->query("select * from vw_produtos where id like '%$id%';");
    $row =  $lista->fetch_assoc();
    $num_linhas = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <!-- Top para voltar -->
        <h2>
            <a href="javascript:window.history.go(-1)" role="button" >
                <span class="btn-voltar">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </span>
            </a>&nbsp;
            <?php echo $row['nome']; ?>
        </h2>             
        <div id="container-main">
            <img src="img/<?php echo $row['imagem']; ?>" alt="">
            <div>
                <p>
                    <h2><?php echo $row['descricao']; ?></h2> <br> <br>
                    <?php echo $row['resumo']; ?> <br><br>  
                </p>
                <?php
                    // Define o valor do desconto como 10%
                        $desconto = 0.1;
                    // Obtém o custo total do produto
                        $custo_total = $row['custo_total'];
                    // Calcula o valor com desconto
                        $preco_com_desconto = $custo_total * (1 - $desconto);
                ?>
                <p id="preco">
                    <h2>
                        VALOR: R$
                        <?php echo number_format($preco_com_desconto, 3, '.', ','); // formata para exibir com duas casas decimais e separador de milhar com ponto ?>
                        <span class="preco-original">
                            <strike>R$<?php echo number_format($custo_total, 3, '.', ','); ?></strike>
                        </span>
                    </h2>
                </p>
            </div>
        </div>
</body>
</html>
