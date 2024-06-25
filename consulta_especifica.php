<?php
require('require.php');
include('funcao.php');

cabecalho();

$user = $_SESSION['MeuLogin']['login'];
$idUsu = $_SESSION['MeuLogin']['idUsu'];
$categoria_id = $_SESSION['MeuLogin']['categoria_id'];
$usuario_ativo = $_SESSION['MeuLogin']['usuario_ativo'];
?>

<form method="post" action="consulta_aluno.php" name="consulta_especifica">
    <h1>Cadastro de Aluno - Consulta Específica</h1>
    <?php
    // Exemplo de código PHP embutido para mostrar a data atual
    $dataAtual = date('d/m/Y');
    echo "<p>Hoje é: $dataAtual</p>";
    ?>
    <table class='tabela'>
        <tr>
            <td>
                <fieldset>
                    <legend>
                        Consulta Aluno
                    </legend>
                    <label class="mySection" for="nome_aluno">Nome do Aluno:</label><br>
                    <input type="text" name="nome_aluno"/><br>
                    <div>
                        <br />
                        <input type='submit' value='Consultar'>
                    </div>
                </fieldset>
                <p><a href = 'inicio.php'>Menu Inicial</a></p>
            </td>
        </tr>
    </table>
</form>
</body>
</html>