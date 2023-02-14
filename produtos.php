<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body  ng-app="meuApp" ng-controller="meuController">
<nav id="produtos">
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
             <a href=""><img src="img/arp1.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href=""><img src="img/arp2.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href=""><img src="img/arp3.webp" alt=""></a>
            </div>
            <div class="ajuste_img"> 
             <a href=""><img src="img/arp4.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href=""><img src="img/arp5.webp" alt=""></a>
            </div>
        </div>

        <div class="linha w100" ng-show="inverter">
            <div class="ajuste_img">
             <a href=""><img src="img/arpi1.jpg" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href=""><img src="img/arpi2.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href=""><img src="img/arpi3.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href=""><img src="img/arpi4.jpg" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href=""><img src="img/arpi5.webp" alt=""></a>
            </div>
        </div>

        <div class="linha w100" ng-show="multisplit">
            <div class="ajuste_img">
            <a href=""><img src="img/mul1.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href=""><img src="img/mul2.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
             <a href=""><img src="img/mul3.webp" alt=""></a>
            </div>
            <div class="ajuste_img">
            <a href=""><img src="img/mul4.png" alt=""></a>
            </div>
            <div class="ajuste_img">
            <a href=""><img src="img/mul5.png" alt=""></a>
            </div>
        </div>

        <div class="linha w100" ng-show="energiasolar">
            <div class="ajuste_img">
              <a href=""><img src="img/pl1.webp" alt=""></a>  
            </div>
            <div class="ajuste_img">
              <a href=""> <img src="img/pl2.jpg" alt=""></a> 
            </div>
            <div class="ajuste_img">
              <a href="">  <img src="img/pl3.jpg" alt=""></a>
            </div>
            <div class="ajuste_img">
               <a href=""> <img src="img/pl4.jpg" alt=""></a>
            </div>
            <div class="ajuste_img">
               <a href=""> <img src="img/pl5.png" alt=""></a>
            </div>
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