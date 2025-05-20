<nav class="navbar navbar-expand-lg navbar-light" id="nav-mobile" style="background-color:white !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('images/page-titles/logo.png') }}" alt="logo" width="130"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav__item">
          <a href="{{ route('home') }}" class="nav__item-link">Accueil</a>
        </li>
        <li class="nav__item">
          <div class="row mx-0">
            <div class="col-sm-9 dropdown-menu-col">
              <ul class="nav flex-column">
                <li class="nav__item">
                  <a class="nav__item-link" href="{{ route('femme-de-menage') }}">Femme de ménage</a>
                </li> <!-- /.nav-item -->
                <li class="nav__item">
                  <a class="nav__item-link" href="{{ route('nounou') }}">Nounou Pro</a>
                </li> <!-- /.nav-item -->
                <li class="nav__item">
                  <a class="nav__item-link" href="{{ route('cuisinière') }}">Cuisinière</a>
                </li> <!-- /.nav-item -->
                <li class="nav__item">
                  <a class="nav__item-link" href="{{ route('employée-polyvalente') }}">Employé polyvalente</a>
                </li> <!-- /.nav-item -->
                <li class="nav__item">
                  <a class="nav__item-link" href="{{ route('Garde-malade') }}">Garde malade / Infirmière</a>
                </li> <!-- /.nav-item -->
                <li class="nav__item">
                  <a class="nav__item-link" href="{{ route('Chauffeur : Coursier') }}">Chauffeur / Coursier</a>
                </li> <!-- /.nav-item -->
                <li class="nav__item">
                  <a class="nav__item-link" href="{{ route('Concierge & gardien') }}">Concierge & gardien</a>
                </li> <!-- /.nav-item -->
                <!-- <li class="nav__item">
                  <a class="nav__item-link" href="{{ route('Agent de sécurité') }}">Agent de sécurité</a>
                </li>  -->
                <!-- /.nav-item -->
              </ul>
            </div><!-- /.col-sm-6 -->
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="{{ route('home') }}#qui-sommes-nous" class="nav__item-link">à propos </a>
        </li>
        <li class="nav__item">
          <a href="tel:212661409190" class="nav__item-link">Appelez-nous </a>
        </li>



      </ul>
    </div>
  </div>
</nav>




<nav class="navbar navbar-expand-lg sticky-navbar" id="nav-desktop">
  <div class="container" style="width:80%">
    <div class="row">
      <div class="col-md-5" style="display:flex;align-items:center">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('images/page-titles/logo.png') }}" alt="logo" width="130">
      </div>
      </a>
      <div class="col-md-7">

        <button class="navbar-toggler" type="button">
          <span class="menu-lines"><span></span></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavigation">
          <ul class="navbar-nav mr-auto" style="padding-left: 180px;">
            <li class="nav__item">
              <a href="{{ route('home') }}" class="nav__item-link">Accueil</a>
            </li>



            <li class="nav__item has-dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Services</a>
              <ul class="dropdown-menu">
                <li class="nav__item">
                  <div class="row mx-0">
                    <div class="col-sm-6 dropdown-menu-col">
                      <a href="#" class="nav__item-link dropdown-menu-title">Services</a>
                      <ul class="nav flex-column">
                        <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('femme-de-menage') }}">Femme de ménage</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('nounou') }}">Nounou Pro</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('menage-cuisine') }}">Ménage / cuisine</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('cuisinière') }}">Cuisinière</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('employée-polyvalente') }}">Employé polyvalente</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('Garde-malade') }}">Garde malade / Infirmière</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('Chauffeur : Coursier') }}">Chauffeur / Coursier</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('Concierge & gardien') }}">Concierge & gardien</a>
                        </li> <!-- /.nav-item -->
                        <!-- <li class="nav__item">
                          <a class="nav__item-link" href="{{ route('Agent de sécurité') }}">Agent de sécurité</a>
                        </li> -->
                        <!-- /.nav-item -->
                      </ul>
                    </div><!-- /.col-sm-6 -->


              </ul><!-- /.dropdown-menu -->
            </li><!-- /.nav-item -->

            <li class="nav__item">
              <a href="{{ route('home') }}#qui-sommes-nous" class="nav__item-link">à propos </a>
            </li>



            <li class="nav__item">
              <a href="{{ route('contact-us') }}" class="nav__item-link">Contact</a>
            </li><!-- /.nav-item -->
          </ul><!-- /.navbar-nav -->

          <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">

            <li><a href="tel:212661409190" class="btn btn__primary action__btn-request">appelez nous </a>
            </li>
          </ul>
        </div><!-- /.container -->
      </div>
    </div>
  </div>

</nav><!-- /.navabr -->