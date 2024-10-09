<?php
$paginas = array(
    array("index.php", "Apresentação"),
    array("normasPublicacao.php", "Normas de Publicação"),
    array("../anais/", "Anais do Evento"),
    array("corpoEditorial.php", "Corpo Editorial"),
    array("../fotos/", "Fotos"),
    array("../2022/", "SETIF 2022"),
);
$url = explode("/", $_SERVER['REQUEST_URI']);
$paginaAtual = end($url);
?>

<nav class="navbar navbar-expand-lg fixed-top gradiente-navbar p-0">
    <div class="container-fluid">
        <a class="navbar-brand p-0" href="index.php">
            <img src="imagens/logoNav.png" alt="Logo" class="img-fluid" style="height: 100px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="nav nav-tabs justify-content-between w-100">

                <?php
                foreach ($paginas as $pagina) {
                    ?>
                <li class="nav-item col-6 col-sm-3 col-md-2 text-center">
                    <a class="nav-link-personalizado nav-link <?php if ($pagina[0] == $paginaAtual)
                            echo "active";
                        else
                            echo "text-white"; ?>" aria-current="page" href="<?= $pagina[0] ?>">
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