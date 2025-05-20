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
                <!-- <h1 class="pagetitle__heading">MENAGE, ET CUISINE </h1> -->
                <nav>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <!-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ménage, et cuisine</li> -->
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
                    <h2 class="heading__title">MENAGE, ET CUISINE </h2>
                    <h3 class="heading__subtitle">Des profiles Permanentes, Ponctuelles Ou Hebdomadaires</h3>
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
                                <img src="{{ asset('images/banners/menage-cuisine1.jpeg') }}" alt="bg">
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="package__body">
                                <div class="text-center">
                                    <h5 class="package__subtitle">Un Confort Optimal au Quotidien</h5>
                                    <p class="package__desc" style="text-align:left ;">

                                        Simplifiez votre vie avec nos profils "Ménage et Cuisine" résidents. Ces professionnels polyvalents assurent l'entretien de votre foyer et la préparation de vos repas, vous offrant un confort et une tranquillité d'esprit inégalés.

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
                                    <h5 class="package__subtitle">Un Service Complet et Personnalisé </h5>
                                    <p class="package__desc" style="text-align: left;">
                                        Nos profils résident à votre domicile du lundi au samedi, garantissant une disponibilité constante pour répondre à vos besoins. Ils assurent : <br>

                                        - L'entretien quotidien de votre maison : nettoyage des sols, lessive, repassage.<br>
                                        - Une gestion autonome des tâches ménagères et de l'organisation du foyer.<br>
                                        - Le maintien de la propreté et de l'ordre, vous permettant de profiter pleinement de votre temps libre.<br>


                                        Les profils permanents passent la nuit sur place et bénéficient d'un jour de repos par semaine, ou exceptionnellement deux jours toutes les deux semaines.
                                        <br>
                                        Tous les profils sont vérifiés et certifiés pour leurs compétences et leur fiabilité avant d'être placés, garantissant un service de qualité sur une durée indéterminée (sauf pour les demandes ponctuelles ou déterminées).
                                    </p>

                                </div>

                            </div><!-- /.package__body -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
                            <div class="bg-img">
                                <img src="{{ asset('images/banners/menage-cuisine2.jpg') }}" alt="bg">
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.pricing-package -->
                <div class="pricing-package p-0">
                    <div class="row row-gutter-0">
                        <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
                            <div class="bg-img">
                                <img src="{{ asset('images/banners/menage-cuisine3.jpeg') }}" alt="bg">
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="package__body">
                                <div class="text-center">
                                    <h5 class="package__subtitle">Cuisine Familiale et Savoureuse</h5>
                                    <p class="package__desc" style="text-align: left;">
                                        Nos intervenants préparent des repas équilibrés et adaptés à vos goûts, en tenant compte de vos préférences et éventuelles allergies. Ils sont capables de : <br>

                                        - Cuisiner des plats variés, allant de la cuisine traditionnelle marocaine aux recettes internationales simples et savoureuses. <br>

                                        - Adapter les menus selon vos exigences alimentaires et votre style de vie. <br>

                                        - Confiez-nous l'entretien de votre maison et la préparation de vos repas, et profitez d'un quotidien serein et agréable.
                                        <br>
                                        Allo Maison : Votre partenaire pour un foyer impeccable et des repas savoureux.
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