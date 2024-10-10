<?php
$paginas = array(
    array("index.php", "Início"),
    array("projetos.php", "Mostra de Trabalhos"),
    array("normasPublicacao.php", "Submissão"),
    array("../anais/", "Anais do Evento"),
    array("corpoEditorial.php", "Corpo Editorial"),
    array("../2023/", "SETIF 2022"),
);
$url = explode("/", $_SERVER['REQUEST_URI']);
$paginaAtual = end($url);
?>

<nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="imagens/logo_if.png" alt="Logo IFPR" class="img-fluid" style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <?php
                foreach ($paginas as $pagina) {
                    ?>
                    <li class="nav-item col-6 col-sm-3 col-md-2 text-center align-items-center flex-grow-1 p-1">
                        <a class="btn btn-outline-secondary h-100 d-flex align-items-center justify-content-center <?php if ($pagina[0] == $paginaAtual)
                            echo "active";
                        else
                            echo ""; ?>" aria-current="page" href="<?= $pagina[0] ?>">
                            <?= $pagina[1] ?>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>