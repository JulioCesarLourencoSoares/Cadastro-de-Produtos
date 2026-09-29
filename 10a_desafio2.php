<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h2>Cadastro de Produtos com Validação</h2>

    <form action="" method="post">
        <label for="nome">Nome do produto: </label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="preco">Preço: </label>
        <input type="number" id="preco" name="preco" step="0.01" min="0.01" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe e limpa os valores do formulário
        $nome = trim($_POST['nome']);
        $preco = $_POST['preco'];

        // 1. Validação dos dados em PHP antes de inserir no BD
        if (empty($nome)) {
            echo "<p id='msg' style='color: red;'>Erro: O nome do produto não pode estar vazio.</p>";
        } elseif (!is_numeric($preco) || $preco <= 0) {
            echo "<p id='msg' style='color: red;'>Erro: O preço deve ser um número positivo.</p>";
        } else {
            // 2. Conexão com o banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "Senai@118";
            $dbname = "exercicio";

            $conn = new mysqli($servername, $username, $password, $dbname); 

            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            // 3. Inserção na tabela 'produtos'
            $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

            if ($conn->query($sql) === TRUE) {
                echo "<p id='msg' style='color: darkgreen;'>Produto cadastrado com sucesso!</p>";
            } else {
                echo "<p id='msg' style='color: red;'>Erro ao cadastrar no banco de dados: " . $conn->error . "</p>";
            }

            $conn->close();
        }
    }  
    ?>
</body>
</html>