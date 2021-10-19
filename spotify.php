<?php
$nombre="Spotify";
$direccion="Avenue Guillaume Dulac, La Ciotat";
$desc=("Aficionados a la música y profesionales tecnológicos <br> Únete a nuestra banda");
$pagprincipal="https://www.lifeatspotify.com/?_ga=2.52674987.2043434990.1634614718-569661902.1594947085";
$empresa="https://www.spotify.com/pe/";
$btnhead=array("Acerca de nosotros ","Requsitos","Beneficios","Contactos","Comunidad");
$rsociales=array("in"=>"https://www.linkedin.com/jobs/search/?f_C=207470&geoId=92000000","fb"=>"https://www.facebook.com/SpotifyPeruano","tw"=>"https://twitter.com/Spotify");
$email="spotify.gmail.com";
$meses=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$mes1=rand(0,11);
$mes2=rand(0,11);
$telefono=(object)["n1"=>159252992,"n2"=>851416166,"n3"=>589959595];
$reg=rand(20,99);
$numdirec=rand(99,999);
$omv=array("Misión","Visión","Valores");
$mision="Brindar a las personas acceso a toda la música que deseen, en cualquier momento - de manera completamente legal y accesible";
$vision="Tener momentos con música en cualquier lugar";
$valores=(object)["o1"=>"• Innovación","o2"=>"• Colaboración","o3"=>"• Sinceridad","o4"=>"• Pasión","o5"=>"• Diversión"];
$mas=array("https://www.spotify.com/pe/about-us/contact/","https://www.spotify.com/pe/download/windows/");
$year=array("y1"=>rand(2010,2021),"y2"=>rand(2010,2021));
$perfil=array("User Researcher","Staff Data Engineer","Master","Licencias");
$ur=array("ur1"=>"Identificar y priorizar estudios de investigación.","ur2"=>"Utilice una amplia variedad de métodos de investigación mixtos: métodos cualitativos y cuantitativos.");
$sde=array("sde1"=>"Te preocupas por los procesos de software ágiles, el desarrollo de datos, la confiabilidad y la experimentación responsable.","sde2"=>"Ha trabajado en un entorno de desarrollo y producción nativo de la nube (preferido de GCP) donde se llevan a cabo todas las CI / CD.");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Spotify</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spotify</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href=<?php echo "$empresa" ?> rel="tooltip"><?php echo "$nombre" ?></a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about"><?php echo "$btnhead[0]" ?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience"><?php echo "$btnhead[1]" ?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#beneficios"><?php echo "$btnhead[2]" ?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact"><?php echo "$btnhead[3]" ?></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: src= "https://www.codymclain.com/wp-content/uploads/2016/05/0yzyl4mj-1920x1080.jpg;"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href=<?php echo "$empresa" ?>><img src="C:\xampp\htdocs\spotify\sp.jpg" alt="Image"/></a></div>
          <div class="h2 title"><?php echo "$nombre" ?></div>
          <p class="category text-white"><?php echo "$desc"; ?></p><a class="btn btn-primary" href= <?php echo "$pagprincipal" ?> data-aos="zoom-in" data-aos-anchor="data-aos-anchor"><?php echo "$btnhead[4]" ?></a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href= <?php echo "$rsociales[fb]" ?> rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href= <?php echo "$rsociales[tw]" ?> rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href= <?php echo "$rsociales[in]" ?> rel="tooltip" title="Follow me on Linkedin"><i class="fa fa-linkedin"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title"><?php echo "$btnhead[0]" ?></div>
            <p><strong class="text-uppercase"><?php echo "$omv[0]<br>"?></strong><?php echo "$mision<br>"?><strong class="text-uppercase"><?php echo "$omv[1]<br>"?></strong><?php echo "$vision<br>"?><strong class="text-uppercase"><?php echo "$omv[2]<br>"?></strong><?php echo "$valores->o1<br>$valores->o2<br>$valores->o3<br>$valores->o4<br>$valores->o5<br>"?><a href=<?php echo "$mas[0]" ?> target="_blank">Más información.</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Mas información</div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo "$email" ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Telefono:</strong></div>
              <div class="col-sm-8"><?php echo "+ $reg $telefono->n1<br>","+ $reg $telefono->n2<br>","+ $reg $telefono->n3" ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Dirección:</strong></div>
              <div class="col-sm-8"><?php echo "$numdirec, ","$direccion" ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title"><?php echo "$btnhead[1]" ?></div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p><?php echo "$meses[$mes1] ","$year[y1]" ?></p>
            <div class="h5"><?php echo "$perfil[0]" ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Requisitos</div>
            <p><?php echo "$ur[ur1] <br> $ur[ur2] " ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p><?php echo "$meses[$mes2] ","$year[y2]" ?></p>
            <div class="h5"><?php echo "$perfil[1]" ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Requsitos</div>
            <p><?php echo "$sde[sde1] <br> $sde[sde2] " ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        
<div class="section" id="beneficios">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">CURSUS</div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p>2017 - 2019</p>
            <div class="h5">MASTER 2</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Communication Digital 360° #SupDeWeb</div>
            <p class="category">ECS IEJ Marseille</p>
            <p>E-Commerce (anglais) Droit du numérique et du e-Commerce, Marketing strategy (anglais) Stratégie d’influence + Personal Branding, Marketing mobile Référencement naturel SEM (SEA+SEO), Environnement juridique des entreprises Economie pour manager, Organisation d’une start-up digitale, Etude de marché, Modélisation d’activité, Gestion de projet Projet professionnel, Intelligence économique et veille concurrentielle, Objective-C/Swift Cocoa + Touch.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p>2014 - 2016</p>
            <div class="h5">BTS</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Brevet de Technicien Supérieur en Communication</div>
            <p class="category">Lycée Jeanne Perrimond</p>
            <p>Culture de la Communication, Économie & Droit, Management, Langue vivante 1, Enseignement Technique, Projet de Communication, Conseil et Relation Annonceur, Veille opérationnelle, Atelier Production, Relations Commerciales, Langue vivante 2 (Espagnol).</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('images/staticmap.png');">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contactos</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="https://formspree.io/giardinabarbarafr@gmail.com" method="POST">
                      <div class="p pb-3"><strong>Para mas informacion sobre empleos</strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="nom" placeholder="Nom" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Sujet" placeholder="Sujet" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Votre message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Dirección </strong></p>
                    <p class="pb-2"><?php echo "$numdirec, ","$direccion" ?></p>
                    <p class="mb-0"><strong>Telefono</strong></p>
                    <p class="pb-2"><?php echo "+ $reg $telefono->n1<br>","+ $reg $telefono->n2<br>","+ $reg $telefono->n3" ?></p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p><?php echo "$email" ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href=<?php echo "$rsociales[fb]" ?>><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href=<?php echo "$rsociales[tw]" ?>><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-linkedin btn btn-link" href=<?php echo "$rsociales[in]" ?>><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></div>
      <div class="h4 title text-center"><?php echo "$nombre" ?></div>
      <div class="text-center text-muted">
        <p>&copy; <?php echo "$nombre" ?><br><?php echo "2021" ?> - <a class="credit" href=<?php echo "$mas[1]" ?> target="_blank">Descargar</a></p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>
  
</body>
</html>
