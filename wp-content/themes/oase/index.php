<?php get_header(); ?>

    <main id="site-content" role="main">
	    <ul class="mt-8 w-4/5 mx-auto listImage">
            <li class="text-2xl text-gray-700 ml-16">Moderne & bezahlbare, barrierefreie Neubau-Seniorenwohnungen im Erstbezug PROVISIONSFREI vom Bauherr</li>
            <li class="text-2xl text-gray-700 ml-16">Direkt am RE-Bahnhof Nauen, verkehrstechnisch sehr gut gelegen</li>
            <li class="text-2xl text-gray-700 ml-16">Professionelle ambulante Pflege vor Ort, Ärtzte sowie Fisiotherapie im Haus</li>
            <li class="text-2xl text-gray-700 ml-16">Rezeption 24 h / medizinische Notfallbereitschaft 24 h / eigene security 24 h</li>
            <li class="text-2xl text-gray-700 ml-16">Vom Friseur über SPA / Physiotherapie bis zur eigenen gesunden & preiswerten Kantine - alles vor Ort</li>
        </ul>

        <p class="py-8 text-blue-800 text-3xl text-center mt-8 grad">Eine unverbindliche WOHNUNGSBEWERBUNG ausfüllen !</p>

        <div class="flex">
            <div class="flex-1 bg-gray-300 rounded-lg text-gray-700 text-center px-4 py-12 m-8 shadow-2xl font-semibold">ANMELDEN,<br>UM ALS ERSTER WICHTIGE NEUIGKEITEN ZU ERHALTEN</div>
            <div class="flex-1 bg-gray-300 rounded-lg text-gray-700 text-center px-4 py-16 m-8 shadow-2xl font-semibold">EINEM FREUND PER E-MAIL EMPFEHLEN</div>
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
