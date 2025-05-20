@extends('default')
@section('content')
<!-- ==========================
        contact layout 1
    =========================== -->
    
    <section class="contact-layout1 pt-10 pb-0 mt--70">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="contact-panel d-flex flex-wrap">
                  <form class="contact-panel__form" method="post" action="{{ route('submit.form') }}" id="contactForm">
                    @csrf
                  <div class="row">
                      <div class="col-sm-12">
                        <h4 class="contact-panel__title">Remplir le formulaire</h4>
                        <p class="contact-panel__desc mb-30">NB: Autre ville que Casablanca, bouskoura, darbouazza. Allo Maison vous informe que seuls les profils subsahariennes permanentes sont disponibles pour d'autres villes avec 2 jours off par quinzaines ou 4 jours par mois.
                         Une possibilité d'un contrat de 1ans fix est envisageable.
                        </p>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Nom & prénom" id="contact-name" name="name" required="">
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email" id="contact-email" name="email" required="">
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="numéro" id="contact-Phone" name="phone" required="">
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <select class="form-control" name="besoin">
                            <option value="0">Je souhaite:</option>
                            <option value="1">Engager un(e) personnel de maison</option>
                            <option value="2">Postuler pour un travail</option>
                          </select>
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <select class="form-control" name='logement'>
                            <option value="0">Votre type de logement :</option>
                            <option value="1">Villa</option>
                            <option value="2">Appartement</option>
                          </select>
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <select class="form-control" name='type'>
                            <option value="0">Votre besoin</option>
                            <option value="1">Femme de ménage</option>
                            <option value="2">Nounou</option>
                            <option value="3">Cuisinière</option>
                            <option value="4">Employé polyvalente</option>
                            <option value="5">Garde malade</option>
                            <option value="6">Chauffeur / Coursier</option>
                            <option value="7">Concierge & gardien</option>
                            <option value="8">Agent de sécurité</option>
                          </select>
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <select class="form-control" name='profile'>
                            <option value="0">Type de profil :</option>
                            <option value="1">Marocain(e)</option>
                            <option value="2">Subsaharien(ne)</option>
                          </select>
                        </div>
                      </div><!-- /.col-lg-6 -->

                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <select class="form-control" name='nuit'>
                            <option value="0">Passe la nuit ?</option>
                            <option value="1">Oui</option>
                            <option value="2">Non</option>
                          </select>
                        </div>
                      </div><!-- /.col-lg-6 -->

                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <select class="form-control" name='ville'>
                            <option value="0">Casablanca</option>
                            <option value="1">Settat</option>
                            <option value="2">Rabat</option>
                            <option value="3">Marrakech</option>
                            <option value="4">Agadir</option>
                            <option value="5">Bouskoura</option>
                            <option value="6">Darbouazza</option>
                            <option value="7">Autre</option>
                          </select>
                        </div>
                      </div><!-- /.col-lg-6 -->
                    
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <label for="rooms">Votre budget :</label>
                          <div class="position-relative">
                            <button class="decrease-qty">
                              <i class="fas fa-caret-down"></i>
                            </button>
                            <input type="number" value="1000" min="1000" max="6000" class="form-control input-number" id="rooms" name='budget'>
                            <button class="increase-qty">
                              <i class="fas fa-caret-up"></i>
                            </button>
                          </div>
                        </div>
                      </div><!-- /.col-lg-6 -->
                      
                      <div class="col-12">
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Donnez-nous des détails supplémentaires concernant votre besoin:" id="contact-message" name="message"></textarea>
                        </div>
                        <p class="contact-panel__desc mb-30">NB: Autre ville que Casablanca. Allo Maison vous informe que seuls les profils subsahariennes permanentes sont disponibles pour d'autres villes avec 2 jours off par quinzaines ou 4 jours par mois.
                         </p>

                         <!-- <button type="submit">submit</button> -->
                        <button type="submit" class="btn btn__secondary btn__block btn__xhight d-flex justify-content-between mt-10">
                          <span>Envoyer</span> <i class="icon-arrow-right icon-outlined"></i>
                        </button>
                        
                      </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
              </form>
              <div class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img"><img src="assets/images/banners/2.jpg" alt="banner"></div>
                <div>
                  <h3 class="contact-panel__subtitle color-white">Les propriétaires nous aiment !</h3>
                  <h4 class="contact-panel__title color-white">Un environnement sain pour votre famille</h4>
                  <p class="contact-panel__desc font-weight-bold color-white pb-0">Les processus et systèmes que nous mettons en place
                    lieu offre un service de haute qualité axé sur la sécurité.
                  </p>
                </div>
                <div style="display:flex;justify-content:center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.7883698398423!2d-7.639718924735039!3d33.58484364226649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2ea40c09225%3A0xafc498b807c59c0!2sAllo%20Maison!5e0!3m2!1sen!2sma!4v1713436406962!5m2!1sen!2sma" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                  <ul class="contact__list list-unstyled mb-0 mt-10">
                    <li>
                      <i class="icon-phone"></i><a href="tel:+5565454117">Ligne d'urgence : +212 699-780299</a>
                    </li>
                    <li>
                      <i class="icon-location"></i><a href="#https://www.google.com/maps/place/Allo+Maison/@33.5848436,-7.6397189,17z/data=!4m6!3m5!1s0xda7d2ea40c09225:0xafc498b807c59c0!8m2!3d33.5848392!4d-7.637144!16s%2Fg%2F11f__7y38m?entry=ttu">Localisation: Casablanca, Maroc</a>
                    </li>
                    <li>
                      <i class="icon-clock"></i><a href="contact-us.html">lun - ven: 8:00 am - 7:00 pm</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
   

    <!-- ========================
      feature-layout1
    ========================== -->
    
       
      </div><!-- /.container -->
    </section><!-- /.feature-layout1 -->
  </section><!-- /.contact layout 1 -->





@stop
