<!-- ========================
      Footer
    ========================== -->
<style>
  body {
    margin: 0;
    padding: 0;
  }

  .sticky-btn {
    position: fixed;
    bottom: 20px;
    width: 80px;
    height: 80px;
    background-color: #25D366;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    text-decoration: none;
    font-size: 35px;
    z-index: 1000;
    transition: transform 0.3s ease;
  }

  .sticky-btn:hover {
    transform: scale(1.1);
  }

  .phone {
    right: 20px;
    background-color: #007AFF;
  }

  .whatsapp {
    left: 20px;
  }
</style>
<footer class="footer ">
  <div class="footer-primary">
    <div class="container" style="width:80%">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="footer-widget-contact">
            <h6 class="footer-widget__title">Contact rapide</h6>
            <ul class="contact-list list-unstyled">
              <li>Si vous avez des questions ou avez besoin d'aide, n'hésitez pas à contacter notre équipe.</li>
              <li>
                <a href="tel:00201061245741" class="phone__number">
                  <i class="icon-phone"></i> <span>+212 699-780299</span>
                </a>
              </li>
              <li>98 Rue Abou Ishak Al Marouni, Casablanca 20000</li>
            </ul>

            <a href="{{ route('contact-us') }}" class="btn btn__white btn__link mr-30">
              <i class="fas fa-map-marker-alt"></i> <span>Obtenir Des Directions</span>
            </a>
          </div><!-- /.footer-widget__content -->
        </div><!-- /.col-xl-2 -->
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class=" footer-widget-nav">
            <h6 class="footer-widget__title">Allo maison</h6>
            <nav>
              <ul class="list-unstyled">
                <li><a href="{{ route('contact-us') }}">Contact</a></li>
                <li><a href="{{ route('home') }}#qui-sommes-nous">Qui sommes nous?</a></li>
                <li><a href="{{ route('home') }}#Nos Chiffres">Nos Chiffres</a></li>
              </ul>
            </nav>
          </div><!-- /.footer-widget__content -->
        </div><!-- /.col-lg-2 -->
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="footer-widget-nav">
            <h6 class="footer-widget__title">Nos Services</h6>
            <nav>
              <ul class="list-unstyled">
                <li><a href="{{ route('femme-de-menage') }}">Femme de ménage</a></li>
                <li><a href="{{ route('nounou') }}">Nounou</a></li>
                <li><a href="{{ route('cuisinière') }}">Cuisinière</a></li>
                <li><a href="{{ route('employée-polyvalente') }}">Employé polyvalente</a></li>
                <li><a href="{{ route('Garde-malade') }}">Garde malade</a></li>
              </ul>
            </nav>
          </div><!-- /.footer-widget__content -->
        </div><!-- /.col-lg-2 -->


      </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
  </div><!-- /.footer-primary -->
  <div class="footer-secondary">
    <div class="container">
      <button id="scrollTopBtn" style="float:right ;">
        <i class="fas fa-long-arrow-alt-up"></i>

      </button>

      <div class="row align-items-center">

        <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center">
          <div>
            <ul class="social-icons list-unstyled my-2" style="display:flex; justify-content:center">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="footer__copyrights">
              <span class="fz-14">&copy; 2024 - allo-maison |All rights reserved </span>
              <a class="fz-14 color-primary" href="https://www.ubikom-digital.com">ubikom-digital.com</a>
            </div>

          </div>

        </div><!-- /.col-xl-10 -->

      </div><!-- /.row -->

    </div><!-- /.container -->
  </div><!-- /.footer-secondary -->
</footer><!-- /.Footer -->

</div><!-- /.wrapper -->
<div class="search-popup">
  <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
  <form class="search-popup__form">
    <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
    <button class="search-popup__btn"><i class="icon-search"></i></button>
  </form>
</div><!-- /. search-popup -->


<!-- WhatsApp Button -->
<a href="https://wa.me/212699780299" class="sticky-btn whatsapp" target="_blank">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- Phone Button -->
<a href="tel:+212699-780299" class="sticky-btn phone">
  <i class="fas fa-phone"></i>
</a>

<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>