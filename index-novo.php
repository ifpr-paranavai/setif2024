<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
include_once LIB_CONTROLLER . DS . 'IndexController.class.php';

$controller = new IndexController();
$dados = $controller->getDadosPaginaInstitucional(2024);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Apresentação</title>
    <?php include_once LIB_INCLUDES_2024 . DS . 'metadados-novo.php' ?>
</head>

<body>
    <?php
    include_once LIB_INCLUDES_2024 . DS . 'navbar-novo.php';
    ?>
    <main class="principal">
        <section class="parallax-sobre h-100">
            <div class="logosetif">
                <img class="img-fluid" style="max-width: 60%" src="imagens/setifLogo.png" />
            </div>
            <div class="container text-white">
                <h1 class="fs-1 font-weight-bold m-5 p-3 text-uppercase text-center">
                    Sobre o Evento
                </h1>
                <?= $dados->getTextoSobre() ?>
            </div>
        </section>


        <section class="parallax-programacao h-100">
            <div class="container py-5">
                <div class="frame-programacao rounded-3 p-4" style="height: 700px; width: 100%;">
                    <div class="d-flex flex-row justify-content-center mb-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h1 class="text-black fw-lighter fs-4 text-center">
                                    PROGRAMAÇÃO <i class="bi bi-calendar"></i>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <?= $dados->getProgramacao() ?>
                </div>
            </div>
        </section>
        <section class="parallax-localizacao h-100">
            <div class="bg-white bg-opacity-50 p-2 text-center">
                <div class="d-flex flex-row justify-content-center my-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h1 class="text-black fw-lighter fs-4 text-center">
                                LOCALIZAÇÃO <i class="bi bi-geo-alt"></i>
                            </h1>
                        </div>
                    </div>
                </div>
                <?= $dados->getLocalizacao() ?>
            </div>
        </section>
    </main>
    <?php include_once LIB_INCLUDES_2024 . DS . 'rodape.php' ?>
    <?php include_once LIB_INCLUDES_2024 . DS . 'scripts.php' ?>
</body>

</html>