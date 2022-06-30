<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Teste</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <div class="container">
        <h3>Registro de Usuário</h3>
        <form>
            <div class="form-group">
                <div class="row">
                    <div class="col s5">
                        <input type="text" id="fullname" class="form-control" placeholder="Nome Completo">
                    </div>
                    <div class="col s5">
                        <input type="number" id="phone-number" class="form-control" placeholder="Telefone">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col s5">
                        <input type="email" id="email" class="form-control" placeholder="Email" required>
                        <span data-error="Formato não permitido" data-success="Formato aceito">Preencher um email válido para cadastro</span>
                    </div>
                    <div class="col s5">
                        <input type="text" id="username" class="form-control" placeholder="Usuário">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col s5">
                        <input type="text" id="password" class="form-control" placeholder="Senha" required>
                    </div>
                    <div class="col s5">
                        <input type="text" id="repeat-password" class="form-control" placeholder="Repetir a Senha" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col s5">
                    <select>
                        <option value="" disabled selected>Selecione a opção</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                        <option value="3">Prefiro não dizer</option>
                    </select>
                </div>
            </div>
                <br>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-large" value="Registrar">
            </div>
        </form>
    </div>

    <?php
    include 'js.php';
    ?>

</body>

</html>