<!DOCTYPE html>
<html>
  <head>
    <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!--<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">-->
    <style type="text/css">
    #wrapper {
      text-align: left;
      color: #655864;
      padding-left: 250px;
      transition: all 0.4s ease 0s;
    }
    

/*barra lateral !!*/
    #sidebar-wrapper {
      margin-left: -250px;
      top: 51px;
      left: 250px;
      width: 250px;
      color: black;
      background: #2ED7EE;

      position: fixed;
      height: 100%;
      overflow-y: auto;
      z-index: 1000;
      transition: all 0.4s ease 0s;
    }

h1{
  text-align: center;
  font-size: 44px;
  font-weight: bold;
}
#wrapper.active {
  color: black;
  background: yellow;
  padding-left: 0;
}

    #wrapper.active #sidebar-wrapper {

      left: 0;
    }

    #page-content-wrapper {


        background-color: #2EEE7B;
      width: 100%;
      padding-top: 70px;
      transition: all 0.4s ease 0s;
    }

    .sidebar-nav {
      color: yellow;
      position: absolute;
      top: 0;
      width: 250px;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .sidebar-nav li {
        color: yellow;
      line-height: 40px;
      text-indent: 20px;
    }

    #logo{
      width: 200px;
      height: 130px;
    }
    #huella{


      width: 120px;
      height: 70px;
    }




    .footer{
      position: absolute;
      text-align: center;
      padding-right:-100px;
      width: 90px;
      height: 60px;
      background: black;
      color: black;


    }

    .sidebar-nav li a {

      color: black;
      display: block;
      text-decoration: none;
      padding-left: 60px;
    }

    .sidebar-nav li a span:before {


      position: absolute;
      left: 0;
        color: yellow;

      width: 20px;
      line-height: 18px;
    }

    .sidebar-nav li a:hover,
    .sidebar-nav li.active {
      color: #fff;
      background: rgba(255,255,255,0.2);
      text-decoration: none;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
      text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
      height: 65px;
      line-height: 60px;
      font-size: 18px;
    }

    .sidebar-nav > .sidebar-brand a {
      color: #999999;
    }

    .sidebar-nav > .sidebar-brand a:hover {
      color: #fff;
      background: none;
    }

    #menu-toggle {
      text-align: center;
        text-decoration: none;
        float: left;
        color: #fff;
        padding-right: 15px;
    }

    @media (max-width:767px) {

    #wrapper {
      padding-left: 0;
    }

    #sidebar-wrapper {
      left: 0;
    }

    #wrapper.active {
      position: relative;
      left: 250px;
    }

    #wrapper.active #sidebar-wrapper {
      left: 250px;
      width: 250px;
      transition: all 0.4s ease 0s;
    }

    #menu-toggle {
      display: inline-block;
    }

    }

    </style>
  <head>
  <body>
    <!-- MENU PARTE DE ARRIBA-->
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                    <!-- <div id="cuenta">

                    <b>Acceder a mi cuenta</b>
                    <br>
                    <li>Register <i class="material-icons">assignment_ind</i></li>
                    <br>
                    <li>Entrar <i class="material-icons">help</i></li>

                    </a>
                    </div> -->


                    <div  class="navbar-brand">
                        <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                        <a href="#">SpaceAppsChallenge</a>
                    </div>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">

                                                  <a href="register">  <li>Register <i class="material-icons">assignment_ind </a></li></i>
                                                  <a href="login">  <li>Log In <i class="material-icons">assignment_ind </a></li></i>

                                          </ul>
                                      </div><!--/.nav-collapse -->
                                  </div>
                              </nav>
                              <!-- PARTE LATERAL -->
                              <div id="sidebar-wrapper">
                                  <nav id="spy">
                                      <ul class="sidebar-nav nav">

                                          <li class="sidebar-brand">



                                              <a href="/"><span class="fa fa-home solo">  <li>Home <i class="material-icons">assignment_ind  </a></li></i></span></a>
                                          </li>
                                              <li>
                                                  <a href="species">
                                                      <span class="fa fa-anchor solo">   <li>Species <i class="material-icons">pets</i></li></span>
                                                  </a>
                                              </li>
                                            <li>

                                                  <a href="contact">
                                                      <span class="fa fa-anchor solo">  <li>Contact <i class="material-icons">account_balance </a></li></i></span>
                                                  </a>
                                              </li>

                                              <li>

                                                    <a href="faq">
                                                        <span class="fa fa-anchor solo">  <li>Faq <i class="material-icons">help </a></li></i></span>
                                                    </a>
                                                </li>


                </ul>
            </nav>
        </div>



        <!-- Page content -->
         <h1>Trace Invaders</h1><img id="logo" src="{{ asset('img/Cachora2.png' )  }}"  >


        <div id="page-content-wrapper">
          <br>


          <!-- <img  src="img/Cachora2.png" alt="logo" width="300px" height="180px"> -->
  <div class="page-content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-body">
                                  <h2 class="w3-center">Species:</h2>
                                </div>
                                 <!--<form class="navbar-form navbar-right">
                                      <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control">
                                      </div>
                                      <button type="submit" class="btn btn-success">Search</button>
                                  </form>-->
                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<iframe src="https://www.google.com/maps/d/embed?mid=1WTTZrl9Q7FCL73HolFiDC7gQmV8&hl=en_US" width="640" height="480"></iframe>

