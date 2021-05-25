<?php include 'sendEmail.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--meta description-->
    <meta name="description" content="MD Sports Management est une entreprise de management de sportifs basée à Bruxelles.
    La société vise à apporter une approche 360° pour vous aider à atteindre vos objectifs">

    <!--flavicon-->
    <link rel="icon" type="image/png" href="img/logo noir MD-Sports-management-Logo.jpg"/>

    <!--link css-->
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">    

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 

    <!--VENOBOX-->
   <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen">

    
    <title>Agence de management sportif: MD Sports management</title>
</head>
<body>

    <!--Start Navbar-->

    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/logo MD Sports management Trans.png" alt="logo md sport management"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!--navbar undeline-->
             <div id="underline"></div>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#valeurs">Valeurs</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#actions">Actions</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#teams">Equipe</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#teams">Collaborateurs</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="nos_joueurs.php">Joueurs</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!--End Navbar-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <img src="img/main header.jpeg" class="d-block w-100" alt="illustration Multisports">
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-8 bg-custom d-sm-block py-3 px-0">
                  <h1>Agence de Management Sportif </h1>
                 
                  <h2 class="pb-3">AU SERVICE DES SPORTIFS</h2>
                  <a class="venobox" data-autoplay="true" data-vbtype="video"
                   href="https://www.youtube.com/watch?v=aSjPI5vJclU" data-gall="myGallery">
                   <div class="btno ">Voir video</div></a>
                   
                  <a href="https://www.instagram.com/mdsportsmanagement/" class="btni">contactez-nous</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-omar-ramadan-6409107.jpg" class="d-block w-100" alt="photo garcon football">
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-8 bg-custom d-sm-block py-3 px-0">
                  <h1>Une approche 360°</h1>
                  <h2 class="pb-3">POUR ATTEINDRE LE SOMMET</h2>
                  <a class="venobox" data-autoplay="true" data-vbtype="video"
                  href="https://www.youtube.com/watch?v=aSjPI5vJclU" data-gall="myGallery">
                  <div class="btno ">Voir video</div></a>
                  <a href="https://www.instagram.com/mdsportsmanagement/"><div class="btni ">Contactez-nous</div></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-li-sunvbv-2294403.jpg" class="d-block w-100" alt="photo fille salle de sport">
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-8 bg-custom  d-sm-block py-3 px-0">
                  <h1>Gestion de carrière</h1>
                 
                  <h2 class="pb-3">Accompagnement & Suivi</h2>
                  <a class="venobox" data-autoplay="true" data-vbtype="video"
                  href="https://www.youtube.com/watch?v=aSjPI5vJclU" data-gall="myGallery">
                  <div class="btno ">Voir video</div></a>
                  <a href="https://www.instagram.com/mdsportsmanagement/" class="btni ">contactez-nous</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="social-media">
        <a href="https://www.facebook.com/MDSportsManagement"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/mdsportsmanagement/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/md-sports-management/"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.youtube.com/channel/UCh9H510IM9s-x8xUcPeAudg"><i class="fab fa-youtube"></i></a>
     </div>


      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
     <!--END HEADER SLIDER-->
    
  
    <!--End header-->
    <!--Start About us-->
    <section id="about" class="section-paddong about-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 aboutG">
            <div class="section_title"><br>
              <div class="section_subtitle">A propos de nous</div>
              <h2 class="section_main_title">TOGETHER<strong> TO THE TOP</strong></h2>
            </div>
            <div class="about-item">
              <p class="about-description">
                MD Sports Management est une entreprise de management<br> de sportifs basée à Bruxelles.<br>
                La société vise à apporter une approche 360° qui irait de la formation <br>en tant que futur athlète professionnel et individu autonome,<br> jusqu’à la
                retraite du sportif.
              </p>
              <div class="hgt-20"></div>
              <div class="home-button">
                <a href="#contact" class="btn-color-background">Plus d'info</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 aboutG"> 
            <div class="about-box">
             <div class="box-overlay"></div>

             <a class="venobox" data-autoplay="true" data-vbtype="video"
              href="https://www.youtube.com/watch?v=JJy1Px6nGGU" data-gall="myGallery"> 
             <div class="videopopup">
             <img src="img/about.jpeg" class="img-fluid" alt="image coach avec parent">
             <span class="sonar-wrapper">
               <span class="sonar-emitter">
                 <i class="fa fa-play"></i>
                 <div class="sonar-wave"></div>
               </span>
             </span>
            </div>
            </a>

            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <!--End About us-->
    <!--Start valeurs-->

    <section id="valeurs">
      <h2 class="valeurs-titre text-center">Nos 7 Valeurs</h2>
      <p class="valeurs-description text-center">7 valeurs fondamentales que nous nous sommes engagés à respecter chaque jour de la semaine.</p>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="valeur-block">
            <h3 class="valeur-intro text-center text-white">1</h3>
           </div> 
            <h4 class=" text-center text-white">Excellence</h4>
            <p class="valeur-paragraphe">Nous aspirons à ce que chacun puisse donner le meilleur de lui-même et vise l’excellence.</p>
          </div>
          <div class="col-md-4">
            <div class="valeur-block">
            <h3 class="valeur-intro text-center text-white">2</h3>
          </div>
            <h4 class="text-center text-white">Respect</h4>
            <p class="valeur-paragraphe">Valeur fondamentale sans laquelle<br> il nous est impossible de travailler en interdépendance.</p>
          </div>
          <div class="col-md-4">
            <div class="valeur-block">
            <h3 class="valeur-intro text-center text-white">3</h3>
          </div>
            <h4 class="text-center text-white">Travail</h4>
            <p class="valeur-paragraphe">Car il n’y a rien que le travail acharné <br>ne puisse améliorer.</p>
          </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row"> 
          <div class="col-md-4">  
            <div class="valeur-block">
            <h3 class="valeur-intro text-center text-white">4</h3>
            </div>
            <h4 class="text-center text-white">Intégrité</h4>
            <p class="valeur-paragraphe"> Nous désirons travailler en toute transparence dans le but de garantir <br>une coordination impeccable.</p>
          </div>
          <div class="col-md-4">
            <div class="valeur-block">
            <h3 class="valeur-intro text-center text-white">5</h3>
            </div>
            <h4 class="text-center text-white">Discipline</h4>
            <p class="valeur-paragraphe"> Nous nous disciplinons afin de poursuivre nos efforts en toutes circonstances pour atteindre l'excellence.</p>
          </div>
          <div class="col-md-4"> 
            <div class="valeur-block">
            <h3 class="valeur-intro text-center text-white">6</h3>
          </div>
            <h4 class="text-center text-white">Passion</h4>
            <p class="valeur-paragraphe">Nous sommes convaincus que le talent seul ne suffit pas, c’est pourquoi il est
              important d’être complètement dévoué à sa mission</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="valeur-block">
            <h3 class="valeur-intro text-center text-white">7</h3>
            </div>
            <h4 class="text-center text-white">Humilité</h4>
            <p class="valeur-paragraphe">Parce que l’humilité précède la gloire.</p>
          </div>
        </div>
      </div>
    </section>
    
  
    <!--End valeurs-->

        <!--START-->
        <section id="start" class="py-5">
          <div class="container py-5">
              <h2 class=" start-title pb-3">Créons ensemble votre projet</h2>
              <p class=" text-center text-white d-md-block">Découvrez nos services adaptés aux sportifs professionnels et aux jeunes sportifs</p>
              <a href="#contact" class="btn btn-warning">Rejoins nous</a>
          </div>
         </section>
       <!--END START-->

  <!--ACTIONS-->

  <section id="actions">
    <div class="container">
     <h2 class="service-title text-center">NOS CHAMPS D'ACTION</h2>
     <div class="row">
       <div class="col-md-6 col-lg-4">
         <div class="box">
          <i class="fas fa-dumbbell icon"></i>
         <h3>Optimisation de la performance</h3>
         <ul class="actions-liste">
           <li> Réathlétisation</li>
           <li> Renforcement musculaire</li>
           <li> Prévention des blessures</li>
         </ul> 
       </div>
       </div>
       

       <div class="col-md-6 col-lg-4">
         <div class="box">
          <i class="fas fa-school icon"></i>
         <h3>Suivi et orientation scolaire</h3>
         <ul class="actions-liste" >
          <li> Questionnaire d’intérêt</li>
          <li> Aide à la réussite</li>
          <li> Entretien de bilan</li>
          <br>
         </ul> 
       </div>
       </div>

       <div class="col-md-6 col-lg-4">
         <div class="box">
          <i class="fas fa-chart-line icon"></i>
         <h3>Gestion de la carrière</h3>
         <ul class="actions-liste">
          <li> Coaching mental</li>
          <li> Conseils juridiques & fiscaux</li>
          <li> Gestion des intérêts commerciaux</li>
          <br>
         </ul>
       </div>
       </div>


       <div class="col-md-6 col-lg-4 mt-4">
        <div class="box">
          <i class="fas fa-funnel-dollar icon"></i>
        <h3>Gestion financière</h3>
        <ul class="actions-liste">
          <li> Gestion de patrimoine</li>
          <li> Conseils en investissements</li>
          <li> Immobilier</li>
          <br>
        </ul>  
      </div>
      </div>


      <div class="col-md-6 col-lg-4 mt-4">
        <div class="box">
          <i class="fas fa-comments icon"></i>
        <h3>Communication et gestion d’image</h3>
        <ul class="actions-liste">
          <li> Gestion des réseaux sociaux</li>
          <li> Coaching en éloquence</li>
          <li> Relation presse</li>
        </ul> 
      </div>
      </div>

      <div class="col-md-6 col-lg-4 mt-4">
        <div class="box">
        <i class="fas fa-hand-holding-medical icon"></i>
        <h3>Médical et paramédical</h3>
        <ul class="actions-liste">
          <li> Kinésithérapie</li>
          <li> Médecine sportive</li>
          <li> Conseils nutritifs</li>
          <br>
        </ul> 
      </div>
      </div>
     </div>
    </div>
   </section>

    <!--END Actions-->


   <!--start GALERIE-->

   <div class="container-fluid">
    <div class="row galerie">
      <div class="column">
        <img src="img/photo a.jpeg" alt="photo sportif en salle" />
        <img src="img/photo b.jpeg" alt="photo sportif en salle"/>
        <img src="img/bg galeie.JPG" alt="photo sportif en salle">
        <img src="img/IMG-20210123-WA0027.jpg" alt="photo sportif en salle">
        <img src="img/WhatsApp Image 2021-03-15 at 17.09.58.jpeg" alt="photo sportif en salle">
        
      </div>
      <div class="column">
        <img src="img/photo f.jpeg" alt="seance kinésithérapeuthe">
        <img src="img/photo h.jpeg" alt="seance kinésithérapeuthe">
        <img src="img/photo d.jpeg" alt="seance kinésithérapeuthe">
        <img src="img/IMG-20210131-WA0018.jpg" alt="photo sportif en salle">
        <img src="img/bg galeie.JPG" alt="photo sportif en salle">
        <img src="img/DSCF0369.JPG" alt="photo sportif en salle">
      </div>
      <div class="column">
        <img src="img/photo x.jpeg" alt="photo sportif en salle">
        <img src="img/bgalerie.JPG" alt="seance de test physique">
        <img src="img/IMG-20210131-WA0052.jpg" alt="pose avec les parents">
        <img src="img/IMG-20210123-WA0039.jpg" alt="signature contrat">
        <img src="img/WhatsApp Image 2021-03-15 at 17.09.57.jpeg" alt="photo de groupe sportif ">
        
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
     <!--End GALERIE-->

     <!--START TEAMS-->
     <section id="teams">
       <div class="container">
         <div class="row">
          <h3 class="section-heading">Notre equipe</h3>

          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="team-single">
             <div class="content-area">
               <div class="side-one">
                 <div class="card">
                   <div class="card-body text-center">
                     <div class="img-area">
                       <img src="img/auguy.jpeg" alt="" class="img-fluid">
                      </div>
                       <h4>Auguy Mundala</h4>
                       <p class="text-center">Fondateur</p>
                    
                   </div>
                 </div>
               </div>
               <div class="side-two">
                 <div class="card">
                   <div class="card-body text-center mt-4">
                    <h4>Auguy Mundala</h4>
                    <p class="text-center">
                      Ancien footballeur professionnel, Auguy s’est réorienté dans le secteur financier.
                       Il apportera ses connaissances et ses années d’expérience 
                      pour assurer une exposition plus large des meilleures opportunités disponibles pour nos athlètes.
                    </p>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/auguy-mundala-826ba7188/" class="social-icon">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                     
                    </ul>
                   </div>
                 </div>
               </div>
             </div>
            </div>
          </div>
