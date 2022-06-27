<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>rastreio</title>

</head>
<body>

    <div class="text-center mt-5">
        <img class="image" src="/image/logo.png" alt="Logo">
    </div>

    <div class="container">
    <h1 class="mt-2 text-center font-weight-light">Veja a produção do seu móvel :) </h1>
    <form action="{{route('rastreio-buscar')}}" method="POST">
      @csrf
      <div class="form-group">
            <input class="form-control mt-5 text-center" type="search" name="codigo" placeholder="Qual o número do seu pedido?" required>
        </div>
    </form>

    <footer class="text-center mt-5 font-weight-light font-italic fixed-bottom">
        <p>© 2013-2022 Feito e Perfeito</p>
    </footer>
</div>
</body>
</html>