@extends('default')
@section('content')

<!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700, "fade": true, "cssEase": "linear", "autoplay": true, "autoplaySpeed": 3000}'>
        <div class="slide-item bg-overlay align-v-h">
          <div class="bg-img"><img src="{{ asset('images/sliders/Slider-1.jpg') }}" alt="slide img"></div>
          <div class="container pt-40" style="width: 90%;">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title">Pour <span style="text-transform: lowercase;">votre personnel de maison, <br> faites appel à </span>Allo
                    maison!</h2>
                  <p class="slide__desc">Pour vos besoins, contactez-nous par téléphone<br> ou remplissez le formulaire..
                  </p>
                  <div class="d-flex flex-wrap align-items-center">
                    <a href="{{ route('contact-us') }}" class="btn btn__accent mr-30" id="remplir-formulaire">
                      <span>Remplir le formulaire</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a href="tel:212661409190" class="btn btn__white">
                      appelez nous
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
    
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item bg-overlay align-v-h">
          <div class="bg-img"><img src="{{ asset('images/sliders/Slider-5.png') }}" alt="slide img"></div>
          <div class="container pt-40" style="width: 80%">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title" style="font-size:40px ;">Pour <span style="text-transform: lowercase;">Besoin ? Contactez-nous ou remplissez le formulaire.</span>
                  </h2>
                  <p class="slide__desc">Que ce soit pour des questions, des demandes spécifiques<br> ou toute autre nécessité
                  </p>
                  <div class="d-flex flex-wrap align-items-center">
                    <a href="{{ route('contact-us') }}" class="btn btn__accent mr-30">
                      <span>Remplir le formulaire</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a href="tel:212661409190" class="btn btn__white">
                      appelez nous
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
      <div class="container position-relative">
        <div class="fancybox-item mb-0 d-none">
          <div class="fancybox__icon">
            <i class="icon-sanitary"></i>
          </div>
          <h2 class="fancybox__title"> </h2>
        </div><!-- /.fancybox-item -->
      </div>
    </section><!-- /.slider -->

<!-- ========================
      About Layout 1
    =========================== -->