<!--card 2-->
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="team-single">
   <div class="content-area">
     <div class="side-one">
       <div class="card">
         <div class="card-body text-center">
           <div class="img-area">
             <img src="img/tresor.jpeg" alt=""class="img-fluid">
            </div>
             <h4>Trésor Diowo</h4>
             <p class="text-center">Co-fondateur</p>
           
         </div>
       </div>
     </div>
     <div class="side-two">
       <div class="card">
         <div class="card-body text-center mt-4">
          <h4>Trésor Diowo</h4>
          <p>
            Ancien footballeur professionnel reconverti en coach personnel,
             Trésor compte amener sa connaissance du milieu des sportifs de haut niveau 
             afin de préparer au mieux nos athlètes à pouvoir maximiser leur talent.
          </p>
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/tresor-diowo-wetshi-emongo-513079158/" class="social-icon">
                <i class="fab fa-linkedin"></i>
              </a>
            </li>
          </ul>
         </div>
       </div>
     </div>
   </div>
  </div>
</div>

      <!--card 3-->

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="team-single">
         <div class="content-area">
           <div class="side-one">
             <div class="card">
               <div class="card-body text-center">
                 <div class="img-area">
                   <img src="img/jonathan.jpeg" alt="" class="img-fluid">
                  </div>
                   <h4>Jonathan Besako</h4>
                   <p class="text-center">Co-fondateur</p>
                 
               </div>
             </div>
           </div>
           <div class="side-two">
             <div class="card">
               <div class="card-body text-center mt-4">
                <h4>Jonathan Besako</h4>
                <p>
                  Titulaire d’un Master en Communication appliquée, Jonathan sera responsable du pôle
                   communication 
                  de la structure. Plus encore, il assurera le suivi scolaire de nos jeunes athlètes.
                </p>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/jonathan-besako-4ab102109/" class="social-icon">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>   
                </ul>
               </div>
             </div>
           </div>
         </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>

      <!--card 4-->
     <div class="row">
      <h3 class="section-heading">Nos collaborateurs</h3>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="team-single">
         <div class="content-area">
           <div class="side-one">
             <div class="card">
               <div class="card-body text-center">
                 <div class="img-area">
                   <img src="img/toure.jpg" alt="" class="img-fluid">
                  </div>
                   <h4>Moumini Touré</h4>
                   <p class="text-center">Nutrithérapeuthe</p>   
               </div>
             </div>
           </div>
           <div class="side-two">
             <div class="card">
               <div class="card-body text-center mt-4">
                <h4>Moumini Touré</h4>
                <p>
                  Nutrithérapeuthe certifié, Moumini apportera son expertise pour 
                  atteindre les objectifs de performance et de bien-être.
                </p>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/moumini-touré-ba69922a/?originalSubdomain=be" class="social-icon">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li> 
                </ul>
               </div>
             </div>
           </div>
         </div>
        </div>
      </div>
      <!--card 5-->

      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="team-single">
         <div class="content-area">
           <div class="side-one">
             <div class="card">
               <div class="card-body text-center">
                 <div class="img-area">
                   <img src="img/tubiermont_benjamin.jpg" alt="" class="img-fluid">
                  </div>
                   <h4>Benjamin Tubiermont</h4>
                   <p class="text-center">Kinésithérapeuthe</p>  
               </div>
             </div>
           </div>
           <div class="side-two">
             <div class="card">
               <div class="card-body text-center mt-4">
                <h4>Benjamin Tubiermont</h4>
                <p>
                  Benjamin Tubiermont, qui n’est autre que le kinésithérapeuthe des moins de 21 ans 
                  des Diables rouges, prendra soin de nos joueurs en cas de pépins physiques.
                </p>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="" class="social-icon">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>   
                </ul>
               </div>
             </div>
           </div>
         </div>
        </div>
      </div>

      <!--card 6-->

      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="team-single">
         <div class="content-area">
           <div class="side-one">
             <div class="card">
               <div class="card-body text-center">
                 <div class="img-area">
                   <img src="img/leyi.png" alt="" class="img-fluid">
                  </div>
                   <h4>Leyi Piluka</h4>
                   <p class="text-center">Préparateur physique</p>
 
               </div>
             </div>
           </div>
           <div class="side-two">
             <div class="card">
               <div class="card-body text-center mt-4">
                <h4>Leyi Piluka</h4>
                <p>
                  Kinésithérapeuthe et ostéopathe de formation, c’est en tant que préparateur physique 
                  qu'il se chargera d’entretenir 
                  les performances de nos athlètes. Son oeil de practicien
                   lui permettra de cibler les points 
                   à travailler.
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/leyi-piluka-8402b2152/" class="social-icon">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
               </div>
             </div>
           </div>
         </div>
        </div>
       </div>
      



       <!--card 5-->

       <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="team-single">
         <div class="content-area">
           <div class="side-one">
             <div class="card">
               <div class="card-body text-center">
                 <div class="img-area">
                   <img src="img/serge.jpeg" alt="" class="img-fluid">
                  </div>
                   <h4>Serge Billong </h4>
                   <p class="text-center">Coach de vie et en préparation mentale</p>  
               </div>
             </div>
           </div>
           <div class="side-two">
             <div class="card">
               <div class="card-body text-center mt-4">
                <h4>Serge Billong </h4>
                <p>
                  Serge accompagnera nos joueurs de manière pragmatique dans leur 
                  désir de changement et d'optimisation de la performance grâce à 
                  l’établissement d’objectifs précis. 
                </p>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="" class="social-icon">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>   
                </ul>
               </div>
             </div>
           </div>
         </div>
        </div>
      </div>

      <!--card 6-->
    </div>
       </div>
     </section>

     <!--END TEAMS-->
      
    <!--COOKIE-->

    <div class="cookie-container">
      <p>
        En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de Cookies 
        pour réaliser des statistiques de navigation, et pour faciliter le partage d'information sur les réseaux sociaux.
         Pour en savoir plus et paramétrer les cookies 
      </p>

      <button class="cookie-btn">
        Okay
      </button>
    </div>

