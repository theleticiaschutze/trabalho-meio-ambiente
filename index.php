<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcoVida - Economia Circular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#topo"><i class="bi bi-globe-americas"></i> EcoVida</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#economia">Economia Circular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reciclagem">Reciclagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#impactos">Impactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#descarte">Descarte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#enderecos">Endereços</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- BANNER -->
    <div class="container-fluid p-0">
        <img src="imagem/riobonito.jpg" class="img-fluid w-100 banner">
    </div>
    <header class="container text-center mt-5">
        <h1>Descarte Correto: Transformando lixo em oportunidade</h1>
        <p class="lead">
            Aprenda sobre economia circular e descubra como pequenas atitudes ajudam o planeta.
        </p>
    </header>
    <section id="economia" class="container mt-5">

        <h2 class="text-center">
            O que é Economia Circular?
        </h2>
        <p class="text-center text-muted">
            Um modelo sustentável para reduzir desperdícios e preservar recursos naturais.
        </p>
        <div class="row align-items-center mt-4 g-4">
            <div class="col-md-6">
                <p>
                    Economia circular busca reduzir desperdícios,
                    reutilizar materiais e manter recursos em uso
                    pelo maior tempo possível.
                </p>
                <div class="row mt-4 align-items-stretch g-4">
                    <div class="col-md-6">
                        <div class="card p-3 text-center h-100">
                            <h5>Economia Linear</h5>
                            <p>Extrair → Produzir → Consumir → Descartar</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 text-center h-100">
                            <h5>Economia Circular</h5>
                            <p>Reduzir → Reutilizar → Reciclar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="imagem/reciclar.jpg" class="img-fluid rounded shadow">
            </div>
        </div>
    </section>
    <section id="reciclagem" class="container mt-5">
        <h2 class="text-center">O que é reciclagem</h2>
        <div class="row align-items-center mt-4">
            <div class="col-md-6">
                <img src="imagem/separacao.jpg" class="img-fluid rounded shadow imagem-reciclagem">
            </div>
            <div class="col-md-6">
                <p>
                    A <strong>reciclagem</strong> é o processo de transformação de materiais descartados em novos
                    insumos ou produtos. Ela é um dos pilares fundamentais para diminuir a pressão sobre os recursos
                    naturais do nosso planeta.
                </p>
                <p>
                    Separar corretamente os resíduos orgânicos dos recicláveis em casa é o primeiro passo para garantir
                    que papéis, plásticos, vidros e metais voltem para a cadeia produtiva em vez de lotarem os aterros sanitários.
                    É importante também lembrar de higienizar corretamente antes de descartá-los para facilitar o processo de reciclagem.
                </p>
                <p>
                    Pequenas atitudes diárias contribuem para a preservação do meio ambiente, geram empregos na indústria da
                    reciclagem e reduzem drasticamente a poluição do solo e do ar.
                </p>
            </div>
        </div>
    </section>
    <section id="impactos" class="container mt-5">
        <h2 class="text-center">Consequências do descarte incorreto</h2>
        <div class="row mt-4 justify-content-center align-items-stretch g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="imagem/tartaruga.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Oceanos Poluídos</h5>
                        <p>
                            O descarte incorreto de resíduos prejudica a vida marinha e o ecossistema.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="imagem/rio.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Rios Contaminados</h5>
                        <p>
                            Pilhas e resíduos eletrônicos podem liberar substâncias tóxicas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="descarte" class="container mt-5">
        <h2 class="text-center">Onde descartar?</h2>

        <!-- produtos -->
        <div class="row mt-4 g-4">

            <div class="col-md-4 d-flex">
                <div class="card p-3 text-center h-100 w-100">
                    <i class="bi bi-battery-charging icone-descarte"></i>
                    <h5>Pilhas</h5>
                    <p>
                        Por conterem metais pesados, devem ser entregues em postos de coleta comerciais,
                        supermercados ou agências bancárias que possuam coletores específicos.
                        Podem ser levadas ao Angeloni, Cooper, PEV.
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card p-3 text-center h-100 w-100">
                    <i class="bi bi-laptop icone-descarte"></i>
                    <h5>Eletrônicos/eletrodomésticos</h5>
                    <p>
                        Computadores, celulares e eletrodomésticos possuem peças valiosas que podem ser reaproveitadas.
                        Podem ser levados ao PEV e parceiros da Recicla CDL.
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card p-3 text-center h-100 w-100">
                    <i class="bi bi-recycle icone-descarte"></i>
                    <h5>Tampinhas, esponja e lacres</h5>
                    <p>
                        Pontos de coleta para tampinhas de garrafa plástica, lacres de latinha e esponjas usadas,
                        que podem virar novos produtos. Podem ser levados ao Restaurante Mãejerona.
                    </p>
                </div>
            </div>

        </div>
        <div class="row mt-4 g-4">

            <div class="col-md-4 d-flex">
                <div class="card p-3 text-center h-100 w-100">
                    <i class="bi bi-droplet-fill icone-descarte"></i>
                    <h5>Óleo usado</h5>
                    <p>
                        Armazene em garrafa PET. Pode virar sabão ou biodiesel.
                        Entregar no PEV ou junto da coleta seletiva.
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card p-3 text-center h-100 w-100">
                    <i class="bi bi-house-fill icone-descarte"></i>
                    <h5>Móveis</h5>
                    <p>
                        Sofás, camas e colchões devem ser levados ao PEV,
                        nunca descartados em vias públicas.
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card p-3 text-center h-100 w-100">
                    <i class="bi bi-car-front-fill icone-descarte"></i>
                    <h5>Pneus</h5>
                    <p>
                        Pneus devem ser entregues em pontos de coleta ou PEV.
                    </p>
                </div>
            </div>

        </div>
        <div class="row mt-4 g-4">

            <div class="col-md-4 d-flex">
                <div class="card p-3 text-center h-100 w-100">
                    <i class="bi bi-cup-straw icone-descarte"></i>
                    <h5>Vidros</h5>
                    <p>
                        Garrafas, potes e copos devem ser embalados com cuidado
                        e entregues no PEV ou coleta seletiva.
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card p-3 text-center h-100 w-100">
                    <i class="bi bi-exclamation-triangle-fill icone-descarte"></i>
                    <h5>Tóxicos</h5>
                    <p>
                        Tintas, thinner e óleo de carro devem ser devolvidos
                        ao ponto de venda ou postos autorizados.
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card p-3 text-center h-100 w-100">
                    <i class="bi bi-capsule icone-descarte"></i>
                    <h5>Medicamentos</h5>
                    <p>
                        Descartar em farmácias ou postos de saúde com coleta apropriada.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section id="enderecos" class="container mt-5">
        <h2 class="text-center">Endereços para levar</h2>
        <div class="row mt-4 justify-content-center g-4">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>
                        <i class="bi bi-geo-alt-fill"></i>
                        PEV
                    </h5>
                    <p>
                        Com atendimento de segunda a sexta das 8h às 18h e aos sábados das 8h às 12h.
                    </p>
                    <a href="https://share.google/0zjkbLyvdLLoSxtSQ" target="_blank" class="btn btn-success m-2">PEV - Vila Lenzi
                    </a>
                    <a href="https://share.google/n9fhTi1BOFhm8nfex" target="_blank" class="btn btn-success m-2">PEV - Ilha da Figueira
                    </a>
                    <a href="https://share.google/VKCeqzgMA7QtPzURl" target="_blank" class="btn btn-success m-2">PEV - Nereu Ramos
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>
                        <i class="bi bi-capsule"></i>
                        Farmácias
                    </h5>
                    <p>
                        Locais onde principalmente podem ser descartados embalagens e remédios, vencidos ou não. Verifique os locais e horários
                    </p>
                    <a href="https://share.google/dQStPDDuffIzXmrsf" target="_blank" class="btn btn-success m-2">Droga Raia Centro </a>
                    <a href="https://share.google/7Sm26r0MeHMLlQUnH" target="_blank" class="btn btn-success m-2">Droga Raia Vila Lenzi</a>
                    <a href="https://share.google/gaqaTgzKjOb7PHt8v" target="_blank" class="btn btn-success m-2">Panvel Centro </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>
                        <i class="bi bi-cup-hot-fill"></i>
                        Restaurante
                    </h5>
                    <p>
                        Verifique o horário de atendimento clicando no link abaixo dos endereços!
                    </p>
                    <a href="https://share.google/yjXC80MLTI2dNB9tS" target="_blank" class="btn btn-success m-2">Restaurante Mãejerona
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-4 justify-content-center g-4">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>
                        <i class="bi bi-shop"></i>
                        Supermercados
                    </h5>
                    <p>
                        Alguns supermercados disponibilizam pontos de coleta para pilhas, baterias e outros materiais recicláveis. Consulte os endereços abaixo.
                    </p>
                    <a href="https://maps.app.goo.gl/oBH5dvjAN8DecAK96" target="_blank" class="btn btn-success m-2">Angeloni
                    </a>
                    <a href="https://share.google/KImZ1wFeP2Yji92aS" target="_blank" class="btn btn-success m-2">Cooper Vila Nova
                    </a>
                    <a href="https://share.google/UpiJVkc9nQI9B9HlL" target="_blank" class="btn btn-success m-2">Cooper Água verde
                    </a>
                    <a href="https://share.google/zvjDFkOgFdfceIAvi" target="_blank" class="btn btn-success m-2">Cooper Barra
                    </a>
                    <a href="https://share.google/J0WtMHPua8NVsjWoF" target="_blank" class="btn btn-success m-2">Cooper Rau
                    </a>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>
                        <i class="bi bi-recycle"></i>
                        Recicla CDL
                    </h5>
                    <p>
                        Verifique o horário de atendimento clicando no link abaixo dos endereços!
                    </p>
                    <a href="https://share.google/zccPLvs9pvZ4AMTpq" target="_blank" class="btn btn-success m-2">Católica SC
                    </a>
                    <a href="https://share.google/A2vLhLPItbTA6rdVy" target="_blank" class="btn btn-success m-2">Sede da CDL/CEJAS
                    </a>
                    <a href="https://share.google/NvRjoWNN6KJqDZdrb" target="_blank" class="btn btn-success m-2">IFSC - Centro
                    </a>
                    <a href="https://share.google/v8eN3iHYwjXiXpk67" target="_blank" class="btn btn-success m-2">Lecimar
                    </a>
                    <a href="https://maps.app.goo.gl/BJBcvCpvn4DB8Jug7" target="_blank" class="btn btn-success m-2">Unisociesc
                    </a>
                    <a href="https://maps.app.goo.gl/rKdCgU1QAtwfNGNbA" target="_blank" class="btn btn-success m-2">WEG I
                    </a>
                    <a href="https://maps.app.goo.gl/HMab2SupS7vmZUob8" target="_blank" class="btn btn-success m-2">WEG II
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <h4>Sites Oficiais - informações extras!</h4>
            <a href="https://www.samaejs.com.br/central-do-usuario/pev/" target="_blank" class="btn btn-success m-2">PEV SAMAE
            </a>
            <a href="https://www.samaegaspar.com.br/servicos/residuos-solidos/ecoponto" target="_blank" class="btn btn-primary m-2">Ecoponto
            </a>
            <a href="https://www.ima.sc.gov.br/index.php/qualidade-ambiental/residuos-solidos/programa-penso-logo-destino" target="_blank" class="btn btn-dark m-2">Programa Penso, Logo Destino
            </a>
        </div>
    </section>
    <footer class="footer-ecovida text-center">
        <h4>🌎 EcoVida</h4>
        <p>
            Projeto desenvolvido para a disciplina
            <strong>Meio Ambiente, Trabalho e Sociedade</strong>
        </p>
        <p>
            Instituto Federal de Santa Catarina - IFSC
        </p>
        <p>
            Desenvolvido por: Dinea Gisele Kostetzer Bruch e Letícia Schütze.
        </p>
        <hr>
        <small>
            Promovendo a conscientização ambiental por meio da economia circular e do descarte correto de resíduos.
        </small>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>