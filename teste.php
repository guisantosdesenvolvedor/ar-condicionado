<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">

    <title>Document</title>
</head>
<body  ng-app="meuApp" ng-controller="meuController">
    <nav id="navbar">
        <div id="navbar-container">
                 <h1>AR CONDICIONADO</h1>
            <ul id="navbar-items">
                <li><a href="#home">HOME</a></li>
                <li><a href="#empresa">EMPRESA</a></li>
                <li><a href="#servicos">SERVIÇOS</a></li>
                <li><a href="#portifolio">PORTIFÓLIO</a></li>
                <li><a href="#contato">CONTATO</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navcentral" id="home">
        <div class="imagem1">
            <ul>
                <li>
                    <a href=""><img src="img/energia_solar.png" alt=""></a>
                </li>
            </ul>
        </div>
        <div class="imagem1">
            <div class="texto_meio">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                <img src="img/linhapequena.png" alt="" class="linhapq">
            </div>
        </div>
    </nav>
</div>
<nav class="fundo_conteudo" id="empresa">
    <div class="desc">
        <h1>VISÃO</h1>
    </div>
    <div class="desc">
        <h1> MISSÃO </h1>
    </div>
    <div class="desc">
        <h1> VALORES</h1>
    </div>
    <div class="textos_desc">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus totam, eaque aliquam perferendis suscipit alias aut inventore praesentium voluptate a numquam facilis rem id eos quibusdam reprehenderit nemo. Voluptatibus, fugiat.</p>
    </div>
    <div class="textos_desc">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fuga maxime facere totam id, alias libero aperiam, delectus cupiditate temporibus molestias aliquid nobis quasi harum in? Placeat quae ducimus ipsam.</p>
    </div>
    <div class="textos_desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptatum voluptates molestiae quas odio optio sit rerum? Consectetur iste enim quis, id provident ratione ea, necessitatibus quo laboriosam animi dolorum?</p>
    </div>
</nav>
<div class="area_servicos" id="servicos">
    <div class="paragrafo">
        <h1>Serviços</h1>
    </div>
    <div class="img_linha"><div>
    </div>
       <div class="imagem_servicos_linha">
            <ul>
                <li>
                  <img class="" src="img/linha1.png" alt="" style="padding: 0px 40px 0px 0px;" width="350px" height="50px">
                </li>
            </ul>
       </div>
    </div>
    <div class="imagem_servicos_bloco">
        <div class="imagem_servicos_linha">
            <ul>
                <li>
                    <a href=""><img src="img/ar2.webp" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="imagem_servicos_linha">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci facere, unde asperiores, cupiditate libero saepe temporibus .</p>
    </div>
    <div class="imagem_servicos_linha">
        <ul>
            <li>
                <a href=""><img src="img/ar3.webp" alt=""></a>
            </li>
        </ul>
    </div>
    <div class="imagem_servicos_linha">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci facere, unde asperiores, cupiditate libero saepe temporibus .</p>
    </div>
    <div class="imagem_servicos_linha">
        <ul>
            <li>
                <a href=""><img src="img/ar4.png" alt=""></a>
            </li>
        </ul>
    </div>
    <div class="imagem_servicos_bloco">
        <div class="imagem_servicos_linha">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id laudantium ipsam adipisci odit sit quo quos libero sunt illo iusto provident blanditiis, facere, nostrum tempore officiis? Velit commodi sunt tenetur.</p>
        </div>
    </div>
    <div class="imagem_servicos_linha">
        <ul>
            <li>
                <a href=""><img src="img/ar5.webp" alt=""></a>
            </li>
        </ul>
    </div>
    <div class="imagem_servicos_linha">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci facere, unde asperiores, cupiditate libero saepe temporibus .</p>
    </div>
    <div class="imagem_servicos_linha">
        <ul>
            <li>
                <a href=""><img src="img/ar6.webp" alt=""></a>
            </li>
        </ul>
    </div>
    <div class="imagem_servicos_linha">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci facere, unde asperiores, cupiditate libero saepe temporibus .</p>
    </div>
</div>
<br><br><br><br><br><br>
<nav class="fundo">
    <div class="container_texto">
        <div class="sobre_nos_fundocinza">
            <h1>Sobre nós</h1>
            <img src="img/linhapequena.png" alt="">
        </div>
        <div class="ajustes_text_sobre">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellendus perspiciatis dolorum assumenda? Unde, laborum inventore. Laborum iure, voluptatum minima at similique adipisci esse? Voluptates modi enim quae quibusdam aliquid maxime dignissimos soluta, eligendi excepturi nisi ut obcaecati eos necessitatibus ipsam rerum corrupti? Facere asperiores libero, doloremque sit laborum voluptatem!
            </p>
        </div>
    </div>
    <div class="logogrande" id="portifolio">
        <h1>AR CONDICIONADO</h1>
    </div>
</nav>
<br><br><br><br><br>
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
            <img src="img/arp1.webp" alt="">
            </div>
            <div class="ajuste_img">
            <img src="img/arp2.webp" alt="">
            </div>
            <div class="ajuste_img">
            <img src="img/arp3.webp" alt="">
            </div>
            <div class="ajuste_img"> 
            <img src="img/arp4.webp" alt="">
            </div>
            <div class="ajuste_img">
            <img src="img/arp5.webp" alt="">
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
            <img src="img/mul1.webp" alt="">
            </div>
            <div class="ajuste_img">
            <img src="img/mul2.webp" alt="">
            </div>
            <div class="ajuste_img">
            <img src="img/mul3.webp" alt="">
            </div>
            <div class="ajuste_img">
            <img src="img/mul4.png" alt="">
            </div>
            <div class="ajuste_img">
            <img src="img/mul5.png" alt="">
            </div>
        </div>

        <div class="linha w100" ng-show="energiasolar">
            <div class="ajuste_img">
                <img src="img/pl1.webp" alt="">
            </div>
            <div class="ajuste_img">
                <img src="img/pl2.jpg" alt="">
            </div>
            <div class="ajuste_img">
                <img src="img/pl3.jpg" alt="">
            </div>
            <div class="ajuste_img">
                <img src="img/pl4.jpg" alt="">
            </div>
            <div class="ajuste_img">
                <img src="img/pl5.png" alt="">
            </div>
        </div>
    </div>
</nav>

<nav class="contato" style="    background: rgb(212, 212, 212);
">
    <div class="contatocontainer">
        <img src="img/ar2.webp" alt="" class="ajuste_img">
    </div>
    <div class="contatoaling" id="contato">
        <h1>CONTATO</h1>
        <img src="img/linhapequena.png" alt="">
        <div class="ajustecontato">
            <h5>ENDEREÇO:</h5>
            <h5>ENTRE EM CONTATO:</h5>
        </div>
        <div class="ajustecontatos1">
            <h4>ENVIE-NOS UMA MENSAGEM</h4>
        </div>
        <div class="linhait">
            <label for="nome" class="inputfield">
                NOME:
            <input type="nome" name="nome" id="nome">
        </label>
        <label for="email" class="inputfield">
            E-MAIL:
            <input type="email" name="email" id="email">
        </label>
        </div>
        <div class="ajustemens">
            <label for="mensagem" class="inputfield">
                MENSAGEM:
                <input type="mensagem" name="mensagem" id="mensagem">
            </label>
        </div>
        <div class="botao">
            <button> <h3>Enviar</h3></button>
        </div>
        <div class="icons">
            <img src="img/icone_fb.svg" alt="">
            <img src="img/icone_insta.svg" alt="">
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