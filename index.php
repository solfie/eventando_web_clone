<!-- Aqui iniciamos o código html -->
<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale = 1, maximum-scale = 1">
	<!-- Icons -->
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
	<!-- Bootstrap -->
	<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin = "anonymous">
	<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin = "anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<!-- CSS externo -->
    <link rel="stylesheet" href="css/css_header.css">
	<link rel = "stylesheet" type = "text/css" href = "css/css_index.css"/>
	<!-- Definimos o título da página -->
	<title> HOME </title>
    <!-- Definimos o ícone na aba da página-->
	<link rel="shortcut icon" type="image/png" href="img/schedule (2).png"/>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid row d-flex justify-content-around align-items-center">
                <div class="div-img col-3 navbar-brand d-flex justify-content-center align-items-center" href="#">
                    <img class="logo-header img-fluid ms-5 ms-md-0 mt-xl-4" src="./img/logo.png">
                </div>
                <div class="col-3 navbar-brand d-md-none d-flex justify-content-end div-pesquisar">
                    <button class = "btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <div class="col-6 navbar-brand d-md-flex d-none justify-content-center align-items-center" href="#">
                    <form class="d-flex mb-0 form-pesquisar">
                        <input class="form-control me-2" type="search" placeholder="Buscar eventos" aria-label="Search"/>
                        <button class="btn" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <button class="col-2 navbar-toggler btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-2 collapse navbar-collapse justify-content-end mt-0" id="navbarNavAltMarkup">
                    <div class="navbar-nav teste-3">         
                        <div class="nav-link">
                            <a href = "login.php"> 
                                <button class="btn-criar-evento"> 
                                <i class="fa-regular fa-calendar-plus"></i>
                                &nbsp;CRIAR EVENTO </button>
                            </a>
                        </div>
                        <div class="nav-link">
                        <a href = "login.php">
                            <button class = "btn btn-login">
                                <i class = "fa fa-arrow-right-to-bracket"></i> 
                                &nbsp;LOGIN
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="m-5">
        <p class="eventosR">EVENTOS RECENTES</p>
        <div class = "barraE">
            <img class="img-fluid evento" src="img/evento1.jpeg" alt="evento1">
            <img class="img-fluid evento" src="img/evento2.jpeg" alt="evento2">
            <img class="img-fluid evento" src="img/evento3.jpeg" alt="evento3">
            <img class="img-fluid evento" src="img/evento4.jpeg" alt="evento4">
            <img class="img-fluid evento" src="img/evento5.jpeg" alt="evento5">
            <img class="img-fluid evento" src="img/evento6.jpeg" alt="evento6">
            <img class="img-fluid evento" src="img/evento7.jpeg" alt="evento7">
            <img class="img-fluid evento" src="img/evento8.jpeg" alt="evento8">
            <img class="img-fluid evento" src="img/evento9.jpeg" alt="evento9">
            <img class="img-fluid evento" src="img/evento10.jpg" alt="evento10">
            <img class="img-fluid evento" src="img/evento11.jpg" alt="evento11">
            <img class="img-fluid evento" src="img/evento12.jfif" alt="evento12">
            <img class="img-fluid evento" src="img/evento13.jfif" alt="evento13">
        </div>
    </div>

    <!-- Criamos uma div, onde colocamos na label o slogan e um pouco sonbre o site -->
    <div class = "container-fluid row ps-5 mt-5">
        <div class = "col-4 mt-3">
            <p id = "slogan"> CRIE AGORA<br>O SEU<br>EVENTO &rarr;</p>
            <p id = "sobre" class="mt-4"> Organize seus eventos de maneira prática!<br>Essa ferramenta te ajuda a PLANEJAR, <br>GERENCIAR e EXECUTAR seus eventos <br>PRESENCIAIS ou VIRTUAIS.</p>
        </div>

        <div class = "col-8 mt-3">
            <!-- adicionamos uma imagem "estética" -->	
            <img class = "img-fluid" id = "fotosIniciais" src = "img/fotosIniciais.png" alt = "fotosIniciais">
        </div>
    </div>
    
	<!-- Criamos um footer -->
    <footer class="mt-5 mb-0">
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: #cfcfd1">
            © 2023 From Nozes

            <!-- Youtube -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39; border: none; border-radius: 8px;" href="https://youtube.com/@eventando?si=ykYjtu4G9KHIxp-V" target="_blank" role="button">
                <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
            </a>

            <!-- Instagram -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac; border: none; border-radius: 8px;" href="https://www.instagram.com/eventando.nozes/" target="_blank" role="button">
                <i class="fab fa-instagram"></i>
            </a>

            <!-- E-mail -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee; border: none; border-radius: 8px;" href="mailto:eventando.nozes@gmail.com" target="_blank" role="button">
                <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
            </a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>
</html>