<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
include_once LIB_CONTROLLER . DS . 'IndexController.class.php';

$controller = new IndexController();
$dados = $controller->getDadosPaginaInstitucional(2024);
?>

<footer class="container-fluid bg-success text-white text-center rodape">
    <div class="row">
        <div class="col-12 fs-3">
            <i class="bi bi-person-fill py-1 "></i>Contatos
        </div>
    </div>
    <div class="row border-bottom py-1 fs-6">
        <div class="col-12 col-sm-6">
            <i class="bi bi-envelope-at-fill"></i>
            <?= $dados->getEmail() ?>
        </div>
        <div class="col-12 col-sm-6">
            <i class="bi bi-telephone-fill"></i>
            <?= $dados->getTelefone() ?>
        </div>
    </div>
    <p class="small py-1 m-0">© SETIF 2023 - Desenvolvido por Giovanna Bernadelli e Maria Eduarda F. Bruning </p>
</footer>