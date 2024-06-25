<?php
require('require.php');
include('funcao.php');

cabecalho();

$user = $_SESSION['MeuLogin']['login'];
$idUsu = $_SESSION['MeuLogin']['idUsu'];
$categoria_id = $_SESSION['MeuLogin']['categoria_id'];
$usuario_ativo = $_SESSION['MeuLogin']['usuario_ativo'];

$id_aluno = $_GET['id_aluno'];

$hostname = 'br1016.hostgator.com.br'; // Endereço do servidor
$username = 'lucama33_luciano'; // Nome de usuário do banco de dados
$password = 'Lcm75330466@'; // Senha do banco de dados
$database = 'lucama33_buarque'; // Nome do banco de dados
// Conexão com o banco de dados
$conn = mysqli_connect($hostname, $username, $password, $database);

$sql = "select * from alunos where id_aluno =  '$id_aluno' order by id_aluno";
$query = mysqli_query($conn, $sql);

$result = mysqli_fetch_object($query);
$id_aluno = $result->id_aluno;
$caixa_aluno = $result->caixa_aluno;
$nome_aluno = $result->nome_aluno;
$curso_aluno = $result->curso_aluno;
?>

<!DOCTYPE html>

<h1>Formulário de Cadastro de Alunos</h1>
<?php
// Exemplo de código PHP embutido para mostrar a data atual
$dataAtual = date('d/m/Y');
echo "<p>Hoje é: $dataAtual</p>";
?>
<form method="post" name="editar_dados" action="editar_dados.php">
    <label for="caixa">ID do Aluno:</label>
    <?php echo "<input type='text' name='id_aluno' value='$id_aluno' readonly><br><br>";?>
    <label for="caixa">Nº do Aluno:</label>
    <?php echo "<input type='text' name='caixa_aluno' value='$caixa_aluno'><br><br>";?>
    <label for='nome'>Nome:</label>
    <?php echo "<input type='text' name='nome_aluno' value='$nome_aluno' required><br><br>";?>
    <label for='curso'>Curso:</label>
    <?php echo "<input id='curso' name='curso_aluno' value='$curso_aluno' required><br><br>";?>
    <input type='submit' value='Editar'>
    <p><a href = 'inicio.php'>Voltar ao Início</a></p>
</form>
</body>
</html>
