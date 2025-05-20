@extends('default')
@section('content')

<!-- ========================
       page title 
    =========================== -->
<section class="page-title-layout4 page-title-light bg-overlay bg-parallax text-center">
  <div class="bg-img"><img src="{{ asset('images/page-titles/7.png') }}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="pagetitle__heading"></h1>
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
            <!-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Concierge & gardien</li> -->
          </ol>
        </nav>
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- =========================
      Pricing  
      =========================== -->
<section class="pricing-layout4 pb-30 pt-30">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="heading text-center mb-60">
          <h2 class="heading__title">CONCIERGE, GARDIEN & GESTION DE SYNDIC </h2>
          <h3 class="heading__subtitle">des professionnelles à votre service</h3>
          <p></p>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="pricing-package p-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/Concierge.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Optez pour la tranquillité d'esprit grâce à notre service de conciergerie et de gardiennage sur mesure</h5>
                  <p class="package__desc" style="text-align:left ;">Allo Maison met à votre disposition des concierges et gardiens expérimentés et rigoureux pour assurer la sécurité, le confort et le bien-être des résidents de votre immeuble ou propriété privée. Nos professionnels sont formés et qualifiés pour vous offrir un service de conciergerie et de gardiennage haut de gamme, répondant aux besoins spécifiques de votre résidence.
                    Nous pouvons également mettre à votre disposition des gardiens qui peuvent être affectés à des des exploitations agricoles, des fermes… Parfaitement capables d’assurer et d’entretenir les lieux, ces personnes sont généralement parfaitement à l’aise avec l’environnement rural (Prendre soin des bétailles, des plantations…)
                  </p>
                </div>

              </div><!-- /.package__body -->
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.pricing-package -->

        <div class="pricing-package p-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Des concierges et gardiens à votre service</h5>
                  <p class="package__desc" style="text-align: left;">
                    Nos concierges et gardiens sont des professionnels de proximité, à l'écoute des résidents et soucieux de leur bien-être. Ils possèdent toutes les compétences nécessaires pour assurer la gestion quotidienne de votre résidence, dans le respect des règles et des valeurs de votre copropriété.<br>
                    Voici quelques-unes des missions que peuvent assurer nos concierges et gardiens :<br>
                    • Accueil et contrôle des entrées et sorties: Ils veillent à la sécurité des occupants en contrôlant les entrées et sorties de la résidence, et en identifiant les visiteurs.<br>
                    • Surveillance des parties communes: Ils effectuent des rondes régulières pour s'assurer de la propreté, de la sécurité et du bon état des parties communes (couloirs, ascenseurs, halls d'immeuble, espaces verts, etc.).<br>
                    • Gestion du courrier et des colis: Ils réceptionnent, trient et distribuent le courrier et les colis aux résidents.<br>
                    • Entretien courant des locaux : Ils assurent le nettoyage quotidien des parties communes, le vidage des poubelles, le remplacement des ampoules, etc.<br>
                    • Travaux de petite maintenance : Ils effectuent des petits travaux de maintenance et de réparation courante, tels que la réparation de serrures, le remplacement de fusibles, etc.<br>
                    • Organisation de services annexes: Ils peuvent également organiser des services annexes pour les résidents, tels que le ménage, le jardinage, le dépannage, etc.<br>
                  </p>

                </div>

              </div><!-- /.package__body -->
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/Concierge2.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.pricing-package -->
        <div class="pricing-package p-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/Concierge3.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Un service de gestion de syndic personnalisé</h5>
                  <p class="package__desc" style="text-align: left;">
                    Si vous êtes syndic d'une copropriété, Allo Maison vous propose un service de gestion de syndic qui inclut l’entretien de l’immeuble avec tout ce que cela peut comprendre dont l’affectation de femme de ménage, conciergerie, réparation et autres services d’entretien.<br>
                    <b>Confiez la gestion de votre résidence à des professionnels compétents et fiables:</b><br>
                    Avec Allo Maison, vous avez l'assurance de confier la gestion de votre résidence à des professionnels compétents et dévoués. Nous sommes fiers de la qualité de nos services et de la satisfaction de nos clients. N'attendez plus pour découvrir le confort et la tranquillité d'esprit d'une résidence bien gérée. Contactez-nous dès aujourd'hui pour un devis gratuit et personnalisé.
                  </p>
                  <a href="{{ route('contact-us') }}" class="btn btn__primary justify-content-between">
                    <span>Je suis intéressé !</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div>

              </div><!-- /.package__body -->
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.pricing-package -->

      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.pricing  -->

<div class="row" style="padding-bottom: 30px;">
  <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 text-center">
    <div class="col-12">
      <p class="text__link mb-0">Pour un service qui répond à vos normes les plus élevées, vous avez besoin d’une équipe dédiée de spécialistes formés. Nous arrivons à chaque visite avec toutes les fournitures nécessaires pour servir en profondeur votre maison grâce à notre vaste processus de service.
        <a href="{{ route('contact-us') }}" class="btn btn__secondary btn__link mx-1">
          <span>Contactez-nous Pour Plus D'informations</span> <i class="icon-arrow-right icon-outlined"></i>
        </a>
      </p>
    </div><!-- /.col-12 -->
  </div><!-- /.row -->
</div><!-- /.container -->
</div>
</section><!-- /.pricing  -->

@stop