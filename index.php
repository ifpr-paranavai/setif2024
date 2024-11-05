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
    <?php include_once LIB_INCLUDES_2024 . DS . 'metadados.php' ?>
</head>

<body>
    <?php
    include_once LIB_INCLUDES_2024 . DS . 'navbar.php';
    ?>

    <section class="p-5">
    </section>


    <section class="seção-principal p-5 text-center">
    <div class="d-flex flex-column align-items-center">
        <img src="imagens/Logo_setif.png" alt="Logo SETIF" class="logo_setif">
        <div class="botoes d-flex flex-column flex-md-row justify-content-center mt-3">
            <button class="inscricao me-md-3 mb-2 mb-md-0" onclick="window.location.href='https://www.even3.com.br/setif-2024/'">Inscreva-se</button>
            <button type="button" class="saiba-mais" data-bs-toggle="modal" data-bs-target="#eventoModal">
                Saiba mais
            </button>
        </div>
    </div>
</section>

<div class="modal fade" id="eventoModal" tabindex="-1" aria-labelledby="eventoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-below-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventoModalLabel">Informações do Evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p>A Semana de Tecnologia da Informação 
                    do IFPR Campus Paranavaí (SETIF 2024) ocorrerá 
                    de 3 a 7 de dezembro, oferecendo minicursos, 
                    palestras, competições e uma mostra de trabalhos
                     acadêmicos. O evento é gratuito e acontecerá 
                     presencialmente e online, reunindo estudantes e 
                     profissionais para discussões e práticas na área de TI.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>



    <section class="parallax-programacao h-100">
        <div class="container py-5">
            <div class="frame-programacao rounded-3 p-4" style="height: 700px; width: 100%;">
                <div class="d-flex flex-row justify-content-center mb-4">
                    <div class="card-programacao" style="width: 18rem;">
                        <div class="card-body">
                            <h1 class="text-black fw-lighter fs-4 text-center">
                                PROGRAMAÇÃO <i class="bi bi-calendar"></i>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="programacao-content">
                    <?= $dados->getProgramacao() ?>
                </div>
            </div>
        </div>
    </section>

    <section class="count-date mb-5">
        <div class="contagem-regressiva">
            <h2>Início do Evento</h2>
            <div id="contador">
                00 : 00 : 00 : 00
            </div>
        </div>
    </section>

    <section class="h-100">
        <?= $dados->getLocalizacao() ?>
    </section>
    </main>
    <?php include_once LIB_INCLUDES_2024 . DS . 'rodape.php' ?>
    <?php include_once LIB_INCLUDES_2024 . DS . 'scripts.php' ?>
</body>

</html>