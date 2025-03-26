<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
</head>
<body>
    <h2>Informações do Produto</h2>
    <form>
        <div class="form-group">
            <label for="modelo_modelo">Modelo:</label>
            <?php
            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "bugcll";
            
            $conexao = mysqli_connect($servidor, $usuario, $senha, $banco) 
                or die ("Não foi possível conectar-se ao servidor. Erro:" . mysqli_connect_error());
            
            if (isset($conexao)) {
                echo "Banco Conectado";
            }
            // Consultar o banco de dados para obter a Modelo do produto
            $sql = "SELECT modelo_modelo FROM tb_modelos WHERE id = 6"; // Suponha que o ID do produto seja 1
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<input type="text" id="modelo_modelo" name="modelo_modelo" value="' . $row["modelo_modelo"] . '" readonly>';
                }
            } else {
                echo "Nenhum resultado encontrado.";
            }

            $conn->close();
            ?>
        </div>
    </form>
</body>
</html>