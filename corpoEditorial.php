<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
include_once LIB_CONTROLLER . DS . 'CorpoEditorialController.class.php';
$controller = new CorpoEditorialController();
$membros = $controller->getCorpoEditorialPorAno(2024);
foreach ($membros as $membro) {
    if ($membro->getFuncao() == CorpoEditorial::FUNCAO_PRESIDENTE) {
        $presidente = $membro->getNome();
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Corpo Editorial</title>
    <?php include_once LIB_INCLUDES_2024 . DS . 'metadados.php' ?>
</head>

<body>
    <?php include_once LIB_INCLUDES_2024 . DS . 'navbar.php' ?>

    <main class="container-fluid text-center mt-5 pt-4">
        <div class="row border-bottom mt-5">
            <div class="col-12">
                <h2 class="py-3">
                    Presidente
                </h2>
                <p class="py-1 fs-4"><?= $presidente ?></p>
            </div>
        </div>
        <div class="row border-bottom">
            <div class="col-12">
                <h2 class="py-3">
                    Comitê Organizador da SETIF
                </h2>
                <?php
                foreach ($membros as $membro):
                    if ($membro->getFuncao() == CorpoEditorial::FUNCAO_SERVIDOR):
                        ?>
                <p class="py-1 fs-4"><?= $membro->getNome(); ?></p>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="py-3">
                    Membros Discientes
                </h2>
                <?php
                foreach ($membros as $membro):
                    if ($membro->getFuncao() == CorpoEditorial::FUNCAO_DISCENTE):
                        ?>
                <p class="py-1 fs-4"><?= $membro->getNome(); ?></p>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
        </div>
    </main>
    <?php include_once LIB_INCLUDES_2024 . DS . 'rodape.php' ?>
    <?php include_once LIB_INCLUDES_2024 . DS . 'scripts.php' ?>
</body>

</html>