@extends('default')
@section('content')

<!-- ========================
       page title 
    =========================== -->
<section class="page-title-layout4 page-title-light bg-overlay bg-parallax text-center">
  <div class="bg-img"><img src="{{ asset('images/page-titles/8.png') }}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="pagetitle__heading"></h1>
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
            <!-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Agent de sécurité</li> -->
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
          <h2 class="heading__title">AGENT DE SÉCURITÉ / MAITRE-CHIEN</h2>
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
                <img src="{{ asset('images/pricing/banners/Agent.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Optez pour une sécurité sur mesure et fiable pour votre entreprise, votre domicile ou votre événement.</h5>
                  <p class="package__desc" style="text-align:left ;">Allo Maison met à votre disposition des agents de sécurité et maitres-chiens expérimentés pour répondre à tous vos besoins en matière de sécurité. Nous vous proposons un service sur mesure, adapté à vos exigences et à votre budget, afin d’assurer la sécurité de vos locaux, chantiers, événements, et ce, 7j/7 et 24h/24</p>
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
                  <h5 class="package__subtitle">Des agents de sécurité qualifiés et réactifs</h5>
                  <p class="package__desc" style="text-align: left;">
                    Nos agents de sécurité sont rigoureusement sélectionnés, formés et équipés pour vous offrir un service de qualité irréprochable. Ils suivent régulièrement des formations continues pour se tenir à jour des dernières techniques et procédures en matière de sécurité. Ils sont vigilants, réactifs et dotés d'un excellent sens de l'observation, ce qui leur permet d'anticiper les risques et d'intervenir efficacement en cas d'incident.<br>
                    <b>Nos agents de sécurité peuvent assurer les missions suivantes :</b><br>
                    • Surveillance statique et dynamique: Ils effectuent des rondes régulières de vos locaux, à l'intérieur comme à l'extérieur, pour dissuader les intrusions et détecter les anomalies.<br>
                    • Contrôle d'accès et gestion des badges: Ils contrôlent les entrées et sorties de vos locaux, vérifient l'identité des visiteurs et gèrent le système de badges d'accès.<br>
                    • Intervention en cas d'incident: Ils sont formés pour intervenir rapidement et efficacement en cas d'incident, de tentative d'intrusion, de vol ou d'agression.<br>
                    • Palier mobile: Ils assurent une présence dissuasive dans les halls d'immeubles, les centres commerciaux ou les lieux publics.<br>
                    • Télésurveillance: Ils surveillent vos locaux à distance à l'aide de caméras de vidéosurveillance et d'alarmes.<br>
                    • Gardiennage de nuit: Ils assurent la sécurité de vos locaux pendant la nuit, lorsque les
                  </p>

                </div>

              </div><!-- /.package__body -->
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/Agent2.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.pricing-package -->
        <div class="pricing-package p-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/Agent3.jpg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Allo Maison : votre partenaire pour une sécurité optimale </h5>
                  <p class="package__desc" style="text-align: left;">
                    Avec Allo Maison, vous avez l'assurance de confier la sécurité de vos biens et de vos personnes à des professionnels compétents, fiables et réactifs. Nous sommes fiers de la qualité de nos services et de la satisfaction de nos clients. N'attendez plus pour découvrir la tranquillité d'esprit d'une sécurité assurée par des experts.<br>
                    Contactez-nous dès aujourd'hui pour un devis personnalisé.

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