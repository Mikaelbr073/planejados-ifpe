<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<br>
<br>
<br>
<div class="container mt-5">
    <section class=" text-center text-lg-start">
    <style>
        .rounded-t-5 {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
        }

        @media (min-width: 992px) {
        .rounded-tr-lg-0 {
            border-top-right-radius: 0;
        }

        .rounded-bl-lg-5 {
            border-bottom-left-radius: 0.5rem;
        }
        }
    </style>
    <div class="card mb-3">
        <div class="row g-0 d-flex align-items-center">
        <div class="col-lg-4 d-none d-lg-flex">
            <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
            class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
        </div>
        <div class="col-lg-8">
            <div class="card-body py-5 px-md-5">

            <form action="{{route('login-autenticar')}}" method="POST">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">E-mail</label>
                <input type="email" value ="{{ old('usuario') }}" name="usuario" class="form-control" />
                {{$errors->has('usuario') ? $errors->first('usuario') : ''}}
                
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <label class="form-label">Senha</label>
                <input type="password" value ="{{ old('senha') }}" name="senha" class="form-control" />
                {{$errors->has('senha') ? $errors->first('senha') : ''}}
                
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Salvar meus dados</label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Recuperar Senha?</a>
                </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>

            </form>

            </div>
        </div>
        </div>
    </div>
    </section>
</div>

</body>
</html>