<!--END CONTACT-->
<!--contact section start-->
    <div class="contact-section" id="contact">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i><p class="po">Av Jules Bordet 160 Bte 16 1140 Evere</p></div>
        <div><i class="fas fa-envelope"></i><p>contact@mdsportsmanagement.be</p></div>
        <div><i class="fas fa-phone"></i><p>Trésor Diowo   +32486402341</p></div>
        <div><i class="fas fa-phone"></i><p>Auguy Mundala   +32476602397</p></div>
        <div><i class="fas fa-wallet"></i><p>Numéro d’entreprise:0732.502.626</p></div>
        
      </div>
      <div class="contact-form">
        <h3 class="text-white text-center pt-5 pb-3">Contactez-nous</h3>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Votre Nom" required>
          <input type="email" name="email" class="text-box" placeholder="Votre Email" required>
          <textarea name="message" rows="5" placeholder="Votre Message" required></textarea>
          <input type="submit" name="submit" class="send-btn mb-5" value="Envoyer">
        </form>
      </div>
    </div>
  
    <!--contact section end-->

      <!--START FOOTER-->

      
      <footer class="bg-white">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h2 class="footer-title text-center mt-4">MD Sports Management</h2>
              <h3 class="footer-description text-center">TOGETHER TO THE TOP</h3>
              <div class="footer-rs py-2">
                <a href="https://www.facebook.com/MDSportsManagement"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
                <a href="https://www.instagram.com/mdsportsmanagement/"><i class="fab fa-instagram fa-2x text-warning mx-3"></i></a>
                <a href="https://www.linkedin.com/company/md-sports-management/"><i class="fab fa-linkedin fa-2x text-info mx-3"></i></a>
                <a href="https://www.youtube.com/channel/UCh9H510IM9s-x8xUcPeAudg/"><i class="fab fa-youtube fa-2x text-danger mx-3"></i></a>
              </div>
              <p class="py-4 text-center">&copy;Copyright 2021 by ONE BOSS</p>
            </div>
          </div>
        </div>
      </footer>



      <!--END FOOTER-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- JavaScript Bundle with Popper -->

<script src="app.js"></script>
<script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="venobox/venobox.min.js"></script>
<script>
  $(document).ready(function () {
    $('.venobox').venobox();
  });
</script>

<script type="text/javascript">
      if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
       }
 </script>
</body>
</html>