<table id="table_species" class="display compact" cellspacing="0">
  <thead>
    <tr>
      <th>Nombre cientifico</th>
      <th>Nombre común</th>
      <th>Clase</th>
      <th>Familia</th>
      <th>Enlace</th>
      <th>Link Imagen</th>
      <th>Detalles</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>Capra hircus</td>
    <td>Cabra</td>
    <td>MAMMALIA</td>
    <td>BOVIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Caprahircus%20_domestica_00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.fVViwUYTEG3OmcsxJs4HGAEsDv&amp;pid=Api">Ver Imagen</a></td>
    <td>Esta especie puede ejercer una presión negativa sobre las comunidades de hierbas y arbustos (Jaksic, 1998) y modificar así la dinámica poblacional de algunas especies de plantas, llevando en el último caso a la modificación de su abundancia y de la composición de las comunidades vegetales.</td>
  </tr>
  <tr>
    <td>Bos Taurus</td>
    <td>vaca</td>
    <td>MAMMALIA</td>
    <td>BOVIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Bostaurus00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.BluFSYYAIxpf6Y0CHmRvRQEsDI&amp;pid=Api">Ver Imagen</a></td>
    <td>El crecimiento excesivo de sus poblaciones o su presencia en altas densidades, puede tener un efecto muy importante en la modificación de la abundancia y en la composición de las comunidades vegetales nativas. De acuerdo a algunos estudios, la presencia de ganado doméstico ha tenido notables consecuencias en las comunidades riparias de aves, reptiles y plantas, ya que afectan su dinámica poblacional al modificar sus hábitats.</td>
  </tr>
  <tr>
    <td>Equus caballus</td>
    <td>caballo</td>
    <td>Mammalia</td>
    <td>Equidae</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Equuscaballus00.pdf">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/250px-Biandintz_eta_zaldiak_-_modified2.jpg">Ver Imagen</a></td>
    <td>Pueden afectar las comunidades de plantas y por consiguiente a las poblaciones animales que dependen de éstas. Son portadores y transmisores de enfermedades y parásitos a fauna nativa. Probablemente podría desplazar a otras especies de ungulados por competencia o tener un efecto destructivo sobre la vegetación nativa por sobrepastoreo</td>
  </tr>
  <tr>
    <td>Mus musculus</td>
    <td>ratón casero, ratón doméstico o ratón común</td>
    <td>Mammalia</td>
    <td>Muridae</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Musmusculus00.pdf">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/%D0%9C%D1%8B%D1%88%D1%8C_2.jpg/250px-%D0%9C%D1%8B%D1%88%D1%8C_2.jpg">Ver Imagen</a></td>
    <td>Esta especie ha sido considerada como un factor de riesgo para las poblaciones de aves que anidan en el suelo, ya que son depredadores de huevos; aunque en general su impacto es menor al de las ratas. Pueden llegar a excluir competitivamente a otras especies de roedores pequeños nativos o afectar sus poblaciones por la transmisión de enfermedades y parásitos. En general esta especie no representa un peligro de salud para las poblaciones humanas, pero ha sido considerada plaga de zonas de cultivos y se ha alimentado de cosechas almacenadas a lo largo de todo el mundo, al mismo tiempo que contamina los alimentos y destruye construcciones de madera, muebles, ropa, etc. Ha contribuido con la expansión de enfermedades como tifoidea, riketsia, tularemia, salmonelosis y plaga bubónica.</td>
  </tr>
  <tr>
    <td>Rattus rattus</td>
    <td>rata</td>
    <td>MAMMALIA</td>
    <td>MURIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Rattusrattus00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.oUnHMOZuqR8pAuwAOHLSqQEsDG&amp;pid=Api">Ver Imagen</a></td>
    <td>Está asociada a la transmisión de enfermedades y considerada como plaga y responsable de pérdidas de cosechas enormes a lo largo de todo el mundo. Esta especie ha sido introducida a muchas islas del mundo y ha causado daños enormes a la fauna nativa como aves, reptiles e incluso a la vegetación. 5 Algunas de las enfermedades que transmite son: plaga bubónica, tifoidea, salmonelosis, leptospirosis, triquinosis, tularemia y fiebre de mordida de rata.</td>
  </tr>
  <tr>
    <td>Felis catus</td>
    <td>gato</td>
    <td>MAMMALIA</td>
    <td>Felidae</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Felissilvestris00.pdf">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Collage_of_Six_Cats-02.jpg/250px-Collage_of_Six_Cats-02.jpg">Ver Imagen</a></td>
    <td>Los gatos ferales han sido causantes de la disminución o extinción de varias especies nativas de animales pequeños y medianos en varias partes del mundo. Han sido identificados como los depredadores con mayor impacto sobre las poblaciones de aves marinas de islas oceánicas. En México, algunos ejemplos han sido la severa reducción y prácticamente extinción de las colonias de pardela mexicana (Puffinus opisthomelas), alcita de Cassin (Ptychoramphus aleuticus) y mérgulo de Xantus (Endomychura hypoleuca)  o la extinción del Petrel de Guadalupe (Oceanodroma macrodactyla), la paloma de Socorro (Zenaida graysoni) y un gorrión endémico de Isla Todos Santos (Aimophila ruficeps sanctorum). Así mismo han sido considerados un factor de riesgo para las poblaciones de numerosas especies de roedores endémicos como los ratones Chaetodipus anthonyi y Peromyscus interparietalis y la rata Neotoma bryanti y la extinción de las ratas endémicas N. anthonyi y N. martinensis.</td>
  </tr>
  <tr>
    <td>Equus asinus</td>
    <td>burro</td>
    <td>MAMMALIA</td>
    <td>Equidae</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Equusasinus00.pdf">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Donkey_%28Equus_asinus%29_at_Disney%27s_Animal_Kingdom_%2816-01-2005%29.jpg/250px-Donkey_%28Equus_asinus%29_at_Disney%27s_Animal_Kingdom_%2816-01-2005%29.jpg">Ver Imagen</a></td>
    <td>En particular, esta especie puede afectar significativamente las comunidades de plantas y por consiguiente a las poblaciones animales que dependen de éstas.</td>
  </tr>
  <tr>
    <td>Canis familiaris</td>
    <td>perro</td>
    <td>MAMMALIA</td>
    <td>Canidae</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Canislupus00.pdf">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Coat_types_3.jpg/250px-Coat_types_3.jpg">Ver Imagen</a></td>
    <td>Los perros son depredadores que han sido considerados como un importante factor de riesgo para las poblaciones de aves marinas de islas oceánicas. Esta especie probablemente está asociada a la reducción poblacional del conejo (Sylvilagus bachmani cerrosensis) y del venado bura (Odocoileus hemionus cerrosensis) de Isla Cedros. Esta especie podría desplazar competitivamente a especies de depredadores nativos como coyotes o lobos. Sin embargo, su efecto más negativo es la afección de poblaciones de presas como aves, reptiles y algunos mamíferos, sobre todo pequeños y medianos. También como la causa de pérdida de ganado doméstico, lo mismo que portadores de parásitos y enfermedades cuyas consecuencias en la fauna nativa han sido poco estudiadas.</td>
  </tr>
  <tr>
    <td>Passer domesticus</td>
    <td>gorrión, pardal</td>
    <td>Aves</td>
    <td>Passeridae</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Passerdomesticusdomesticus00.pdf">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Passer_domesticus_female_02831-nevit.jpg/250px-Passer_domesticus_female_02831-nevit.jpg">Ver Imagen</a></td>
    <td>En toda su distribución compite por el alimento con otras especies de aves, tales como: el pinzón mexicano (Carpodacus mexicanus), la tórtola cola larga (Columbina inca), la tórtola coquita (Columbina passerina) y en los Altos de Chiapas con el gorrión chingolo (Zonotrichia capensis). Compite también por los sitios de anidación con la golondrina tijereta (Hirundo rustica), la golondrina pueblera (Petrochelidon fulva) en el Altiplano Mexicano y con la golondrina risquera (Hirundo pyrrhonota) en Baja California y en el Altiplano y montañas de México. Es presa del cernícalo americano (Falco sparverius) y del halcón esmerejón (Falco columbarius) durante su época de migración. Los gorriones son los principales reservorios del virus de la encefalitis equina del oeste, enfermedad que afecta directamente al sistema nervioso central. Esta especie es potencialmente portadora y transmisora de la enfermedad (el vector es un mosquito) hacia otras aves y mamíferos, incluyendo al hombre</td>
  </tr>
  <tr>
    <td>Hemidactylus frenatus</td>
    <td>gecko enlutado, besucona, cachora</td>
    <td>REPTILIA</td>
    <td>Gekkonidae</td>
    <td><a href="https://es.wikipedia.org/wiki/Lepidodactylus_lugubris">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Lepidodactylus_lugubris_1.JPG/250px-Lepidodactylus_lugubris_1.JPG">Ver Imagen</a></td>
    <td>La presencia de ésta lagartija puede tener un efecto negativo en las poblaciones locales de geckos de otros géneros ya que sus hábitos alimenticios incluyen el canibalismo y posiblemente sea un depredador. Posiblemente sea un vector de enfermedades y parásitos a la fauna nativa.</td>
  </tr>
  <tr>
    <td>Cyprinus carpio</td>
    <td>pargo comun</td>
    <td>Actinopterygii</td>
    <td>Cyprinidae</td>
    <td><a href="https://es.wikipedia.org/wiki/Cyprinus_carpio">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Carpa_com%C3%BAn.jpg/250px-Carpa_com%C3%BAn.jpg">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Ictalurus punctatus</td>
    <td>bagre de canal</td>
    <td>Actinopterygii</td>
    <td>Ictaluridae</td>
    <td><a href="https://es.wikipedia.org/wiki/Ictaluridae">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Ameiurus_nebulosus.jpg/240px-Ameiurus_nebulosus.jpg">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Gambusia affinis</td>
    <td>pez mosquito</td>
    <td>Actinopterygii</td>
    <td>Poeciliidae</td>
    <td><a href="https://es.wikipedia.org/wiki/Gambusia_affinis">Ver</a></td>
    <td><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Gambusia_affinis_male.jpg/250px-Gambusia_affinis_male.jpg">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Rana catesbeiana</td>
    <td>rana toro</td>
    <td>AMPHIBIA</td>
    <td>RANIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Ranacatesbeiana00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.6DAdlnHL31KjhZ6PDPcEhAEsC5&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Xenopus laevis</td>
    <td>Rana africana</td>
    <td>AMPHIBIA</td>
    <td>PIPIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Xenopuslaevis00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.cEnzOGBZ30oOsBbz-KuREgEsEs&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Poecilia butleri</td>
    <td>topote del Pacífico/Pacific molly</td>
    <td>Actinopterygii</td>
    <td>Poeciliidae</td>
    <td><a href="http://www.fishbase.org/summary/poecilia-butleri.html">Ver</a></td>
    <td><a href="http://s287.photobucket.com/user/villvice/media/Acuario%20Salobre/IMG_1862.jpg.html">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Ramphotyphlops braminus</td>
    <td>Serpiente ciega enana</td>
    <td>REPTILIA</td>
    <td>TYPHLOPIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Ramphotyphlopsbraminus00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.3V4AHq5jEgCZoygJc1N4VwEsDI&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Hemidactylus frenatus</td>
    <td>Cuija, escorpión</td>
    <td>REPTILIA</td>
    <td>GEKKONIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Hemidactylusfrenatus00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.PRSpwiBEzCy3FdOgy7R1_QEsDG&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Boa constrictor</td>
    <td>Boa</td>
    <td>REPTILIA</td>
    <td>BOIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Boaconstrictor00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.MoerMYJ_oPkuCOdTFRyhBQEsDh&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Sturnus vulgaris vulgaris</td>
    <td>Estornino pinto</td>
    <td>AVES</td>
    <td>STURNIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Sturnusvulgarisvulgaris00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.wjtfFxcpI3aNCsHKogWCEQEsDI&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Aratinga canicularis</td>
    <td>Perico frente naranja</td>
    <td>AVES</td>
    <td>PSITTACIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Aratingacanicularis00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.TPE0oSllOHQN8c0g5sWXCAEsEc&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Micropterus salmoides</td>
    <td>lobina negra, bocón</td>
    <td>Actinopterygii</td>
    <td>Centrarchidae</td>
    <td><a href="https://es.wikipedia.org/wiki/Micropterus_salmoides">Ver</a></td>
    <td><a href="http://www.bassmania.com.mx/img/lobina_negra_logo.gif">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Sparus aurata</td>
    <td>dorada</td>
    <td>Actinopterygii</td>
    <td>Sparidae</td>
    <td><a href="https://en.wikipedia.org/wiki/Gilt-head_bream">Ver</a></td>
    <td><a href="http://www.maestropescador.com/Colaboradores/dammous_shibl/Sparus_aurata2.jpg">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Amazona albifrons</td>
    <td>Loro frente blanca</td>
    <td>AVES</td>
    <td>PSITTACIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Amazonaalbifrons00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.t_0YSjtFvsOgJJ-rgpia_AEsDg&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Callipepla douglasii</td>
    <td>Codorniz cresta dorada</td>
    <td>AVES</td>
    <td>ODONTOPHORIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Callipepladouglasii00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.yxR38N4ZxF57fZXonKc_LwHgE_&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Columba livia</td>
    <td>Paloma doméstica.</td>
    <td>AVES</td>
    <td>COLUMBIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Columbalivia00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.OfQszfttoT8hqcXGIixNKQEyDM&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Bubulcus ibis ibis</td>
    <td>Garza ganadera, Garza vaquera</td>
    <td>AVES</td>
    <td>ARDEIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Bubulcusibisibis00.pdf">Ver</a></td>
    <td><a href="https://tse4.mm.bing.net/th?id=OIP.b2CdNDWGL7jjS6juzEuSgQEsDh&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Parabuteo unicinctus</td>
    <td>Aguililla rojinegra</td>
    <td>AVES</td>
    <td>ACCIPITRIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Parabuteounicinctus00.pdf">Ver</a></td>
    <td><a href="https://tse2.mm.bing.net/th?id=OIP.Ps9Bo7Dx5t0-lwZA5bXlVwEsD9&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Sus scrofa</td>
    <td>Cerdo doméstico</td>
    <td>MAMMALIA</td>
    <td>SUIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Susscrofa_domestica_00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.54NCupZV7h7Fh__zKF_a8wEsDh&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Rattus norvegicus</td>
    <td>Rata café, Rata noruega</td>
    <td>MAMMALIA</td>
    <td>MURIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Rattusnorvegicus00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.3qXR1lwNSarAJR3bGyIyggEsDg&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Oryctolagus cuniculus</td>
    <td>Conejo doméstico</td>
    <td>MAMMALIA</td>
    <td>LEPORIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Oryctolaguscuniculus00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.rALPpo82qdeKetfKQaNOuAEsDN&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Odocoileus virginianus</td>
    <td>Venado cola blanca</td>
    <td>MAMMALIA</td>
    <td>CERVIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Odocoileusvirginianus00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.qirG90BI7Luc6_yus6FodQEsDh&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  <tr>
    <td>Ovis aries</td>
    <td>Oveja doméstica</td>
    <td>MAMMALIA</td>
    <td>BOVIDAE</td>
    <td><a href="http://www.conabio.gob.mx/conocimiento/exoticas/fichaexoticas/Ovisaries%20_domestica__00.pdf">Ver</a></td>
    <td><a href="https://tse1.mm.bing.net/th?id=OIP.KpwRAWRnsmBJPWMK7pifuAEsDh&amp;pid=Api">Ver Imagen</a></td>
    <td></td>
  </tr>
  </tbody>
</table>
        
    </div>
    
  </body>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">
  <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
  <script>
  var myIndex = 0;
  carousel();



  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
  }
  </script>
  <script type="text/javascript">

      /*Menu-toggle*/
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("active");
      });

  </script>
<div id="footer">

    
      <li>
        <a href="http://www.facebook.com">
    <img src="img/fb.jpg" alt="" width="100" height="90">
    </a>


    <a href="http://www.twitter.com">
    <img src="img/twi.jpg" alt=""  width="100" height="90">
    </a>
    <a href="http://www.instagram.com">

    <img src="img/insta.png" alt=""  width="100" height="90">
    </li></a>

  </div>
<script>
   $(document).ready(function() {
      $('#table_species').DataTable({
          responsive: true
      });
    } );
</script>
    </html>
