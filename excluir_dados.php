<html>
    <head>
        <title>C.E. Buarque de Nazareth</title>
    </head>
    <body>
        <header>
            <h1>Edição de Aluno</h1>
            <p></p>
            <?php
            // Exemplo de código PHP embutido para mostrar a data atual
            $dataAtual = date('d/m/Y');
            echo "<p>Hoje é: $dataAtual</p>";

            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                $id_aluno = $_POST["id_aluno"];
                $caixa_aluno = $_POST["caixa_aluno"];
                $nome_aluno = $_POST["nome_aluno"];
                $curso_aluno = $_POST["curso_aluno"];

                echo "<p><strong>Caixa:</strong> " . $caixa_aluno . "</p>";
                echo "<p><strong>Nome:</strong> " . $nome_aluno . "</p>";
                echo "<p><strong>Curso:</strong> " . $curso_aluno . "</p>";
            }

            $hostname = "br1016.hostgator.com.br"; // Endereço do servidor
            $username = "lucama33_luciano"; // Nome de usuário do banco de dados
            $password = "Lcm75330466@"; // Senha do banco de dados
            $database = "lucama33_buarque"; // Nome do banco de dados
            // Conexão com o banco de dados
            $conn = mysqli_connect($hostname, $username, $password, $database);

            // Verifica a conexão
            if ($conn->connect_error) {
                die("Erro de conexão: " . $conn->connect_error);
            }

            // Dados para inserção
            // Consulta SQL para inserção
            $sql = "delete from alunos where id_aluno = '$id_aluno'";

            // Executa a consulta
            if (mysqli_query($conn, $sql) === TRUE) {
                echo "Registro apagado com sucesso!";
            } else {
                echo "Erro na inserção: " . $conn->error;
            }
            mysqli_close($conn);
            ?>
            <p><a href = "formulario_aluno.php">Voltar ao formulário</a></p>
        </header>
    </body>
</html>
