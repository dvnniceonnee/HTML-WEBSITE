<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worten</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon">

    <!--BootStrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->

    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- MEU CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="text-center sticky-top">
        <img src="img/logotipo.jpg" alt="">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-nos.html">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produtos.html">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="promocoes.html">Promoções</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contactos.html">Contactos</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 rounded" type="search" placeholder="O que estás à procura"
                            aria-label="Search">
                        <button class="btn d-inline-flex" type="submit"><i class="bi bi-search me-2"></i>Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="mb-2 p-3 rounded shadow">
        <div class="container">
            <div class="row ">
                <!-- Mapa -->
                <div class="col-12 col-md-6">
                    <iframe id="googleMaps" class="w-100 rounded-3 border border-primary" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48056.6463906372!2d-8.67990449176296!3d41.16637910167289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2465f41da3e0fd%3A0xf4dfb56e4460e634!2sWorten!5e0!3m2!1spt-PT!2spt!4v1709828803654!5m2!1spt-PT!2spt" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>                
                </div>
                <!-- Dados Loja-->
                <div class="col-12 col-md-6 my-auto text-center">
                    <div class="row">
                        <div class="col">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <span>Norte Shopping, R. Sara Afonso 112 Loja 112</span>
                           <span>4460-841 Sra. da Hora</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <i class="bi bi-clock"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span>Domingo a 5ª: 10:00 - 23:00 6ª e Sábado: 10:00 - 23:59</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Form de contacto -->
            <div class="row mt-3 text-center">
                <div class="col "><!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Fale connosco!
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade text-start" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario de contacto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Insira o seu Email">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Insira a sua mensagem" rows="3"></textarea>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn">Enviar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="container-fluid text-center">
        <div class="row p-3">
            <div class="col-12 col-md-6 p-2">
                <p class="my-auto">© WORTEN - EQUIPAMENTOS PARA O LAR, S.A</p>
            </div>
            <div class="col-12 col-md-6 p-2 ">
                <a href="https://www.facebook.com/wortenpt/" target="_blank" class="mx-2"><i class="bi bi-facebook"></i></a>
                <a href="https://twitter.com/WortenPT" target="_blank" class="mx-2"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.instagram.com/wortenpt/?hl=pt" target="_blank" class="mx-2"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQF783PmSx4HCwAAAY4Tn0mwR12DeHTWifTVUbsYZ1fI-_RwUpiqPb2QXZh4Po3vtpLyhxgMFLgfLuQeOmsZBHfZPf9uuusf5AciW_jaftvlKkCtNus3G2lykG7ywkx4jR-Ow1U=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fworten%2F" target="_blank" class="mx-2"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.twitch.tv/wortenpt" target="_blank" class="mx-2"><i class="bi bi-twitch"></i></a>
                <a href="https://www.youtube.com/c/worten" target="_blank" class="mx-2"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </footer>
    <!-- BootStrap JS -->
    <script src="js/bootstrap.bundle.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->

    <!-- MEU JS -->
    <script src="js/main.js"></script>
</body>

</html>