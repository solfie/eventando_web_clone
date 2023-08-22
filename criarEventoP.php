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
	<link rel = "stylesheet" type = "text/css" href = "css/css_criarEventoP.css" />
    <!-- JS externo-->
    <script src="js/js_criarEventoP.js" defer></script>
	<!-- Definimos o título da página -->
	<title> CRIAR EVENTO PRESENCIAL </title>
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
                <div class="col-2 navbar-brand justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav teste-3">         
                        <div class="nav-link">
                            <a href = "menu.php">
                                <i class="fa-solid fa-house fa-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

	<div class="container-fluid mt-5 ms-0 d-flex justify-content-start titulo">
		<p class="ms-3">INFORMAÇÕES DO EVENTO</p>
	</div>
    <div class="container-fluid d-flex p-0 bagulhete">
        <div class="div_passos">
            <div class="passo1 mb-2">
                <p class="m-0">PASSO 1</p>
            </div>
            <div class="passo2 mb-2">
                <p class="m-0">PASSO 2</p>
            </div>
            <div class="passo3">
                <p class="m-0">PASSO 3</p>
            </div>
        </div>
        <div class="w-100">
            <div class="div-form">
                <form class="d-flex">
                    <div>
                        <div class="ms-5 div-img">
                            <label class="imagem" for="file">FOTO DO EVENTO</label>
                            <input id="file" type="file"/>
                        </div>
                        <div class="endereco">
                            <label for="cep" class="mb-3 localizacao">Localização:</label>
                            <div class="d-flex justify-content-between cep-estado">
                                <input id="cep" class="form-control" placeholder="CEP"/>
                                <input placeholder="Estado" class="form-control" readonly/>
                            </div>
                            <div class="d-flex flex-column">
                                <input placeholder="Cidade" class="form-control" readonly/>
                                <input placeholder="Bairro" class="form-control" readonly/>
                            </div>
                            <div>
                                <input placeholder="Logradouro" class="log" readonly/>
                                <!-- <input placeholder="Logradouro" class="form-control log" readonly/> -->
                                <input placeholder="N°" class="num"/>
                                <!-- <input placeholder="N°" type="number" class="num form-control"/> -->
                            </div>
                        </div>
                    </div>
                    <div class="ms-5 lado2">
                        <div>
                            <input placeholder="Objetivo do evento" class="obj form-control"/>
                        </div>
                        <div class="d-flex align-items-center datetime">
                            <input class="form-control" type="text" id="date" placeholder="Data Prevista" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <label class="ms-0 me-0 h">Horário:</label>
                            <input class="horario form-control" type="time"/>
                            <!-- <input class="form-control horario" type="text" id="time" placeholder="Horário" onfocus="(this.type='time')" onblur="(this.type='text')"/> -->
                        </div>
                        <div class = "mt-3">
                            <label class="mt-5 mb-3 complemento" for="buffet">Complementos:</label>
                            <div class="d-flex justify-content-between">
                                <input id="buffet" placeholder="Buffet" class="buffet form-control"/>
                                <input placeholder="Atrações" class="atracoes form-control"/>
                                <!-- <textarea id = "buffet" placeholder="Buffet" class="buffet"></textarea>
                                <textarea placeholder="Atrações" class="atracoes"></textarea> -->
                            </div>
                            <div class="d-flex justify-content-between">
                                <select class="form-select info">
                                    <option>Tipo de Contato</option>
                                    <option>Telefone</option>
                                    <option>E-mail</option>
                                    <option>Instagram</option>
                                    <option>Tik Tok</option>
                                </select>
                                <input class="info form-control" placeholder="Contato"/>
                            </div>
                            <div id="privacidade" estado="publico" class="mt-4 d-flex publico_privado">
                                <i class="mt-2 fa-solid fa-lock-open fa-flip-horizontal fa-xl" style="color: #b25abf;"></i>
                                <p class="ms-2 pp">Público</p>
                            </div>
                            <!-- <button type="submit" class="botao">&#10140; PRÓXIMO PASSO</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>