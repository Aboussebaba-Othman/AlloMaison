@extends('default')
@section('content')

<!-- ========================
       page title 
    =========================== -->
<section class="page-title-layout4 page-title-light bg-overlay bg-parallax text-center">
  <div class="bg-img"><img src="{{ asset('images/page-titles/4-1.png') }}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="pagetitle__heading"></h1>
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
            <!-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Garde malade</li> -->
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
          <h2 class="heading__title">GARDE MALADE / INFIRMIÈRE</h2>
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
                <img src="{{ asset('images/pricing/banners/garde.jpeg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Bénéficiez d'un accompagnement personnalisé avec nos gardes-malades ou nos infirmières expérimentés</h5>
                  <p class="package__desc" style="text-align:left ;">Prendre soin d'un proche dépendant est une responsabilité importante et parfois éprouvante. Chez Allo Maison, nous comprenons les défis que vous pouvez rencontrer et nous sommes là pour vous aider à trouver la solution idéale pour assurer le bien-être de votre proche.
                    Allo Maison a été la première agence de prestations de services d’aides à la personne à proposer un service de garde-malade polyvalent (Garde-malade, ménage et cuisine) à domicile sur mesure pour offrir à votre proche l'assistance et l'accompagnement dont il a besoin, dans le respect de son autonomie et de sa dignité.<br>
                    <b>Des gardes-malades expérimentés mais aussi de infirmières diplômées:</b><br>
                    Une garde malade est généralement une personne expérimentée non diplomée qui fournit des soins de base et un soutien aux personnes malades ou âgées à domicile. Une infirmière, en revanche, est une professionnelle de la santé diplômée, formée pour dispenser des soins médicaux plus spécialisés, comme administrer des médicaments, effectuer des injections, et fournir des soins infirmiers avancés.
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
                  <h5 class="package__subtitle">Des services personnalisés pour répondre aux besoins spécifiques de chaque patient</h5>
                  <p class="package__desc" style="text-align: left;">
                    Chaque personne âgée ou dépendante a des besoins et des attentes uniques. C'est pourquoi nous prenons le temps de discuter avec vous et votre proche pour cerner ses besoins spécifiques afin de proposer et de vous orienter vers les profils adéquats.
                    Voici quelques-uns des services que nous proposons :
                    <br>
                    • Aide à la toilette et à l'habillage<br>
                    • Accompagnement aux rendez-vous médicaux<br>
                    • Aide à la mobilité<br>
                    • Surveillance de l'état de santé<br>
                    • Suivi des prises de médicaments<br>
                    • Ménage léger<br>
                    • Courses<br>
                    • Préparation des repas<br>
                    • Soutien psychologique et affectif<br>

                  </p>

                </div>

              </div><!-- /.package__body -->
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/garde2.jpeg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.pricing-package -->
        <div class="pricing-package p-0">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
              <div class="bg-img">
                <img src="{{ asset('images/pricing/banners/garde3.jpeg') }}" alt="bg">
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="package__body">
                <div class="text-center">
                  <h5 class="package__subtitle">Un accompagnement pour des besoins permanents, ponctuels ou hebdomadaires </h5>
                  <p class="package__desc" style="text-align: left;">
                    Nos gardes-malades / Infirmières sont disponibles pour des interventions régulières (hebdomadaires, bihebdomadaires, mensuelles) ou ponctuelles. Allo Maison saura s’adapter à vos besoins en vous proposant un accompagnement et une offre de service personnalisée
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