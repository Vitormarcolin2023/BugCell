<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Alterar Formas de Pagamento</title>
    </head>

    <body>
        <div class="container">
            <form action="atuafp.php" method="post">
                <div class="form-group">
                    <label for="descricao">Alterar Senha:</label>
                </div>

                <div class="form-group">
                <label for="descricao">Nova Senha:</label>
                    <input 
                        type="text" 
                        id="descricao" 
                        name="descricao" 
                        placeholder="Nova senha" 
                        required>
                </div>
                <button type="submit" class="btn">Atualizar</button>
                <a href="http://localhost/BugCell/acesso/perfil/deletacao.php" class="btn">Delete</a>
            </form>
        </div>
    </body>
</html>