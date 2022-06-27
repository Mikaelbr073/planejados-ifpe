<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row2">
                <div class="col-md-6 offset-md-3">
                    <form>
                        @csrf
                       <div class="form-group">
                            <label for="email">Email de acesso</label>
                            <input type="email" name="mail" class="form-control" >
                       </div class="form-group"> 
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control">
                       <div>
                        <button type="submit" class="btn btn-primary mt-2">Login</button>

                       </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>