<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
include_once LIB_CONTROLLER . DS . 'IndexController.class.php';

$controller = new IndexController();
$dados = $controller->getDadosPaginaInstitucional(2024);
?>

<footer class="bg-body-secondary pt-5 pb-2">
    <div class="footer-container">
        <div class="row py-1 fs-6 footer-section">
            <div class="col-12 col-sm-6">
                <h3>Sobre Nós</h3>
                <p class="py-2">Os Institutos Federais de Educação, Ciência e
                    Tecnologia (IFs) são instituições públicas federais
                    que oferecem educação profissional e tecnológica em
                    todos os níveis e modalidades.</p>
                <i class="bi bi-envelope-at-fill"></i>
                <?= $dados->getEmail() ?> </br>
                <i class="bi bi-telephone-fill"></i>
                <?= $dados->getTelefone() ?>
            </div>
            <div class="col-12 col-sm-6">
                <h3>Links Úteis</h3>
                <ul>
                    <a href="index.php">
                        <li>Início</li>
                    </a>
                    <a href="mostraTrabalhos.php">
                        <li>Mostra de trabalhos</li>
                    </a>
                    <a href="normasPublicacao.php">
                        <li>Submeter</li>
                    </a>
                    <a target="_brank" href="https://www.even3.com.br/setif-2024/">
                        <li>Inscreva-se</li>
                    </a>
                    <a target="_brank" href="https://eswifpr.tecnoif.com.br/">
                        <li>Curso de Engenharia de Software</li>
                    </a>
                    <a target="_brank" href="https://infoifpr.tecnoif.com.br/">
                        <li>Curso Técnico em Informática</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <p class="small py-1 m-0 text-center">© SETIF 2024 - Desenvolvido por Felipe Soares e Luiz Gustavo </p>

</footer>