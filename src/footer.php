    <!-- Footer -->
        <footer class="footer">
            <div id="footer"></div>
            <div id="showCategories" class="footer__content">
                <h3><i class="fa fa-folder-open"></i> Temas</h3>
                <ul class="ul-categories">
                    <li class="hide"><a href=""><i class="fa fa-folder-o"></i></a></li>
                </ul>
                <div class="tags">
                    <h3><i class="fa fa-tags"></i> Etiquetas</h3><a href="" class="hide"><i class="fa fa-tag"></i></a>
                </div>
            </div>
            <div id="lastArticles" class="footer__content footer__articles">
                <h3><i class="fa fa-file"></i> &#218ltimos art&#237culos</h3>
                <ul class="ul-articles">
                  <li class="hide">
                    <a href="" target="_blank">
                      <i class="fa fa-file-text-o"></i>
                    </a>
                  </li>
                </ul>
            </div>
            <div class="footer__contact">
              <div class="footer__social">
                <h3>
                <address>
                  <a href="mailto:alexballera@gmail.com"><?php bloginfo('name'); ?></a>
                </address>
                </h3>
                <p><?php bloginfo('description'); ?></p>
                <p class="footer__social--p">Conoce y utiliza, entre otros, los siguientes lenguajes y frameworks:</p>
                <ul class="footer__contact--tech">
                  <li><i class="fa fa-html5"></i></li>
                  <li><i class="fa fa-css3"></i></li>
                  <li><i class="icon-javascript-alt"></i></li>
                  <li><i class="icon-ruby-on-rails"></i></li>
                  <li><i class="fa fa-wordpress"></i></li>
                  <li><i class="fa fa-git"></i></li>
                </ul>
                <h3>S&#237gueme y cont&#225ctame</h3>
                <ul class="footer__social--redes">
                  <li name="facebook"><a href="<?php echo esc_url( __( 'https://www.facebook.com/alexballera', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?php echo esc_url( __( 'https://twitter.com/AlexBallera', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( __( 'https://www.linkedin.com/in/alexballera', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?php echo esc_url( __( 'https://plus.google.com/u/0/+AlexBallera/posts', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="<?php echo esc_url( __('https://github.com/alexballera', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-github-alt"></i></a></li>
                <li><a href="mailto:alex@alexballera.com"><i class="fa fa-envelope-o"></i></a></li>
                </ul>
                <a href="#openModal">
                  <button class="informacion__boton" type="button"> <i class="fa fa-envelope-o"></i> Cont&#225ctame
                  </button>
                </a>
              </div>
            </div>
        </footer>
    <!-- Fin de Footer -->
    <section class="legal">
      <ul>
        <li><a href="http://alexballera.com/legal.html" target="_blank" title="Términos Legales">Términos Legales</a></li>
        <li><a href="http://alexballera.com/cookies.html" target="_blank" title="Política de Cookies">Política de Cookies</a></li>
      </ul>
    </section>
    <!-- Modal Contact -->
        <div id="openModal" class="modalDialog">
            <div>
              <picture class="nav__mobile--logo--picture">
                <source
                srcset="http://i2.wp.com/web.alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=50,
                http://i2.wp.com/web.alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=100 2x">
                <img
                src="http://i2.wp.com/web.alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=50"
                srcset="http://i2.wp.com/web.alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=50,
                http://i2.wp.com/web.alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=100 2x"
                alt="<?php bloginfo('name'); ?>">
                <figcaption><?php bloginfo('name'); ?></figcaption>
              </picture>
              <p><?php bloginfo('description'); ?></p>
              <ul>
                <li name="facebook"><a href="<?php echo esc_url( __( 'https://www.facebook.com/alexballera', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?php echo esc_url( __( 'https://twitter.com/AlexBallera', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( __( 'https://www.linkedin.com/in/alexballera', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?php echo esc_url( __( 'https://plus.google.com/u/0/+AlexBallera/posts', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="<?php echo esc_url( __('https://github.com/alexballera', 'twentyfifteen')); ?>" target="_blank"><i class="fa fa-github-alt"></i></a></li>
              </ul>
              <form action="//alexballera.us8.list-manage.com/subscribe/post?u=8d7312e4347b5791968e24e78&amp;id=d7ed361251" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      <div id="mc_embed_signup_scroll" class="form__email form__modal">
                        <div class="indicates-required" style="display:none"><span class="asterisk">*</span> Requerido</div>
                          <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="*Tu nombre aqu&#237...">
                          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="*Tu email aqu&#237...">
                          <input type="text" value="" name="MMERGE2" class="" id="mce-MMERGE2" placeholder="Deja tu mensaje aqu&#237...">
                          <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                          </div>
                          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8d7312e4347b5791968e24e78_d7ed361251" tabindex="-1" value=""></div>
                            <a href="#close" title="Cerrar" class="close">X</a>
                            <a href="#close" title="Cerrar" class="close__boton">
                            <div class="clear form__email--button">
                            <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button"><a href="#close"><i class="fa fa-envelope-o"></i> Cont&#225ctame</a></button>
                            </div>
                      </div>
                </form>
            </div>
        </div>
    <!-- Fin Modal Contact -->
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
        <script>
            window.cookieconsent_options = {"message":"Este sitio web utiliza cookies para asegurarse de que obtenga la mejor experiencia en nuestro sitio web","dismiss":"Aceptar","learnMore":"Más información","link":"http://web.alexballera.com/politica-de-cookies","theme":"dark-bottom"};
        </script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
        <!-- End Cookie Consent plugin -->
    <!-- Scripts -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.min.js"></script>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_footer(); ?>
  </body>
</html>