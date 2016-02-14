    <!-- Footer -->
        <footer class="footer">
            <div id="footer"></div>
            <div id="showCategories" class="footer__content">
                <h3>Categorías</h3>
                <ul class="ul-categories">
                </ul>
            </div>
            <div id="lastArticles" class="footer__content footer__articles">
                <h3>Últimos artículos</h3>
                <ul class="ul-articles">
                </ul>
            </div>
            <div class="footer__contact">
              <div class="footer__social">
                <h3>
                <address>
                  <a href="mailto:alexballera@gmail.com"><?php bloginfo('name'); ?></a>
                </address>
                </h3>
                <p>He emprendido negocios en los sectores tecnología, restaurant, automotriz y networking. Actualmente me desempeño como <em>Front End Developer</em> desarrollando sitios web optimizados para móviles con diseños responsivos. Conozco y utilizo, entre otros, los siguientes lenguajes, aplicaciones y frameworks:</p>
                <ul class="footer__contact--tech">
                  <li><i class="fa fa-html5"></i></li>
                  <li><i class="fa fa-css3"></i></li>
                  <li><i class="icon-javascript-alt"></i></li>
                  <li><i class="icon-ruby-on-rails"></i></li>
                  <li><i class="fa fa-wordpress"></i></li>
                  <li><i class="fa fa-git"></i></li>
                </ul>
                <h3>Sígueme y contáctame</h3>
                <ul class="footer__social--redes">
                  <li name="facebook"><a href="https://www.facebook.com/alexballera" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/AlexBallera" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/alexballera" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://plus.google.com/u/0/+AlexBallera/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="https://github.com/alexballera" target="_blank"><i class="fa fa-github-alt"></i></a></li>
                  <li><a href="mailto:alexballera@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
                </ul>
                <a href="#openModal">
                  <button class="informacion__boton" type="button"> <i class="fa fa-envelope-o"></i> Contáctame
                  </button>
                </a>
              </div>
            </div>
        </footer>
    <!-- Fin de Footer -->
    <!-- Modal Contact -->
        <div id="openModal" class="modalDialog">
            <div>
              <picture class="nav__mobile--logo--picture">
                <source
                srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.svg,
                <?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera@2x.svg 2x">
                <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.jpg"
                srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.svg,
                <?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera@2x.svg 2x"
                alt="Alex Ballera | Web Developer">
                <figcaption>AlexBallera</figcaption>
              </picture>
              <p>Entrepreneur, Marketer & Front End Developer en tecnologías HTML5, CSS3, JavaScript & Ruby on Rails</p>
              <ul>
                <li name="facebook"><a href="https://www.facebook.com/alexballera" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/AlexBallera" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/alexballera" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://plus.google.com/u/0/+AlexBallera/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://github.com/alexballera" target="_blank"><i class="fa fa-github-alt"></i></a></li>
              </ul>
              <form action="//alexballera.us8.list-manage.com/subscribe/post?u=8d7312e4347b5791968e24e78&amp;id=d7ed361251" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      <div id="mc_embed_signup_scroll" class="form__email form__modal">
                        <div class="indicates-required" style="display:none"><span class="asterisk">*</span> Requerido</div>
                          <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="*Tu nombre aquí...">
                          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="*Tu email aquí...">
                          <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                          </div>    
                          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8d7312e4347b5791968e24e78_d7ed361251" tabindex="-1" value=""></div>
                            <a href="#close" title="Cerrar" class="close">X</a>
                            <a href="#close" title="Cerrar" class="close__boton">
                            <div class="clear form__email--button">
                            <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button"><i class="fa fa-envelope-o"></i> Contáctame</button>
                            </div>
                      </div>
                </form>
            </div>
        </div>
    <!-- Fin Modal Contact -->
    <!-- Scripts -->

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.min.js"></script>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_footer(); ?>
  </body>
</html>