<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Doces e CIA</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>

    <?php

    ?>

    <header>
        <nav>
            <ul>

                <nav class="navbar navbar-light bg-light">
                    <form class="container-fluid justify-content-start">

                        <a href="index.php?pagina0=pages/home.php"><button class="btn btn-outline-success me-1" type="button">Home</button>
                            <a href="index.php?pagina1=dados/quem.php"><button class="btn btn-outline-success me-2" type="button">Quem Somos</button></a>
                            <a href="index.php?pagina2=pages/local.php"><button class="btn btn-outline-success me-3" type="button">Localização</button></a>
                            <a href="index.php?pagina3=pages/contat.php"><button class="btn btn-outline-success me-4" type="button">Contato</button></a>

            </ul>
        </nav>

    </header>

    <main>

        <?php

        if (isset($_GET["pagina0"]) && !empty($_GET["pagina0"])) {
            $pagina0 = $_GET["pagina0"];
            include($pagina0);
        } else {
            //
        }

        if (isset($_GET["det1"]) && !empty($_GET["det1"])) {
            $det1 = $_GET["det1"];
            include($det1);
        } else {
            //
        }

        if (isset($_GET["det2"]) && !empty($_GET["det2"])) {
            $det2 = $_GET["det2"];
            include($det2);
        } else {
            //
        }
        if (isset($_GET["det3"]) && !empty($_GET["det3"])) {
            $det3 = $_GET["det3"];
            include($det3);
        } else {
            //
        }
        ?>

        <?php
        if (isset($_GET["pagina1"]) && !empty($_GET["pagina1"])) {
            $pagina1 = $_GET["pagina1"];
            include($pagina1);
        } else {
            //
        }
        ?>

        <?php

        if (isset($_GET["pagina2"]) && !empty($_GET["pagina2"])) {
            $pagina2 = $_GET["pagina2"];
            include($pagina2);
        } else {
            //
        }

        if (isset($_GET["pagina3"]) && !empty($_GET["pagina3"])) {
            $pagina3 = $_GET["pagina3"];
            include($pagina3);
        } else {
            //
        }
        ?>

    </main>

    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #6351ce;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h4 class="mb-0">LIFESTYLE GASTRONOMICO</h4>
                    </div>

                    <div class="col-md-6 col-lg-7 text-center text-md-right"></div>
                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">DADOS ACADEMICOS</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Lázaro Alves Alecrim, faculdade Unicesumar inserido no
                        módulo 53 do curso, RA 21143757-5 
                        CURSO SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET.</p>

                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">MAIS INFORMAÇÕES</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i>Servidão Caiçara, 43E
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>lazaroalvess@hotmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>+55(49) 9 8431-2366
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i>Chapecó, SC
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a> LázaroDeveloper</a>
        </div>
        <!-- Copyright -->

    </footer>

</html>