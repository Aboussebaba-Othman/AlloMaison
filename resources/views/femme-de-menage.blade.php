@extends('default')
@section('content')

<!-- ========================
       page title 
    =========================== -->
<section class="page-title-layout4 page-title-light bg-overlay bg-parallax text-center">
  <div class="bg-img"><img src="{{ asset('images/page-titles/11.png') }}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="pagetitle__heading"></h1>
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
            <!-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Femme de Ménage</li> -->
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
          <h2 class="heading__title">FEMME DE MÉNAGE</h2>
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
                <img src="{{ asset('images/banners/menage.jpeg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Offrez-vous un quotidien serein avec nos femmes de ménage qualifiées et expérimentées</h5>
                  <p class="package__desc" style="text-align:left ;">Un foyer propre et bien rangé, c'est la clé d'un quotidien serein et harmonieux. Chez Allo Maison, nous comprenons l'importance d'un environnement sain et agréable à vivre. C'est pourquoi nous mettons à votre disposition des femmes de ménage expérimentées et rigoureusement sélectionnées pour vous offrir un service de ménage de qualité.<br>
                    <b>Nos femmes de ménage : des professionnelles à votre service.</b><br>
                    Nos femmes de ménage ne sont pas de simples « aides-ménagères ». Ce sont des professionnelles formées et accompagnées par nos soins pour vous assurer un service qualitatif. Elles possèdent toutes les compétences nécessaires pour répondre à vos besoins spécifiques, que vous recherchiez un ménage complet régulier ou un nettoyage approfondi ponctuel.<br>


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
                  <p class="package__desc" style="text-align: left;"> Que vous soyez un particulier, une famille nombreuse ou un professionnel soucieux de la propreté de ses locaux, nous avons la solution de ménage qu'il vous faut. Nos femmes de ménage s'adaptent à vos besoins et à votre rythme de vie pour vous offrir un service sur mesure.<br>
                    - Ménage complet : aspirateur, serpillière, lavage des sols, vitres, etc.<br>
                    - Nettoyage approfondi : dégraissage de la cuisine, des sanitaires, etc.<br>
                    - Repassage du linge<br>
                    - Rangement et organisation<br>
                    - Nettoyage après travaux ou déménagement<br>
                    - Nettoyage de vitres<br>
                  </p>

                </div>

              </div><!-- /.package__body -->
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/banners/menage2.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.pricing-package -->
        <div class="pricing-package p-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/3.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Des interventions régulières ou ponctuelles </h5>
                  <p class="package__desc" style="text-align:left"> Nos femmes de ménage sont disponibles pour des interventions régulières (hebdomadaires, bihebdomadaires, mensuelles) ou ponctuelles (grand ménage, déménagement, etc.).<br>
                    <b>Allo Maison : votre partenaire pour un quotidien serein.</b><br>
                    Avec Allo Maison, vous avez l'assurance de confier votre ménage à des professionnelles fiables et compétentes. Nous sommes fiers de la qualité de nos services et de la satisfaction de nos clients. N'attendez plus pour découvrir le confort d'un foyer propre et bien rangé grâce à nos femmes de ménage qualifiées et expérimentées.
                    Contactez-nous dès aujourd'hui pour un devis gratuit et personnalisé
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