<?php
require('require.php');
include('funcao.php');

cabecalho();

$user = $_SESSION['MeuLogin']['login'];
$idUsu = $_SESSION['MeuLogin']['idUsu'];
$categoria_id = $_SESSION['MeuLogin']['categoria_id'];
$usuario_ativo = $_SESSION['MeuLogin']['usuario_ativo'];
?><!DOCTYPE html>

<h1>Formulário de Cadastro de Alunos</h1>
<?php
// Exemplo de código PHP embutido para mostrar a data atual
$dataAtual = date('d/m/Y');
echo "<p>Hoje é: $dataAtual</p>";
?>
<form method="post" action="processar_dados.php">
    <label for="caixa">Nº do Aluno:</label>
    <input type="text" name="caixa" required><br><br>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br><br>
    <label for="curso">Curso:</label>
    <select id="curso" name="curso" required>
        <option value="">Selecione um curso</option>
        <option value="Ensino Médio Regular">Ensino Médio Regular</option>
        <option value="Ensino Fundamental">Ensino Fundamental</option>
        <option value="EJA/NEJA">EJA/NEJA</option>
        <!-- Adicione mais opções de cursos aqui -->
    </select><br><br>
    <input type="submit" value="Enviar">
    <p><a href = "inicio.php">Voltar ao Início</a></p>
</form>
</body>
</html>
