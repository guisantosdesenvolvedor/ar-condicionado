<?php 
include 'conn/conecta.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
</head>
<body  ng-app="meuApp" ng-controller="meuController">
<!-- <nav id="produtos">
        <div >
            <div class="alinha_meio">
                <h1>Produtos</h1>
            </div>
            <div class="img_abaixo_produtos">
                <div class="alinha_meio">
                    <ul>
                        <li>
                            <img src="img/linhapequena.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <div>
        <div class="linha w50">
            <div ng-mouseover="funcaoArcondicionado()">
               Ar-condicionado
            </div>
            <div ng-mouseover="funcaoInverter()">
                Ar-condicionado Inverter
            </div>
            <div ng-mouseover="funcaoMultisplit()">
                Multi Split
            </div>
            <div ng-mouseover="funcaoEnergiasolar()">
                Energia solar
            </div>
        </div>

        <div class="linha w100" ng-show="arcondicionado">
            <div class="ajuste_img">
             <a href="detalhes.php?id=1"><img src="img/arcondicionado1.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href="detalhes.php?id=2"><img src="img/arcondicionado2.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href="detalhes.php?id=3"><img src="img/arcondicionado3.webp" alt=""></a>
            </div>
            <div class="ajuste_img"> 
             <a href="detalhes.php?id=4"><img src="img/arcondicionado4.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href="detalhes.php?id=5"><img src="img/arcondicionado5.webp" alt=""></a>
            </div>
        </div>

        <div class="linha w100" ng-show="inverter">
            <div class="ajuste_img">
             <a href="detalhes.php?id=6"><img src="img/arp1.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href="detalhes.php?id=7"><img src="img/arp2.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href="detalhes.php?id=8"><img src="img/arpi3.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href="detalhes.php?id=9"><img src="img/arpi4.jpg" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href="detalhes.php?id=10"><img src="img/arpi5.webp" alt=""></a>
            </div>
        </div>

        <div class="linha w100" ng-show="multisplit">
            <div class="ajuste_img">
            <a href="detalhes.php?id=11"><img src="img/mul1.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href="detalhes.php?id=12"><img src="img/mul2.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href="detalhes.php?id=13"><img src="img/mul3.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
            <a href="detalhes.php?id=14"><img src="img/mul4.png" alt=""></a>
            </div>
            <div class="ajuste_img">
            <a href="detalhes.php?id=15"><img src="img/mul5.png" alt=""></a>

            </div>
        </div>

        <div class="linha w100" ng-show="energiasolar">
            <div class="ajuste_img">
              <a href="detalhes.php?id=16"><img src="img/pl1.webp" alt=""></a>  
            </div>
            <div class="ajuste_img">
              <a href="detalhes.php?id=17"> <img src="img/pl2.jpg" alt=""></a> 
            </div>
            <div class="ajuste_img">
              <a href="detalhes.php?id=18">  <img src="img/pl3.jpg" alt=""></a>
            </div>
            <div class="ajuste_img">
               <a href="detalhes.php?id=19"> <img src="img/pl4.jpg" alt=""></a>
            </div>
            <div class="ajuste_img">
               <a href="detalhes.php?id=20"> <img src="img/pl5.png" alt=""></a>
            </div>
        </div>
    </div>
</nav> -->

<nav class="navbar-produtos">
    <div class="cabecalho-produtos">
        <h1>Produtos</h1>
        <img src="img/linhapequena.png" alt="">
    </div>
    <div class="container-produtos">
    <div class="img-produto">
            kkkk
        </div>
        <div class="img-produto">
            kkkk
        </div>
        <div class="img-produto">
            kkkk
        </div>
        <div class="img-produto">
            kkkk
        </div>
        <div class="img-produto">
            kkkk
        </div>
    </div>
</nav>
</body>
<script>
    var app = angular.module('meuApp', []);
    app.controller('meuController', function($scope) {
        $scope.arcondicionado = true;
        $scope.inverter = false;
        $scope.multisplit = false;
        $scope.energiasolar = false;
        
        $scope.funcaoArcondicionado = function() {
            $scope.arcondicionado = true;
            $scope.inverter = false;
            $scope.energiasolar = false;
            $scope.multisplit = false;
        }

        $scope.funcaoInverter = function() {
            $scope.inverter = true;
            $scope.arcondicionado = false;
            $scope.energiasolar = false;
            $scope.multisplit = false;
        }

        $scope.funcaoMultisplit = function() {
            $scope.multisplit = true;
            $scope.arcondicionado = false;
            $scope.inverter = false;
            $scope.energiasolar = false;
        }

        $scope.funcaoEnergiasolar = function() {
            $scope.energiasolar = true;
            $scope.arcondicionado = false;
            $scope.inverter = false;
            $scope.multisplit = false;
        }
    });
</script>
</html>