<!-- ========================
        Services Layout 1
    =========================== -->
    <section class="py-5 position-relative bg-light">
      <div class="container">
        <!-- Heading -->
        <div class="row mb-5">
          <div class="col-lg-6 offset-lg-3 text-center">
            <p class="text-secondary fw-medium mb-2">Nos profils les plus demandés</p>
            <h2 class="fw-bold display-5">Des services spécialisés adaptés à vos locaux</h2>
          </div>
        </div>
        
        <!-- Services Grid -->
        <div class="row g-4">
          <!-- Service 1: Employée Polyvalente -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-sm">
              <div class="position-relative">
                <img src="images/services/Polyvalente.jpeg" class="card-img-top rounded-top-4" alt="Employée Polyvalente" style="height: 220px; object-fit: cover;">
                <div class="position-absolute translate-middle-x" style="bottom: -35px; left: 7%;">
                  <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; border: 2px solid #f9f9f9;">
                    <i class="fas fa-user text-primary" style="font-size: 1.2rem;"></i>
                  </div>
                </div>
              </div>
              <div class="card-body pt-5 mt-3 text-center">
                <h4 class="card-title fw-bold mb-3">Profils polyvalentes</h4>
                <p class="card-text text-secondary">Allo Maison adapte son offre à vos besoins, et vous trouve une employée de maison polyvalente aux compétences variées, de la garde d’enfants à la cuisine, en passant par le ménage.</p>
              </div>
              <div class="card-footer bg-white border-0 pb-4">
                <a href="{{ route('employée-polyvalente') }}" class="btn btn-outline-primary w-100 rounded-pill d-flex justify-content-between align-items-center">
                  <span>Voir plus</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        
          <!-- Service 2: Cuisinière -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-sm">
              <div class="position-relative">
                <img src="images/services/Cuisinière.jpeg" class="card-img-top rounded-top-4" alt="Cuisinière" style="height: 220px; object-fit: cover;">
                <div class="position-absolute translate-middle-x" style="bottom: -35px; left: 7%;">
                  <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; border: 2px solid #f9f9f9;">
                    <i class="fas fa-utensils text-primary" style="font-size: 1.2rem;"></i>
                  </div>
                </div>
              </div>
              <div class="card-body pt-5 mt-3 text-center">
                <h4 class="card-title fw-bold mb-3">CUISINIERES</h4>
                <p class="card-text text-secondary">Des profils spécialisés dédiées à la cuisine. Allo maison met a votre disposition  des profils soigneusement sélectionnés pour leur compétences et leur discrétions. Nos cuisinières professionnelle  sont capable de vous préparer des  marocaines, européenne ou asiatique</p>
              </div>
              <div class="card-footer bg-white border-0 pb-4">
                <a href="{{ route('cuisinière') }}" class="btn btn-outline-primary w-100 rounded-pill d-flex justify-content-between align-items-center">
                  <span>Voir plus</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        
          <!-- Service 3: Nounou Pro -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-sm">
              <div class="position-relative">
                <img src="images/services/Nounou.jpeg" class="card-img-top rounded-top-4" alt="Nounou Pro" style="height: 220px; object-fit: cover;">
                <div class="position-absolute translate-middle-x" style="bottom: -35px; left: 7%;">
                  <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; border: 2px solid #f9f9f9;">
                    <i class="fas fa-baby text-primary" style="font-size: 1.2rem;"></i>
                  </div>
                </div>
              </div>
              <div class="card-body pt-5 mt-3 text-center">
                <h4 class="card-title fw-bold mb-3">Nounou Pro</h4>
                <p class="card-text text-secondary">Nous proposons des nounous qualifiées et attentionnées, capables de prendre en charge les enfants de tous âges, de la naissance jusqu'à l'entrée à l'école primaire. Nos nounous sont polyvalentes...</p>
              </div>
              <div class="card-footer bg-white border-0 pb-4">
                <a href="{{ route('nounou') }}" class="btn btn-outline-primary w-100 rounded-pill d-flex justify-content-between align-items-center">
                  <span>Voir plus</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        
          <!-- Service 4: Femmes De Ménages -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-sm">
              <div class="position-relative">
                <img src="images/services/Femmes-De-Ménages.jpeg" class="card-img-top rounded-top-4" alt="Femmes De Ménages" style="height: 220px; object-fit: cover;">
                <div class="position-absolute translate-middle-x" style="bottom: -35px; left: 7%;">
                  <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; border: 2px solid #f9f9f9;">
                    <i class="fas fa-broom text-primary" style="font-size: 1.2rem;"></i>
                  </div>
                </div>
              </div>
              <div class="card-body pt-5 mt-3 text-center">
                <h4 class="card-title fw-bold mb-3">Femmes De Ménages</h4>
                <p class="card-text text-secondary">Grâce À Allo Maison, Vous Pouvez Compter Sur Une Professionnelle Du Ménage Quel Que Soit La Fréquence Souhaitée. Votre Foyer Reste Propre Et Confortable...</p>
              </div>
              <div class="card-footer bg-white border-0 pb-4">
                <a href="{{ route('femme-de-menage') }}" class="btn btn-outline-primary w-100 rounded-pill d-flex justify-content-between align-items-center">
                  <span>Voir plus</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        
          <!-- Service 5: Garde Malade -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-sm">
              <div class="position-relative">
                <img src="images/services/Garde-Malade.jpeg" class="card-img-top rounded-top-4" alt="Garde Malade" style="height: 220px; object-fit: cover;">
                <div class="position-absolute translate-middle-x" style="bottom: -35px; left: 7%;">
                  <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; border: 2px solid #f9f9f9;">
                    <i class="fas fa-user-nurse text-primary" style="font-size: 1.2rem;"></i>
                  </div>
                </div>
              </div>
              <div class="card-body pt-5 mt-3 text-center">
                <h4 class="card-title fw-bold mb-3">Garde Malade</h4>
                <p class="card-text text-secondary">Prendre soin d'un proche dépendant est une responsabilité importante et parfois éprouvante. Chez Allo Maison, nous comprenons les défis que vous pouvez rencontrer...</p>
              </div>
              <div class="card-footer bg-white border-0 pb-4">
                <a href="{{ route('Garde-malade') }}" class="btn btn-outline-primary w-100 rounded-pill d-flex justify-content-between align-items-center">
                  <span>Voir plus</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        
          <!-- Service 6: Infirmière -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-sm">
              <div class="position-relative">
                <img src="images/services/infermiere2.jpeg" class="card-img-top rounded-top-4" alt="Infirmière" style="height: 220px; object-fit: cover;">
                <div class="position-absolute translate-middle-x" style="bottom: -35px; left: 7%;">
                  <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; border: 2px solid #f9f9f9;">
                    <i class="fas fa-stethoscope text-primary" style="font-size: 1.2rem;"></i>
                  </div>
                </div>
              </div>
              <div class="card-body pt-5 mt-3 text-center">
                <h4 class="card-title fw-bold mb-3">Infirmière</h4>
                <p class="card-text text-secondary">Nos gardes-malades / Infirmières sont disponibles pour des interventions régulières (hebdomadaires, bihebdomadaires, mensuelles) ou ponctuelles. Allo Maison saura s'adapter à vos besoins en vous proposant un...</p>
              </div>
              <div class="card-footer bg-white border-0 pb-4">
                <a href="{{ route('Garde-malade') }}" class="btn btn-outline-primary w-100 rounded-pill d-flex justify-content-between align-items-center">
                  <span>Voir plus</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        
          <!-- Service 7: Gardien -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-sm">
              <div class="position-relative">
                <img src="images/services/Gardien.jpeg" class="card-img-top rounded-top-4" alt="Gardien" style="height: 220px; object-fit: cover;">
                <div class="position-absolute translate-middle-x" style="bottom: -35px; left: 7%;">
                  <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; border: 2px solid #f9f9f9;">
                    <i class="fas fa-shield-alt text-primary" style="font-size: 1.2rem;"></i>
                  </div>
                </div>
              </div>
              <div class="card-body pt-5 mt-3 text-center">
                <h4 class="card-title fw-bold mb-3">Gardien</h4>
                <p class="card-text text-secondary">Allo Maison met à votre disposition des concierges et gardiens expérimentés et rigoureux pour assurer la sécurité, le confort et le bien-être des résidents de votre immeuble...</p>
              </div>
              <div class="card-footer bg-white border-0 pb-4">
                <a href="{{ route('Concierge & gardien') }}" class="btn btn-outline-primary w-100 rounded-pill d-flex justify-content-between align-items-center">
                  <span>Voir plus</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        
          <!-- Service 8: Coursier -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-sm">
              <div class="position-relative">
                <img src="images/services/coursier.jpeg" class="card-img-top rounded-top-4" alt="Coursier" style="height: 220px; object-fit: cover;">
                <div class="position-absolute translate-middle-x" style="bottom: -35px; left: 7%;">
                  <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; border: 2px solid #f9f9f9;">
                    <i class="fas fa-motorcycle text-primary" style="font-size: 1.2rem;"></i>
                  </div>
                </div>
              </div>
              <div class="card-body pt-5 mt-3 text-center">
                <h4 class="card-title fw-bold mb-3">Coursier</h4>
                <p class="card-text text-secondary">Besoin de faire des courses ou d'effectuer une livraison ? Laissez nos chauffeurs s'en charger pour vous en toute rapidité et sécurité. Que ce soit pour récupérer vos achats...</p>
              </div>
              <div class="card-footer bg-white border-0 pb-4">
                <a href="Chauffeur-Coursier.html" class="btn btn-outline-primary w-100 rounded-pill d-flex justify-content-between align-items-center">
                  <span>Voir plus</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        
          <!-- Service 9: Chauffeur -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-sm">
              <div class="position-relative">
                <img src="images/services/chauffeur.jpeg" class="card-img-top rounded-top-4" alt="Chauffeur" style="height: 220px; object-fit: cover;">
                <div class="position-absolute translate-middle-x" style="bottom: -35px; left: 7%;">
                  <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; border: 2px solid #f9f9f9;">
                    <i class="fas fa-car text-primary" style="font-size: 1.2rem;"></i>
                  </div>
                </div>
              </div>
              <div class="card-body pt-5 mt-3 text-center">
                <h4 class="card-title fw-bold mb-3">Chauffeur</h4>
                <p class="card-text text-secondary">Nos chauffeurs sont des professionnels expérimentés qui ont à cœur de vous offrir une prestation de qualité. Ils sont formés et régulièrement évalués pour assurer votre...</p>
              </div>
              <div class="card-footer bg-white border-0 pb-4">
                <a href="{{ route('Chauffeur : Coursier') }}" class="btn btn-outline-primary w-100 rounded-pill d-flex justify-content-between align-items-center">
                  <span>Voir plus</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





