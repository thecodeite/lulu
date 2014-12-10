<?php $social = get_option( 'refinery_social' ); ?>
<?php if ( $social == true ) : ?>
    <div id="social">
        <ul class="nolist">
             <?php if ( $social['facebook'] ) : ?>
                  <li class="facebook"><a href="<?php esc_html_e( $social['facebook'] ); ?>"><i class="icon-facebook"></i></a></li>
             <?php endif; ?>
             
             <?php if ( $social['twitter'] ) : ?>
                  <li class="twitter"><a href="//twitter.com/<?php esc_html_e( $social['twitter'] ); ?>"><i class="icon-twitter"></i></a></li>
             <?php endif; ?>
             
             <?php if ( $social['gplus'] ) : ?>
                  <li class="gplus"><a href="//plus.google.com/<?php esc_html_e( $social['gplus'] ); ?>"><i class="icon-googleplus"></i></a></li>
             <?php endif; ?>
             
             <?php if ( $social['linkedin'] ) : ?>
                  <li class="linkedin"><a href="<?php esc_html_e( $social['gplus'] ); ?>"><i class="icon-linkedin"></i></a></li>
             <?php endif; ?>
             
             <?php if ( $social['dribbble'] ) : ?>
                  <li class="dribbble"><a href="//dribbble.com/<?php esc_html_e( $social['dribbble'] ); ?>"><i class="icon-dribble"></i></a></li>
             <?php endif; ?>
             
             <?php if ( $social['pinterest'] ) : ?>
                  <li class="pinterest"><a href="//pinterest.com/<?php esc_html_e( $social['pinterest'] ); ?>"><i class="icon-pinterest"></i></a></li>
             <?php endif; ?>
             
             <?php if ( $social['youtube'] ) : ?>
                  <li class="youtube"><a href="//youtube.com/user/<?php esc_html_e( $social['youtube'] ); ?>"><i class="icon-youtube"></i></a></li>
             <?php endif; ?>
             
             <?php if ( $social['vimeo'] ) : ?>
                  <li class="vimeo"><a href="//http://vimeo.com/<?php esc_html_e( $social['vimeo'] ); ?>"><i class="icon-vimeo"></i></a></li>
             <?php endif; ?>
             
             <?php if ( $social['skype'] ) : ?>
                  <li class="skype"><a href="skype:<?php esc_html_e( $social['skype'] ); ?>?call"><i class="icon-skype"></i></a></li>
             <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>