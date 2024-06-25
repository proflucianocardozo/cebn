<?php
require('require.php');
include('funcao.php');

cabecalho();

$user = $_SESSION['MeuLogin']['login'];
$idUsu = $_SESSION['MeuLogin']['idUsu'];
$categoria_id = $_SESSION['MeuLogin']['categoria_id'];
$usuario_ativo = $_SESSION['MeuLogin']['usuario_ativo'];
?>
<h1>Cadastro de Aluno - Consulta Geral</h1>
<?php
// Exemplo de código PHP embutido para mostrar a data atual
$dataAtual = date('d/m/Y');
echo "<p>Hoje é: $dataAtual</p>";
?>

<div>
    <form name="consulta_geral" method="get">
        <table class='tabela'>
            <tr class='myTr'>
                <td class="myDiv">ID do Aluno</td>
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

                $sql = 'select * from alunos order by nome_aluno';
                $query = mysqli_query($conn, $sql);

                while ($result = mysqli_fetch_object($query)) {
                    $id_aluno = $result->id_aluno;
                    $caixa_aluno = $result->caixa_aluno;
                    $nome_aluno = $result->nome_aluno;
                    $curso_aluno = $result->curso_aluno;
                    $color = ($c % 2) == 0 ? "<tr bgcolor='#88b8de'>" : "<tr>";
                    echo "$color
                        <td><font type='Arial'><a href='edita_aluno.php?id_aluno=$result->id_aluno'><b>$id_aluno</b></a></td>
                <td><font type='Arial'><b>$caixa_aluno</b></td>"
                    . "<td><font type='Arial'><b>$nome_aluno</b></a></td>
                <td><font type = 'Arial'><b>$curso_aluno</b></td>
                </b></td>
            </tr>";
                    $c++;
                }
                ?>
            </tr>
        </table>
    </form>
</div>
<p><a href = 'inicio.php'>Menu Inicial</a></p>
</body>
</html>
