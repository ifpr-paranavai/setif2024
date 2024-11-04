<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
include_once LIB_CONTROLLER . DS . 'NormasPublicacaoController.class.php';
include_once LIB_UTIL . DS . 'Funcoes.class.php';
$controller = new NormasPublicacaoController();
$normas = $controller->getNormasPublicacao('2024');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Normas de Publicação</title>
    <?php include_once LIB_INCLUDES_2024 . DS . 'metadados.php' ?>
</head>

<body>
    <?php include_once LIB_INCLUDES_2024 . DS . 'navbar.php' ?>

    <section class="spacer-top p-5">
    </section>

    <section class="normas-intro p-5 text-center">
        <div class="container">
            <h2>Normas de Publicação</h2>
            <p class="fs-5">Aqui você encontra todas as diretrizes para a submissão de trabalhos no SETIF 2024.</p>
        </div>
    </section>

    <section class="container-fluid normas-datas py-5">
        <div class="row border-bottom">
            <div class="col-12 col-md-6 text-center normas-datas-bg p-4 text-white">
                <h2><i class="bi bi-calendar-check"></i> Datas Importantes</h2>

                <div class="mt-4">
                    <h4>Data limite para a cadastro de trabalhos:</h4>
                    <div class="alert alert-secondary text-lowercase text-decoration-line-through">
                        <?= Funcoes::getDataPorExtenso($normas->getDataLimite()) ?>
                    </div>
                    <div class="alert alert-danger text-lowercase">
                        14 de novembro de 2024
                    </div>
                </div>
                <div class="mt-4">
                    <h4>Data limite para a <em>upload</em> dos arquivos:</h4>
                    <div class="alert alert-danger text-lowercase">
                        17 de novembro de 2024
                    </div>
                </div>

                <div class="mt-4">
                    <h4>Notificação aos autores:</h4>
                    <div class="alert alert-danger text-lowercase">
                        <?= Funcoes::getDataPorExtenso($normas->getDataNotificacaoAutor()) ?>
                    </div>
                </div>

                <div class="mt-4">
                    <h4>Submissão da versão final:</h4>
                    <div class="alert alert-danger text-lowercase">
                        <?= Funcoes::getDataPorExtenso($normas->getDataVersaoFinal()) ?>
                    </div>
                </div>

                <div class="mt-4">
                    <h4>Evento:</h4>
                    <p class="fs-5 text-lowercase">
                        <?= Funcoes::getDataPorExtenso($normas->getDataInicioEvento()) ?> à
                        <?= Funcoes::getDataPorExtenso($normas->getDataFinalEvento()) ?>
                    </p>
                </div>

                <div class="mt-4">
                    <h4>Data prevista da mostra de trabalhos:</h4>
                    <p class="fs-5 text-lowercase">
                        <?= Funcoes::getDataPorExtenso($normas->getDataMostraTrabalho()) ?>
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 p-4 text-secondary normas-submissao">
                <h2>Submissão</h2>
                <p class="fs-5">No sistema, cada submissão deve ser feita em duas etapas:</p>
                <ol>
                    <li>Clique em "Enviar Submissão" para cadastrar o artigo e autores (salve o ID e senha).</li>
                    <li>Clique em "Enviar Arquivo" para fazer upload do artigo em PDF.</li>
                </ol>
                <p class="fs-5">Sistema de submissão: <a href="https://tecnoif.com.br/sistemas/openconf/openconf.php"
                        target="_blank" class="btn btn-outline-success">Clique aqui</a></p>

                <h2 class="mt-4">Artigos completos</h2>
                <p class="fs-5">Os artigos completos devem ter no máximo 12 páginas, seguindo o modelo da SBC:</p>
                <ul>
                    <li>LaTeX: <a href="https://www.overleaf.com/latex/templates/sbc-conferences-template/blbxwjwzdngr"
                            target="_blank" class="btn btn-outline-success">Ver template no Overleaf</a></li>
                    <li class="mt-2">Modelo SBC .doc: <a
                            href="https://drive.google.com/file/d/1H_29Hg5N534qOTwKOwnVMRWEDHZgIFMv/view"
                            class="btn btn-outline-success">Baixar template .doc</a></li>
                </ul>

                <h2 class="mt-4">Resumos</h2>
                <p class="fs-5">Os resumos devem ter 3 páginas e estar formatados de acordo com o modelo SBC:</p>
                <ul>
                    <li>LaTeX: <a href="https://www.overleaf.com/latex/templates/sbc-conferences-template/blbxwjwzdngr"
                            target="_blank" class="btn btn-outline-success">Ver template no Overleaf</a></li>
                    <li class="text-danger">Não incluir abstract no modelo LaTeX</li>
                    <li class="mt-2">Modelo SBC .doc: <a
                            href="https://drive.google.com/file/d/1H_29Hg5N534qOTwKOwnVMRWEDHZgIFMv/view"
                            class="btn btn-outline-success">Baixar template .doc</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container text-center normas-apresentacao my-5">
        <h2 class="py-3">Apresentação</h2>
        <p class="fs-4">Os trabalhos aceitos deverão ser apresentados no SETIF 2024 em apresentação oral presencial.
            Detalhes sobre a agenda serão divulgados após a revisão dos trabalhos.</p>
        <h2 class="py-3"><i class="bi bi-clock"></i> Tempo de Apresentação</h2>
        <p><?= $normas->getTempoApresentacaoResumo() ?> minutos para resumos,
            <?= $normas->getTempoApresentacaoArtigo() ?> minutos para artigos completos.</p>
    </section>

    <section class="normas-topicos text-white py-5">
        <div class="container">
            <h2 class="text-center py-3">Tópicos de Interesse</h2>
            <div class="row">
                <?php
                $topicosDeInteresses = $controller->getTopicosDeInteresse();
                foreach ($topicosDeInteresses as $topicoDeInteresse):
                    ?>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 my-3">
                    <div class="card text-bg-dark rounded-4 topico-card" style="width: 100%">
                        <img src="<?= $topicoDeInteresse->getLinkImagem() ?>" class="card-img rounded-4 opacity-25">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <p class="text-center fs-5"><?= $topicoDeInteresse->getNome() ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include_once LIB_INCLUDES_2024 . DS . 'rodape.php' ?>
    <?php include_once LIB_INCLUDES_2024 . DS . 'scripts.php' ?>
</body>

</html>