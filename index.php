<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Teste</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>

<div class="content">

    <h3>Cadastro de Usuário</h3>

    <p>Preencha as informações para cadastro do usuário!</p>

    <div class="container">
        <form>
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" id="name" class="form-control" placeholder="Informe o seu nome...">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" id="lastname" class="form-control" placeholder="Informe o seu sobrenome...">
                </div>                
            </div>

            <div class="form-group">
                <div class="col s12">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Informe o seu Email..." required>
                    <span data-error="Formato não permitido" data-success="Formato aceito">Preencher um email válido para cadastro</span>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="form-control" value="Salvar">                
            </div>
        </form>
    </div>
</div>


<?php
    include 'js.php';
?>

</body>
</html>