<div class="container mt-4">
    <div class="row justify-content-between">
        <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
                <h4>Categorías</h4>
                <ul class="list-unstyled">
                    <li><a class="text-dark text-center" href="/productos">Ver todas</a></li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
                <h4>Nosotros</h4>
                <ul class="list-unstyled">
                    <li><a class="text-dark" href="http://<?php echo $_SERVER['HTTP_HOST']?>/nosotros">Nosotros</a></li>
                    <li><a class="text-dark" href="http://<?php echo $_SERVER['HTTP_HOST']?>/faq">FAQ</a></li>
                    <li><a href="#myModal" data-toggle="modal" data-target="#myModal" class="text-dark">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="single_footer_part">
                <h4>Dirección</h4>
                <ul class="list-unstyled">
                    <li>Padre Patiño 847, Formosa</li>
                    <li>(370) 4627924</li>
                    <li><a href="mailto:info@pitagorasc.com.ar">info@pitagorasc.com.ar</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="single_footer_part">
                <h4>Newsletter</h4>
                <div id="mc_embed_signup">

                    <form
                        action="/"
                        method="post" class="subscribe_form relative mail_part">
                         {{csrf_field()}}
                         <div class="col-md-12 mb-2">
                       <input type="email" class="form-control" id="validationServerUsername" name="Email" id="newsletter" placeholder="Email" aria-describedby="inputGroupPrepend3" required
                      class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = ' Email Address '">
                         <div class="input-group">
                                         </div>
                      <button type="submit" class="btn btn-light blue required" name="submit" id="newsletter"
                            class="email_icon newsletter-submit button-contactForm required">Suscribite</button>

                            <div class="mt-10 info"></div>
</div>
                    </form>

                  </div>
                  </div>
                  </div>
                <div class="social_icon">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="copyright_text">
                <P>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Pitagoras'c</P>
            </div>
        </div>
    </div>
</div>
