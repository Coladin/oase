<?php get_header(); ?>

    <main id="site-content" role="main">
	    <?php if ( has_nav_menu( 'oase' ) ) : ?>
			    <?php
			    wp_nav_menu(
				    array(
					    'theme_location' => 'oase',
//					    'menu_class'     => 'flex bg-gray-300',
					    'items_wrap'     => '<div class="flex bg-gray-300">%3$s</div>',
				    )
			    );
			    ?>
	    <?php endif; ?>

        <p class="text-center mt-12">
            Moderne & bezahlbare, barrierefreie Neubau-Seniorenwohnungen im Erstbezug PROVISIONSFREI vom Bauherr<br>
            Direkt am RE-Bahnhof Nauen, verkehrstechnisch sehr gut gelegen<br>
            Professionelle ambulante Pflege vor Ort, Ärtzte sowie Fisiotherapie im Haus<br>
            Rezeption 24 h / medizinische Notfallbereitschaft 24 h / eigene security 24 h<br>
            Vom Friseur über SPA / Physiotherapie bis zur eigenen gesunden & preiswerten Kantine - alles vor Ort
        </p>

        <p class="py-8 rounded-lg text-blue-800 text-3xl text-center mt-12 grad">Eine unverbindliche WOHNUNGSBEWERBUNG ausfüllen !</p>

        <div class="flex mt-8">
            <div class="flex-1 bg-gray-300 rounded-lg text-gray-700 text-center px-4 py-12 m-8">Anmelden,<br>um als erster wichtige Neuigkeiten zu erhalten</div>
            <div class="flex-1 bg-gray-300 rounded-lg text-gray-700 text-center px-4 py-16 m-8">Einem Freund per E-Mail empfehlen</div>
        </div>
        <?php

        if ( have_posts() ) {

            $i = 0;

            while ( have_posts() ) {
                $i++;
                if ( $i > 1 ) {
                    echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
                }
                the_post();

                get_template_part( 'template-parts/content', get_post_type() );

            }
        } elseif ( is_search() ) {
            ?>

            <div class="no-search-results-form section-inner thin">

                <?php
                get_search_form(
                    array(
                        'label' => __( 'search again', 'twentytwenty' ),
                    )
                );
                ?>

            </div><!-- .no-search-results -->

            <?php
        }
        ?>

        <?php get_template_part( 'template-parts/pagination' ); ?>

    </main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
