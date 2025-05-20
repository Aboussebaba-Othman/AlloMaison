@extends('default')
@section('content')
<!-- ========================
       page title 
    =========================== -->
<section class="page-title-layout4 page-title-light bg-overlay bg-parallax text-center">
  <div class="bg-img"><img src="{{ asset('images/page-titles/2-1.png') }}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- <h1 class="pagetitle__heading">Nounou</h1> -->
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
            <!-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nounou</li> -->
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
          <h2 class="heading__title">NOUNOU MENAGE / NOUNOU POLYVALENTE / NOUNOU PRO </h2>
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
                <img src="{{ asset('images/banners/nounou2.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Nos Services de Nounou Polyvalentes</h5>
                  <p class="package__desc" style="text-align:left ;">

                    Une nounou polyvalente est une personne qui possède une expérience significative dans la garde d’enfants de toute âges, elle peut également accomplir des taches ménagères légères, comme le nettoyage de la maison ou repasser le linge et préparer des repas simple du quotidien, ou éplucher les légumes et apporter une aide en cuisine… En d’autre termes il s’agit de profils « Nounou , ménage ,aide cuisine » ou « nounou, ménage, cuisine normal » (cuisine marocaine).
                    <br><br>
                    Ce type de profil est proposé dans le cas où l’enfant est en bas âge et n’est pas scolarisé. Cette polyvalence est un atout précieux pour les familles, car elle offre une aide complète, aussi bien pour les enfants que pour la gestion des tâche domestiques.
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
                  <h5 class="package__subtitle">Une équipe expérimentée et bienveillante</h5>
                  <p class="package__desc" style="text-align: left;">
                    Nos nounous sont soigneusement sélectionnées pour garantir un accompagnement de qualité. Elles possèdent une expérience significative dans la garde d'enfants et, pour certaines, sont elles-mêmes mamans, ce qui leur apporte une approche maternelle et bienveillante. Elles sont qualifiées, attentives et adaptées aux besoins spécifiques de chaque famille. Nous nous engageons à vous proposer la nounou idéale en fonction de votre situation et de votre budget.
                  </p>

                </div>

              </div><!-- /.package__body -->
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/banners/cuisiniere2.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.pricing-package -->
        <div class="pricing-package p-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/banners/cuisiniere3.jpeg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Un service fiable et flexible</h5>
                  <p class="package__desc" style="text-align: left;">
                    Nous mettons un point d'honneur à offrir un service à la fois flexible et de confiance. Nos nounous sont sélectionnées avec rigueur, disposent de références vérifiées et s’adaptent à vos horaires et besoins spécifiques. De plus, nous restons disponibles pour toute question ou demande d’assistance. Chez Allo Maison, nous savons que le choix d’une nounou est une décision importante. C’est pourquoi nous mettons tout en œuvre pour vous proposer des femmes attentionnées, bienveillantes et expérimentées, soucieuses du bien-être et de l’épanouissement de vos enfants.
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