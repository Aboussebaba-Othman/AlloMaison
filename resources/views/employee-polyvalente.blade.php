@extends('default')
@section('content')


<!-- ========================
       page title 
    =========================== -->
<section class="page-title-layout4 page-title-light bg-overlay bg-parallax text-center">
  <div class="bg-img"><img src="{{ asset('images/page-titles/5-2.png') }}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="pagetitle__heading"></h1>
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
            <!-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Employés Polyvalentes</li> -->
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
          <h2 class="heading__title">PROFILS POLYVALENTES</h2>
          <h3 class="heading__subtitle">Employés Polyvalentes permanentes, hebdomadaires ou ponctuelles</h3>
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
                <img src="{{ asset('images/banners/poly2.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Simplifiez votre quotidien avec nos employés polyvalents efficaces et dévoués</h5>
                  <p class="package__desc" style="text-align:left ;">Reprenez le contrôle de votre temps libre et confiez les tâches ménagères à nos employées polyvalentes. Allo Maison adapte son offre à vos besoins, et vous trouve une employée de maison fiable aux compétences variées, de la garde d’enfant à la cuisine, en passant par le ménage. Nos employés polyvalentes sont bien plus que de simples aides-ménagères. Ce sont des professionnelles expérimentées et qualifiées qui possèdent toutes les compétences nécessaires pour prendre en charge plusieurs taches du quotidien. Les profils polyvalentes existent sous plusieurs formes 
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
                  <h5 class="package__subtitle">Nounou polyvalente</h5>
                  <p class="package__desc" style="text-align: left;">
                    Une nounou polyvalente est une personne qui possède une expérience significative dans la garde d’enfants de toute âges, elle peut également accomplir des taches ménagères légères, comme le nettoyage de la maison ou repasser le linge et préparer des repas simple du quotidien, ou éplucher les légumes et apporter une aide en cuisine… En d’autre termes il s’agit de profils « Nounou , ménage ,aide cuisine » ou « nounou, ménage, cuisine normal » (cuisine marocaine) 
                    <br>
                    Ce type de profil est proposé dans le cas où l’enfant est en bas âge et n’est pas scolarisé. Cette polyvalence est un atout précieux pour les familles, car elle offre une aide complète, aussi bien pour les enfants que pour la gestion des tâche domestiques
                  </p>

                </div>

              </div><!-- /.package__body -->
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/banners/poly3.jpeg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.pricing-package -->
        <div class="pricing-package p-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/banners/poly1.jpeg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">femme de ménage polyvalente </h5>
                  <p class="package__desc" style="text-align: left;">

                    La femme de ménage polyvalente est principalement une aide ménagère c’est une personne capable de prendre en charge plusieurs responsabilités dans un cadre domestique . <br>
                    Les tâches principales seront de s’occuper de la propreté de la maison et à préparer des plats marocains traditionnelles variés ou ( cuisines Beldi et Roumi). <br>
                    Elle s’occupe egalment de la gestion des enfants scolarisés : en aidant notamment les enfants à se préparer avant l’école, veille sur eux à leur retour, les accompagne au transport scolaire ou éventuellement les déposer à l’école.
                    <br>
                    Cette polyvalence permet de répondre au besoin domestique et familieux de manière efficace et adapter. En d’autres termes, il s’agit de profils «ménage, cuisine beldi & roumi, Aide nounou » ou « ménage, cuisine marocaine traditionnelle & aide nounou »

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