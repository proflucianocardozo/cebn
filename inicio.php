<?php
require('require.php');
include('funcao.php');

cabecalho();

$user = $_SESSION['MeuLogin']['login'];
$idUsu = $_SESSION['MeuLogin']['idUsu'];
$categoria_id = $_SESSION['MeuLogin']['categoria_id'];
$usuario_ativo = $_SESSION['MeuLogin']['usuario_ativo'];
?>
<section>
    <div>
        <nav>
            <!--        <div>
                        <img src="imagem/circulo_orquidea_logo_vale2.png" width="120" height="80" alt=""/>
                    </div>-->
            <ul>
                <li class="myLi">
                    <div>
                        <a href="<?php url_quadra(); ?>formulario_aluno.php"><img src="imagem/cadastrar_aluno.png" alt=""/></a>
                    </div>
                </li>
                <li class="myLi">
                    <div>
                        <a href="<?php url_quadra(); ?>consulta_geral.php"><img src="imagem/consulta_geral.png" alt=""/></a>
                    </div>
                </li>
                <li class="myLi">
                    <div>
                        <a href="<?php url_rua(); ?>consulta_especifica.php"><img src="imagem/consulta_especifica.png" alt=""/></a>
                    </div>
                </li>
                <li class="myLi">
                    <div>
                        <a href="index.php"><img src="imagem/sair.png" alt=""/></a>

                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!--    <article>
            <p>Este sistema é para uso do Professores Formadores da SEEDUC-RJ.</p>
            <p>É disponibilizado para criação de cards com conteúdo pedagógico direcionados a Coordenadores Pedagógicos, Orientadores Pedagógicos e Professores.</p>
        </article>-->
</section>
<?php rodape($user); ?>
</div>