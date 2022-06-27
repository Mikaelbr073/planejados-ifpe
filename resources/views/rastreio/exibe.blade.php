<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Resultado do rastreio</title>
</head>
<body>
    <div class="text-center mt-5">
        <img class="image" src="/image/logo.png" alt="Logo">
    </div>
    <div class="text-center font-weight-light mb-2">
        <h4>Olá, {{$status->cliente->nome}} :) </h4>
        <p>Acompanhe seu pedido</p>
        <p></p>
    </div>

    <div>
        <div class="container mx-auto mt-5">
            <div class="row">
                <div class="col-3 order-first">
                    <img class="image2" src="/image/pedidofeito.png" alt="Pedido Feito">
                    <p class=" texto2 font-weight-light">Pedido Feito</p>
                </div>
                <div class="col-3">
                    <img class="image3" src="/image/producao.png" alt="Em Produção">
                    <label class=" texto3 font-weight-light">Em Produção</label>
                </div>
                <div class="col-3">
                    <img class="image4" src="/image/caminhao.png" alt="A caminho">
                    <p class=" texto4 font-weight-light">Chegando</p>
                </div>
                <div class="col-3 order-last">
                    <img class="image5" src="/image/chegou.png" alt="chegou">
                    <p class=" texto5 font-weight-light">Chegou</p>
                </div>
            </div> 
        </div>
            <div>
        <div class="progress ml-5 mt-1 w-75 mx-auto">
            @if($status->statusDeProdução == '1')
                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                @endif   
            @if($status->statusDeProdução == '2')
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                @endif   
            @if($status->statusDeProdução == '3')
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                @endif   
            @if($status->statusDeProdução == '4')
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                @endif        
            </div>
    </div>
    </div>
    <footer class="text-center mt-5 font-weight-light font-italic fixed-bottom">
        <p>© 2013-2022 Feito e Perfeito</p>
    </footer>
</body>
</html>