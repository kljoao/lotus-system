<?php
    include('../functions/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Sicoob Empresas - Lotus</title>
    <!-- LINKS FONT AWESOME / SWEET ALERTS -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- LINKS FONT AWESOME / SWEET ALERTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="/../style.css">
</head>

<body class="choose-body">

    <header class="choose-header">

        <nav class="choose-nav">
            <div class="choose-nav-container">
                <a href="index.html"><img src="../img/empresas.png" alt="" width="150px"></a>

                <div>
                    <ul class="choose-nav-list">
                        <li>
                            <a href="../index.html">Início</a>
                        </li>
                        <li>
                            <a href="pages/ramais.html">Ramais</a>
                        </li>
                        <li>
                            <a href="https://app.pipefy.com/public/form/qzIn9XqR" target="_blank">Helpdesk</a>
                        </li>
                        <li>
                            <a href="#" class="stop-thing">Tutoriais</a>
                        </li>
                        <li>
                            <a href="#" class="stop-thing">Novidades</a>
                        </li>
                        <li>
                            <a href="#" class="stop-thing">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div>
                <div class="session-name-container">
                    <p class="session-name">Bem vindo(a), <?php echo $_SESSION['nome']?></p>
                    <span class="material-symbols-outlined expand-session" style="color: white;">
                        expand_more
                    </span>
                </div>

                <div class="session-dropdown">
                    <ul>
                        <li><a href="#" style="color: white;">Inicio</a></li>
                        <li class="session-name"><a href="#">Meu Perfil</a></li>
                        <li class="session-name"><a href="#">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="index-apresent">
        <img src="../img/logo-prince.png" alt="">
        <p class="medium-white-normal">Bem vindo ao sistema Lotus do Sicoob Empresas.<br>
             Aqui você pode acessar todos os principais sistemas da empresa.</p>

             <div class="index-btn">
                <button class="small-white-normal btnPrincipal">Acessar Tutoriais</button>
                <button class="small-white-normal btnSecond">Relatar Problemas</button>
             </div>
    </section>

    <main class="choose-main-container">

        <div class="choose-main-text">
            <h1 class="big-white-normal">Pintou uma Emergência?<br> Use um dos <span class="detalhe">Ramais</span></h1>
            <p class="small-gray-normal">O ramal só deverá ser usado em último caso (emergências),<br>
            utilize outras formas de contato, como e-mail ou whatsapp.</p>

            <div class="choose-main-ramal">
                <button class="btnPrincipal"><a href="pages/ramais.html" class="small-white-normal">Acessar Ramais</a></button>
                <button class="btnSecond"><a href="assets/tutoriais/Ramais.pdf" target="_blank" class="small-white-normal">Ver Tutorial</a></button>
            </div>
        </div>

        <div>
            <img src="../img/ramal.svg" class="ramais-img" alt="" width="500px">
        </div>

    </main>

    <footer class="footer">

        <div class="footer-container">
            <img src="../img/logo.png" alt="" width="200px">
        </div>

        <div>
            <ul class="choose-nav-list ispace">
                <li>
                    <a href="../index.html">Início</a>
                </li>
                <li>
                    <a href="pages/ramais.html">Ramais</a>
                </li>
                <li>
                    <a href="#" class="stop-thing">Helpdesk</a>
                </li>
                <li>
                    <a href="#" class="stop-thing">Tutoriais</a>
                </li>
                <li>
                    <a href="#" class="stop-thing">Novidades</a>
                </li>
                <li>
                    <a href="#" class="stop-thing">FAQ</a>
                </li>
            </ul>
        </div>

    </footer>

    <script src="../script.js"></script>
    <script src="../assets/javascript/choose.js"></script>
</body>

</html>

<button><a href="../functions/logout.php">Logout</a></button>