<!-- ======================
     Work Process 
    ========================= -->
<section class="work-process-layout1" style="padding-bottom: unset !important" id="qui-sommes-nous">
  <div class="bg-img"><img src="{{ asset('images/backgrounds/1.png') }}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="heading text-center mb-40">
          <h3 class="heading__title">Comment ça marche</h3>
          <!-- <h2 class="heading__subtitle">Il est impératif de définir une description claire et précise de votre besoin. </h2> -->
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row process-row">
      <!-- process item #1 -->
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="process-item text-center">
          <div class="circle__icon"></div>
          <div class="check__icon">
            <i class="icon-checkmark"></i>
          </div>
          <h4 class="process__title">1re étape : </h4>
          <p class="process__desc">Dans le but d’assurer un service premium et qualitatif, lors du premier contact en général téléphonique. Il est impératif de définir</p>
          <p id="etap1-text" style="display:none">
            une description claire et précise du besoin. À savoir : type de prestation et profil recherché. Nombre de tâches souhaitées, ainsi que le budget octroyé. Nous pouvons vous conseiller par notre expérience si nécessaire afin d’optimiser tous les critères qui assurerons la stabilité de votre futur employé (e)..
          </p>
          <button class="btn btn-primary" id="etap1-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Voir plus
          </button>




          <div class="process__icon">
            <i class="icon-mop"></i>
          </div><!-- /.process__icon -->
        </div><!-- /.process-item -->
      </div><!-- /.col-lg-3 -->
      <!-- process item #2 -->
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="process-item text-center">
          <div class="circle__icon"></div>
          <div class="check__icon">
            <i class="icon-checkmark"></i>
          </div>
          <h4 class="process__title">2è étape :</h4>
          <p class="process__desc">Une fois cette étape terminée, nous pouvons traiter votre requête. Toute demande est traitée de manière singulière et personnalisée.
          </p>
          <div class="process__icon">
            <i class="icon-sponge"></i>
          </div><!-- /.process__icon -->
        </div><!-- /.process-item -->
      </div><!-- /.col-lg-3 -->
      <!-- process item #3 -->
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="process-item text-center">
          <div class="circle__icon"></div>
          <div class="check__icon">
            <i class="icon-checkmark"></i>
          </div>
          <h4 class="process__title">3è étape : </h4>
          <p class="process__desc">Un commercial vous contactera pour vous confirmer que le profil en question a été sélectionné afin d’établir un rendez-vous dans</p>

          <p id="etap3-text" style="display:none">
            nos locaux. Il est rappelé que le profil sélectionné peut rester en stand by 48 h . Après ce délai, celui-ci est susceptible de ne plus être disponible.
          </p>
          <button class="btn btn-primary" id="etap3-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Voir plus
          </button>

          <div class="process__icon">
            <i class="icon-tap"></i>
          </div><!-- /.process__icon -->
        </div><!-- /.process-item -->
      </div><!-- /.col-lg-3 -->
      <!-- process item #4 -->
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="process-item text-center">
          <div class="circle__icon"></div>
          <div class="check__icon">
            <i class="icon-checkmark"></i>
          </div>
          <h4 class="process__title">
            <nobr>4è étape (étape final): </nobr>
          </h4>
          <p class="process__desc">Un entretien d’embauche accompagné d’un de nos collaborateurs en présence du profil est effectué selon vos critères de</p>


          <p id="etap4-text" style="display:none">
            recherche afin de simplifier la future collaboration. Si la personne est validée, nous allons procéder à la signature du contrat par les trois parties. Deux exemplaires un pour vous et un pour nous seront établie. Accompagner du dossier juridique et des papiers d’identité de votre futur employée. Les honoraires de l’agence devront être réglés auprès du commercial à la fin de l’entretien. Voir modalités afin d’évaluer votre prestation NB : Si vous êtes dans une ville autre que Casablanca ou à l’étranger, tout le processus se feras à distance nous sommes joignable sur WhatsApp également +212699780299
          </p>
          <button class="btn btn-primary" id="etap4-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Voir plus
          </button>


          <div class="process__icon">
            <i class="icon-vacuum-cleaner"></i>








          </div><!-- /.process__icon -->
        </div><!-- /.process-item -->

      </div><!-- /.col-lg-3 -->


      <!-- ========================
      About Layout 1
    =========================== -->
      <section class="about-layout1 pt-40 pb-0 ">
        <div class="container">
          <div class="heading-layout2">
            <h3 class="heading__title mb-5">Qui sommes nous</h3>
          </div><!-- /heading -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
              <div class="row">
                <div class="col-12">

                </div>
                <div class="col-sm-12 col-md-2">
                  <div class="about__icon">
                    <i class="icon-bucket"></i>
                  </div>
                </div><!-- /.col-sm-2 -->
                <div class="col-sm-12 col-md-10">
                  <div class="about__Text">
                    <p class="mb-20" class="centered-text">"Créée en 2015, Allo Maison est une société qui s’est rapidement positionnée en tant que leader au sein du marché du personnel de maison au Maroc et a l’étranger.
                      Après avoir longuement étudié le marché marocain, nous nous sommes rendu compte que ce domaine connaissait de grandes lacunes, des employés de maison souvent placés sans aucun filtre ni garantie de la part des courtiers, des entretiens bâclés, un manque de professionnalisme de la part des employés recrutés.

                      À partir de là, nous avons su nous démarquer de nos concurrents tout en restant dans des prix raisonnables.

                      Notre devise est un client toujours satisfait et à cette fin nous usons de tous les moyens à notre
                      disposition afin d’apporter des solutions ‘‘sur-mesure’’ à chacun de nos clients
                      Afin que le maître-mot qui le caractérise reste satisfactions ." </p>

                  </div>

                </div><!-- /.col-sm-10 -->
              </div><!-- /.row -->
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
              <div class="about__img">
                <img src="{{ asset('images/page-titles/sara png.png') }}" alt="about">



              </div><!-- /.about__img -->
            </div><!-- /.col-xl-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.About Layout 1 -->









    </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.Work Process -->


