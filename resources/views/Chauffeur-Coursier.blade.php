@extends('default')
@section('content')
<!-- ========================
       page title 
    =========================== -->
<section class="page-title-layout4 page-title-light bg-overlay bg-parallax text-center">
  <div class="bg-img"><img src="{{ asset('images/page-titles/6-1.png') }}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="pagetitle__heading"></h1>
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
            <!-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chauffeur / Coursier</li> -->
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
          <h2 class="heading__title">CHAUFFEUR / COURSIER </h2>
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
                <img src="{{ asset('images/pricing/banners/Chauffeur.jpeg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Profitez d'un service haut de gamme et personnalisé pour tous vos déplacements avec nos chauffeurs professionnels</h5>
                  <p class="package__desc" style="text-align:left ;">Nos chauffeurs sont des professionnels expérimentés qui ont à cœur de vous offrir une prestation de qualité. Ils sont formés et régulièrement évalués pour assurer votre sécurité et votre satisfaction. Ils possèdent une connaissance parfaite de la ville et des environs, et sont aptes à vous conduire à destination dans les meilleurs délais, en veillant à votre confort.</p>
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
                  <h5 class="package__subtitle">Des services sur mesure pour répondre à vos besoins</h5>
                  <p class="package__desc" style="text-align: left;">
                    Nous vous proposons une large gamme de services de transport privé pour répondre à tous vos besoins :<br>
                    • Transferts aéroports et gares: Nous vous accueillons à votre arrivée à l'aéroport ou à la gare et vous conduisons à votre destination finale, hôtel, lieu de rendez-vous professionnel ou domicile.<br>
                    • Trajets domicile-travail: Simplifiez vos déplacements quotidiens en confiant votre trajet domicile-travail à nos chauffeurs ponctuels et fiables.<br>
                    • Courses et livraisons: Besoin de faire des courses ou d'effectuer une livraison ? Laissez nos chauffeurs s'en charger pour vous.<br>
                    • Mise à disposition à la journée: Pour vos déplacements professionnels ou personnels sur une journée entière, profitez des services d'un chauffeur privé à votre disposition.<br>
                    • Véhicules haut de gamme: Pour vos événements spéciaux ou vos besoins de représentation, nous vous proposons également des véhicules haut de gamme avec chauffeur.<br>
                  </p>

                </div>

              </div><!-- /.package__body -->
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/Chauffeur2.jpeg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.pricing-package -->
        <div class="pricing-package p-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/Chauffeur3.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Un service disponible pour des besoins permanents, ponctuels ou hebdomadaires</h5>
                  <p class="package__desc" style="text-align: left;">
                    Allo Maison saura s’adapter à vos besoins en vous proposant un accompagnement et une offre de service personnalisée
                    Contactez-nous dès aujourd'hui pour réserver votre chauffeur privé.

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