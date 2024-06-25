<html>
    <head>
        <title>C.E. Buarque de Nazareth</title>
    </head>
    <body>
        <header>
            <h1>Cadastro de Aluno - Consulta Geral</h1>
            <p></p>
            <?php
            // Exemplo de código PHP embutido para mostrar a data atual
            $dataAtual = date('d/m/Y');
            echo "<p>Hoje é: $dataAtual</p>";
            ?>
        </header>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $nome_aluno = $_POST["nome_aluno"];
        }
        ?>
        <div>
            <table class='tabela'>
                <tr class='myTr'>
                    <td class="myDiv">Id do Aluno</td>
                    <td class="myDiv">Movimento</td>
                    <td class="myDiv">Nº do Aluno</td>
                    <td class='myDiv'>Aluno</td>
                    <td class='myDiv'>Curso</td>
                </tr>
                <tr>
                    <?php
                    $hostname = 'br1016.hostgator.com.br'; // Endereço do servidor
                    $username = 'lucama33_luciano'; // Nome de usuário do banco de dados
                    $password = 'Lcm75330466@'; // Senha do banco de dados
                    $database = 'lucama33_buarque'; // Nome do banco de dados
                    // Conexão com o banco de dados
                    $conn = mysqli_connect($hostname, $username, $password, $database);

                    echo "<td>";

                    $sql = "select * from alunos where nome_aluno like '$nome_aluno%' order by nome_aluno";
                    $query = mysqli_query($conn, $sql);

                    while ($result = mysqli_fetch_object($query)) {
                        $id_aluno = $result->id_aluno;
                        $caixa_aluno = $result->caixa_aluno;
                        $nome_aluno = $result->nome_aluno;
                        $curso_aluno = $result->curso_aluno;
                        $color = ($c % 2) == 0 ? "<tr bgcolor='#88b8de'>" : "<tr>";
                        echo "$color
                <td><font type='Arial'><a href='edita_aluno.php?id_aluno=$result->id_aluno'><b>$id_aluno</b></a></td>
                    . <td><font type='Arial'><font type='Arial'><a href='exclui_dados.php?id_aluno=$result->id_aluno'><b>Excluir</b></a></td>"
                        . "<td><font type='Arial'><b>$caixa_aluno</b></td>"
                        . "<td><font type='Arial'><b>$nome_aluno</b></td>
                <td><font type = 'Arial'><b>$curso_aluno</b></td>
                </b></td>
            </tr>";
                        $c++;
                    }
                    ?>
                </tr>
            </table>
        </div>
        <p><a href = 'inicio.php'>Menu Inicial</a></p>
    </body>
</html>