<script>
  var button1 = document.getElementById("etap1-button");
  var text1 = document.getElementById("etap1-text");

  button1.addEventListener("click", function() {
    if (text1.style.display === 'none') {
      text1.style.display = 'block';
    } else {
      text1.style.display = 'none';
    }
  });

  var button3 = document.getElementById("etap3-button");
  var text3 = document.getElementById("etap3-text");

  button3.addEventListener("click", function() {
    if (text3.style.display === 'none') {
      text3.style.display = 'block';
    } else {
      text3.style.display = 'none';
    }
  });

  var button4 = document.getElementById("etap4-button");
  var text4 = document.getElementById("etap4-text");

  button4.addEventListener("click", function() {
    if (text4.style.display === 'none') {
      text4.style.display = 'block';
    } else {
      text4.style.display = 'none';
    }
  });
</script>






<!-- ========================
      feature carousel
    ========================== -->
<section class="feature-layout1 feature-carousel bg-overlay bg-overlay-secondary-gradient pt-50 pb-0" id="avis">
  <div class="bg-img"><img src="{{ asset('images/banners/3.jpeg') }}" alt="background"></div>
  <div class="container" style="width: 80%;">
    <div class="row heading">
      <div class="col-12">
        <h2 class="heading__subtitle color-accent"></h2>
      </div><!-- /.col-12 -->
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
        <h3 class="heading__title color-accent">Avis!</h3>
      </div><!-- /.col-xl-5 -->

    </div><!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="slick-carousel carousel-dots-light mb-30"
          data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
          <!-- feature item #1 -->
          <div class="feature-item">
            <div class="feature__body">
              <div class="feature__icon">
                <i class="icon-phone"></i>
              </div><!-- /.feature__icon -->
              <h4 class="feature__title"> Alway Shopping </h4>
              <p class="feature__desc">Je recommande vivement leurs services à tous ceux qui cherchent une aide de confiance</p>

            </div><!-- /.feature__body -->
            <div class="feature__img">
              <img src="{{ asset('images/features/1.jpeg') }}" alt="feature">
            </div><!-- /.feature__img -->
          </div><!-- /.feature-item -->
          <!-- feature item #2 -->
          <div class="feature-item">
            <div class="feature__body">
              <div class="feature__icon">
                <i class="icon-phone"></i>
              </div><!-- /.feature__icon -->
              <h4 class="feature__title">Zeina Fayad </h4>
              <p class="feature__desc"> Réactivité, professionnels ! j’ai fais appel à leurs services et j’étais
                très satisfaite, je recommande vivement !!.</p>

            </div><!-- /.feature__body -->
            <div class="feature__img">
              <img src="{{ asset('images/features/2.jpeg') }}" alt="feature">
            </div><!-- /.feature__img -->
          </div><!-- /.feature-item -->
          <!-- feature item #3 -->
          <div class="feature-item">
            <div class="feature__body">
              <div class="feature__icon">
                <i class="icon-phone"></i>
              </div><!-- /.feature__icon -->
              <h4 class="feature__title">Ahlam Rziek</h4>
              <p class="feature__desc">Service impeccable. Staff attentifs, sérieux et très professionnel. Je
                recommande vivement Allo maison !.</p>

            </div><!-- /.feature__body -->
            <div class="feature__img">
              <img src="{{ asset('images/features/3.jpeg') }}" alt="feature">
            </div><!-- /.feature__img -->
          </div><!-- /.feature-item -->
          <!-- feature item #4 -->

        </div><!-- /.feature-item -->
      </div>
      <!-- /.carousel -->
    </div><!-- /.col-12 -->
  </div><!-- /.row -->


  </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.feature-carousel -->

<!-- =========================
      Pricing  
      =========================== -->
<section class="pricing-layout2 pb-40 pt-40" id="Nos Chiffres">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="heading text-center mb-40">
          <h2 class="heading__subtitle"></h2>
          <h3 class="heading__title">Nos chiffres </h3>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row packages-wrapper">
      <!-- pricing item #1-->
      <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="pricing-package">
          <div class="package__body pb-0">
            <h4 class="package__subtitle">5,850 </h4>
            <h5 class="package__title mb-2">Familles satisfaites</h5>
            <div class="d-flex justify-content-center mb-10">

            </div>

          </div><!-- /.package__body -->
          <div class="package__footer d-flex">
            <div class="bg-img" style="height:100%;"><img src="{{ asset('images/pricing/1.jpeg') }}" alt="bg"></div>
            <div class="package__price">
              <span class="package__currency"></span> <span></span><span class="package__period"></span>
            </div>
            <a href="{{ route('contact-us') }}" class="btn btn__primary btn__block justify-content-between">
              <span> </span>
              <i class="icon-arrow-right"> </i>Contactez-nous !
            </a>
          </div><!-- /.package__footer -->
        </div><!-- /.pricing-package -->
      </div><!-- /.col-lg-4 -->
      <!-- pricing item #2-->
      <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="pricing-package">
          <div class="package__body pb-0">
            <h4 class="package__subtitle">5.845</h4>
            <h5 class="package__title mb-2">Profils placés</h5>
            <div class="d-flex justify-content-center mb-40">

            </div>



          </div><!-- /.package__footer -->
          <div class="package__footer d-flex">
            <div class="bg-img" style="height:100%;"><img src="{{ asset('images/pricing/2.jpeg') }}" alt="bg"></div>
            <div class="package__price">
              <span class="package__currency"></span><span></span><span class="package__period"></span>
            </div>
            <a href="{{ route('contact-us') }}" class="btn btn__primary btn__block justify-content-between">
              <span> </span>
              <i class="icon-arrow-right"> </i> Contactez-nous !
            </a>
          </div><!-- /.package__footer -->
        </div><!-- /.pricing-package -->
      </div><!-- /.col-lg-4 -->
      <!-- pricing item #3-->
      <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="pricing-package">
          <div class="package__body pb-0">
            <h4 class="package__subtitle">6ans</h4>
            <h5 class="package__title mb-2">Expériences</h5>
            <div class="d-flex justify-content-center mb-40">
            </div>
          </div><!-- /.package__footer -->
          <div class="package__footer d-flex">
            <div class="bg-img" style="height:100% !important;"><img src="{{ asset('images/pricing/3.jpeg') }}" alt="bg">
            </div>
            <div class="package__price">
              <span class="package__currency"></span><span></span><span class="package__period"></span>
            </div>
            <a href="{{ route('contact-us') }}" class="btn btn__primary btn__block justify-content-between">
              <span></span>
              <i class="icon-arrow-right"> </i> Contactez-nous !
            </a>
          </div><!-- /.package__footer -->
        </div><!-- /.pricing-package -->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 text-center">
        <p class="text__link mb-0">Pour un service qui répond à vos normes les plus élevées, vous avez besoin d’une équipe dédiée de spécialistes formés. Nous arrivons à chaque visite avec toutes les fournitures nécessaires pour servir en profondeur votre maison grâce à notre vaste processus de service.
          <a href="{{ route('contact-us') }}" class="btn btn__primary action__btn-request mt-5 mb-5">
            <span>Contactez-nous Pour Plus D'informations</span> <i class="icon-arrow-right icon-outlined"></i>
          </a>
        </p>
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.pricing  -->

<!-- ======================
      Portfolio
    ========================= -->



@stop